/**
 * @file
 * JavaScript behaviors for filter by text.
 */

(function ($, Drupal, debounce) {

  'use strict';

  /**
   * Filters the webform element list by a text input search string.
   *
   * The text input will have the selector `input.webform-form-filter-text`.
   *
   * The target element to do searching in will be in the selector
   * `input.webform-form-filter-text[data-element]`
   *
   * The text source where the text should be found will have the selector
   * `.webform-form-filter-text-source`
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the behavior for the webform element filtering.
   */
  Drupal.behaviors.webformFilterByText = {
    attach: function (context, settings) {
      $('input.webform-form-filter-text', context).once('webform-form-filter-text').each(function () {
        var $input = $(this);
        $input.wrap('<div class="webform-form-filter"></div>');
        var $reset = $('<input class="webform-form-filter-reset" type="reset" title="Clear the search query." value="✕" style="display: none" />');
        $reset.insertAfter($input);
        var $table = $($input.data('element'));
        var $summary = $($input.data('summary'));
        var $noResults = $($input.data('no-results'));
        var $details = $table.closest('details');
        var $filterRows;

        var focusInput = $input.data('focus') || 'true';
        var sourceSelector = $input.data('source') || '.webform-form-filter-text-source';
        var parentSelector = $input.data('parent') || 'tr';
        var selectedSelector = $input.data('selected') || '';

        var hasDetails = $details.length;
        var totalItems;
        var args = {
          '@item': $input.data('item-singular') || Drupal.t('item'),
          '@items': $input.data('item-plural') || Drupal.t('items'),
          '@total': null
        };

        if ($table.length) {
          $filterRows = $table.find(sourceSelector);
          $input
            .attr('autocomplete', 'off')
            .on('keyup', debounce(filterElementList, 200))
            .keyup();

          $reset.on('click', resetFilter);

          // Make sure the filter input is always focused.
          if (focusInput === 'true') {
            setTimeout(function () {$input.trigger('focus');});
          }
        }

        /**
         * Reset the filtering
         *
         * @param {jQuery.Event} e
         *   The jQuery event for the keyup event that triggered the filter.
         */
        function resetFilter(e) {
          $input.val('').keyup();
          $input.trigger('focus');
        }

        /**
         * Filters the webform element list.
         *
         * @param {jQuery.Event} e
         *   The jQuery event for the keyup event that triggered the filter.
         */
        function filterElementList(e) {
          var query = $(e.target).val().toLowerCase();

          // Filter if the length of the query is at least 2 characters.
          if (query.length >= 2) {
            // Reset count.
            totalItems = 0;
            if ($details.length) {
              $details.hide();
            }
            $filterRows.each(toggleEntry);

            // Announce filter changes.
            // @see Drupal.behaviors.blockFilterByText
            Drupal.announce(Drupal.formatPlural(
              totalItems,
              '1 @item is available in the modified list.',
              '@total @items are available in the modified list.',
              args
            ));
          }
          else {
            totalItems = $filterRows.length;
            $filterRows.each(function (index) {
              $(this).closest(parentSelector).show();
              if ($details.length) {
                $details.show();
              }
            });
          }

          // Set total.
          args['@total'] = totalItems;

          // Hide/show no results.
          $noResults[totalItems ? 'hide' : 'show']();

          // Hide/show reset.
          $reset[query.length ? 'show' : 'hide']();

          // Update summary.
          if ($summary.length) {
            $summary.html(Drupal.formatPlural(
              totalItems,
              '1 @item',
              '@total @items',
              args
            ));
            $summary[totalItems ? 'show' : 'hide']();
          }

          /**
           * Shows or hides the webform element entry based on the query.
           *
           * @param {number} index
           *   The index in the loop, as provided by `jQuery.each`
           * @param {HTMLElement} label
           *   The label of the webform.
           */
          function toggleEntry(index, label) {
            var $label = $(label);
            var $row = $label.closest(parentSelector);

            var textMatch = $label.text().toLowerCase().indexOf(query) !== -1;
            var isSelected = (selectedSelector && $row.find(selectedSelector).length) ? true : false;

            var isVisible = textMatch || isSelected;
            $row.toggle(isVisible);
            if (isVisible) {
              totalItems++;
              if (hasDetails) {
                $row.closest('details').show();
              }
            }
          }
        }
      });
    }
  };

})(jQuery, Drupal, Drupal.debounce);
;
/**
 * @file
 * JavaScript behaviors for admin pages.
 */

(function ($, Drupal, debounce) {

  'use strict';

  /**
   * Filter webform autocomplete handler.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformFilterAutocomplete = {
    attach: function (context) {
      $('.webform-filter-form input.form-autocomplete', context).once('webform-autocomplete')
        .each(function () {
          // If input value is an autocomplete match, reset the input to its
          // default value.
          if (/\(([^)]+)\)$/.test(this.value)) {
            this.value = this.defaultValue;
          }

          // From: http://stackoverflow.com/questions/5366068/jquery-ui-autocomplete-submit-onclick-result
          $(this).bind('autocompleteselect', function (event, ui) {
            if (ui.item) {
              $(this).val(ui.item.value);
              $(this.form).trigger('submit');
            }
          });
        });
    }
  };

  /**
   * Allow table rows to be hyperlinked.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformTableRowHref = {
    attach: function (context) {
      // Only attach the click event handler to the entire table and determine
      // which row triggers the event.
      $('.webform-results-table', context).once('webform-results-table').on('click', function (event) {
        if (event.target.tagName === 'A' || event.target.tagName === 'BUTTON' || event.target.tagName === 'INPUT') {
          return true;
        }

        if ($(event.target).parents('a[href]').length || $(event.target).parents('.dropbutton-widget').length) {
          return true;
        }

        var $input = $(event.target).closest('td').find('input');
        if ($input.length) {
          if ($input.attr('type') === 'checkbox') {
            $input.click();
          }
          return true;
        }

        var $tr = $(event.target).parents('tr[data-webform-href]');
        if (!$tr.length) {
          return true;
        }

        window.location = $tr.attr('data-webform-href');
        return false;
      });
    }
  };

})(jQuery, Drupal, Drupal.debounce);
;
/**
 * @file
 * JavaScript behaviors for Tippy.js tooltip integration.
 */

(function ($, Drupal) {

  'use strict';

  var tooltipDefaultOptions = {
    delay: 100
  };

  // @see https://atomiks.github.io/tippyjs/v6/all-props/
  Drupal.webform = Drupal.webform || {};

  Drupal.webform.tooltipElement = Drupal.webform.tooltipElement || {};
  Drupal.webform.tooltipElement.options = Drupal.webform.tooltipElement.options || tooltipDefaultOptions;

  Drupal.webform.tooltipLink = Drupal.webform.tooltipLink || {};
  Drupal.webform.tooltipLink.options = Drupal.webform.tooltipLink.options || tooltipDefaultOptions;

  /**
   * Initialize tooltip element support.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformTooltipElement = {
    attach: function (context) {
      if (!window.tippy) {
        return;
      }

      $(context).find('.js-webform-tooltip-element').once('webform-tooltip-element').each(function () {
        // Checkboxes, radios, buttons, toggles, etc… use fieldsets.
        // @see \Drupal\webform\Plugin\WebformElement\OptionsBase::prepare
        var $element = $(this);
        var $description;
        if ($element.is('fieldset')) {
          $description = $element.find('> .fieldset-wrapper > .description > .webform-element-description.visually-hidden');
        }
        else {
          $description = $element.find('> .description > .webform-element-description.visually-hidden');
        }

        var options = $.extend({
          content: $description.html(),
          allowHTML: true
        }, Drupal.webform.tooltipElement.options);

        tippy(this, options);
      });
    }
  };

  /**
   * Initialize jQuery UI tooltip link support.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformTooltipLink = {
    attach: function (context) {
      if (!window.tippy) {
        return;
      }

      $(context).find('.js-webform-tooltip-link').once('webform-tooltip-link').each(function () {
        var title = $(this).attr('title');
        if (title) {
          var options = $.extend({
            content: title,
            allowHTML: true
          }, Drupal.webform.tooltipLink.options);

          tippy(this, options);
        }
      });
    }
  };

})(jQuery, Drupal);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  function DetailsSummarizedContent(node) {
    this.$node = $(node);
    this.setupSummary();
  }

  $.extend(DetailsSummarizedContent, {
    instances: []
  });
  $.extend(DetailsSummarizedContent.prototype, {
    setupSummary: function setupSummary() {
      this.$detailsSummarizedContentWrapper = $(Drupal.theme('detailsSummarizedContentWrapper'));
      this.$node.on('summaryUpdated', $.proxy(this.onSummaryUpdated, this)).trigger('summaryUpdated').find('> summary').append(this.$detailsSummarizedContentWrapper);
    },
    onSummaryUpdated: function onSummaryUpdated() {
      var text = this.$node.drupalGetSummary();
      this.$detailsSummarizedContentWrapper.html(Drupal.theme('detailsSummarizedContentText', text));
    }
  });
  Drupal.behaviors.detailsSummary = {
    attach: function attach(context) {
      DetailsSummarizedContent.instances = DetailsSummarizedContent.instances.concat(once('details', 'details', context).map(function (details) {
        return new DetailsSummarizedContent(details);
      }));
    }
  };
  Drupal.DetailsSummarizedContent = DetailsSummarizedContent;

  Drupal.theme.detailsSummarizedContentWrapper = function () {
    return "<span class=\"summary\"></span>";
  };

  Drupal.theme.detailsSummarizedContentText = function (text) {
    return text ? " (".concat(text, ")") : '';
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.detailsAria = {
    attach: function attach() {
      $(once('detailsAria', 'body')).on('click.detailsAria', 'summary', function (event) {
        var $summary = $(event.currentTarget);
        var open = $(event.currentTarget.parentNode).attr('open') === 'open' ? 'false' : 'true';
        $summary.attr({
          'aria-expanded': open,
          'aria-pressed': open
        });
      });
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Modernizr, Drupal) {
  function CollapsibleDetails(node) {
    this.$node = $(node);
    this.$node.data('details', this);
    var anchor = window.location.hash && window.location.hash !== '#' ? ", ".concat(window.location.hash) : '';

    if (this.$node.find(".error".concat(anchor)).length) {
      this.$node.attr('open', true);
    }

    this.setupSummaryPolyfill();
  }

  $.extend(CollapsibleDetails, {
    instances: []
  });
  $.extend(CollapsibleDetails.prototype, {
    setupSummaryPolyfill: function setupSummaryPolyfill() {
      var $summary = this.$node.find('> summary');
      $summary.attr('tabindex', '-1');
      $('<span class="details-summary-prefix visually-hidden"></span>').append(this.$node.attr('open') ? Drupal.t('Hide') : Drupal.t('Show')).prependTo($summary).after(document.createTextNode(' '));
      $('<a class="details-title"></a>').attr('href', "#".concat(this.$node.attr('id'))).prepend($summary.contents()).appendTo($summary);
      $summary.append(this.$summary).on('click', $.proxy(this.onSummaryClick, this));
    },
    onSummaryClick: function onSummaryClick(e) {
      this.toggle();
      e.preventDefault();
    },
    toggle: function toggle() {
      var _this = this;

      var isOpen = !!this.$node.attr('open');
      var $summaryPrefix = this.$node.find('> summary span.details-summary-prefix');

      if (isOpen) {
        $summaryPrefix.html(Drupal.t('Show'));
      } else {
        $summaryPrefix.html(Drupal.t('Hide'));
      }

      setTimeout(function () {
        _this.$node.attr('open', !isOpen);
      }, 0);
    }
  });
  Drupal.behaviors.collapse = {
    attach: function attach(context) {
      if (Modernizr.details) {
        return;
      }

      once('collapse', 'details', context).forEach(function (detail) {
        detail.classList.add('collapse-processed');
        CollapsibleDetails.instances.push(new CollapsibleDetails(detail));
      });
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('details').not('[open]').find('> summary').trigger('click');
  };

  $('body').on('formFragmentLinkClickOrHashChange.details', handleFragmentLinkClickOrHashChange);
  Drupal.CollapsibleDetails = CollapsibleDetails;
})(jQuery, Modernizr, Drupal);;
