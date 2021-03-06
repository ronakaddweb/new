/**
 * @file
 * JavaScript behaviors for element help text (tooltip).
 */

(function ($, Drupal) {

  'use strict';

  // @see https://atomiks.github.io/tippyjs/v5/all-props/
  // @see https://atomiks.github.io/tippyjs/v6/all-props/
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.elementHelpIcon = Drupal.webform.elementHelpIcon || {};
  Drupal.webform.elementHelpIcon.options = Drupal.webform.elementHelpIcon.options || {};

  /**
   * Element help icon.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformElementHelpIcon = {
    attach: function (context) {
      if (!window.tippy) {
        return;
      }

      // Hide on escape.
      // @see https://atomiks.github.io/tippyjs/v6/plugins/#hideonesc
      //
      // Converted from ES6 to ES5.
      // @see https://babeljs.io/repl/
      var hideOnEsc = {
        name: 'hideOnEsc',
        defaultValue: true,
        fn: function fn(_ref) {
          var hide = _ref.hide;

          function onKeyDown(event) {
            if (event.keyCode === 27) {
              hide();
            }
          }

          return {
            onShow: function onShow() {
              document.addEventListener('keydown', onKeyDown);
            },
            onHide: function onHide() {
              document.removeEventListener('keydown', onKeyDown);
            }
          };
        }
      };

      $(context).find('.js-webform-element-help').once('webform-element-help').each(function () {
        var $link = $(this);

        $link.on('click', function (event) {
          // Prevent click from toggling <label>s wrapped around help.
          event.preventDefault();
        });

        var options = $.extend({
          content: $link.attr('data-webform-help'),
          delay: 100,
          allowHTML: true,
          interactive: true,
          plugins: [hideOnEsc]
        }, Drupal.webform.elementHelpIcon.options);

        tippy(this, options);
      });
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for select menu.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Disable select menu options using JavaScript.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformSelectOptionsDisabled = {
    attach: function (context) {
      $('select[data-webform-select-options-disabled]', context).once('webform-select-options-disabled').each(function () {
        var $select = $(this);
        var disabled = $select.attr('data-webform-select-options-disabled').split(/\s*,\s*/);
        $select.find('option').filter(function isDisabled() {
          return ($.inArray(this.value, disabled) !== -1);
        }).attr('disabled', 'disabled');
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
  Drupal.behaviors.fileValidateAutoAttach = {
    attach: function attach(context, settings) {
      var $context = $(context);
      var elements;

      function initFileValidation(selector) {
        $(once('fileValidate', $context.find(selector))).on('change.fileValidate', {
          extensions: elements[selector]
        }, Drupal.file.validateExtension);
      }

      if (settings.file && settings.file.elements) {
        elements = settings.file.elements;
        Object.keys(elements).forEach(initFileValidation);
      }
    },
    detach: function detach(context, settings, trigger) {
      var $context = $(context);
      var elements;

      function removeFileValidation(selector) {
        $(once.remove('fileValidate', $context.find(selector))).off('change.fileValidate', Drupal.file.validateExtension);
      }

      if (trigger === 'unload' && settings.file && settings.file.elements) {
        elements = settings.file.elements;
        Object.keys(elements).forEach(removeFileValidation);
      }
    }
  };
  Drupal.behaviors.fileAutoUpload = {
    attach: function attach(context) {
      $(once('auto-file-upload', 'input[type="file"]', context)).on('change.autoFileUpload', Drupal.file.triggerUploadButton);
    },
    detach: function detach(context, settings, trigger) {
      if (trigger === 'unload') {
        $(once.remove('auto-file-upload', 'input[type="file"]', context)).off('.autoFileUpload');
      }
    }
  };
  Drupal.behaviors.fileButtons = {
    attach: function attach(context) {
      var $context = $(context);
      $context.find('.js-form-submit').on('mousedown', Drupal.file.disableFields);
      $context.find('.js-form-managed-file .js-form-submit').on('mousedown', Drupal.file.progressBar);
    },
    detach: function detach(context, settings, trigger) {
      if (trigger === 'unload') {
        var $context = $(context);
        $context.find('.js-form-submit').off('mousedown', Drupal.file.disableFields);
        $context.find('.js-form-managed-file .js-form-submit').off('mousedown', Drupal.file.progressBar);
      }
    }
  };
  Drupal.behaviors.filePreviewLinks = {
    attach: function attach(context) {
      $(context).find('div.js-form-managed-file .file a').on('click', Drupal.file.openInNewWindow);
    },
    detach: function detach(context) {
      $(context).find('div.js-form-managed-file .file a').off('click', Drupal.file.openInNewWindow);
    }
  };
  Drupal.file = Drupal.file || {
    validateExtension: function validateExtension(event) {
      event.preventDefault();
      $('.file-upload-js-error').remove();
      var extensionPattern = event.data.extensions.replace(/,\s*/g, '|');

      if (extensionPattern.length > 1 && this.value.length > 0) {
        var acceptableMatch = new RegExp("\\.(".concat(extensionPattern, ")$"), 'gi');

        if (!acceptableMatch.test(this.value)) {
          var error = Drupal.t('The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.', {
            '%filename': this.value.replace('C:\\fakepath\\', ''),
            '%extensions': extensionPattern.replace(/\|/g, ', ')
          });
          $(this).closest('div.js-form-managed-file').prepend("<div class=\"messages messages--error file-upload-js-error\" aria-live=\"polite\">".concat(error, "</div>"));
          this.value = '';
          event.stopImmediatePropagation();
        }
      }
    },
    triggerUploadButton: function triggerUploadButton(event) {
      $(event.target).closest('.js-form-managed-file').find('.js-form-submit[data-drupal-selector$="upload-button"]').trigger('mousedown');
    },
    disableFields: function disableFields(event) {
      var $clickedButton = $(this);
      $clickedButton.trigger('formUpdated');
      var $enabledFields = [];

      if ($clickedButton.closest('div.js-form-managed-file').length > 0) {
        $enabledFields = $clickedButton.closest('div.js-form-managed-file').find('input.js-form-file');
      }

      var $fieldsToTemporarilyDisable = $('div.js-form-managed-file input.js-form-file').not($enabledFields).not(':disabled');
      $fieldsToTemporarilyDisable.prop('disabled', true);
      setTimeout(function () {
        $fieldsToTemporarilyDisable.prop('disabled', false);
      }, 1000);
    },
    progressBar: function progressBar(event) {
      var $clickedButton = $(this);
      var $progressId = $clickedButton.closest('div.js-form-managed-file').find('input.file-progress');

      if ($progressId.length) {
        var originalName = $progressId.attr('name');
        $progressId.attr('name', originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);
        setTimeout(function () {
          $progressId.attr('name', originalName);
        }, 1000);
      }

      setTimeout(function () {
        $clickedButton.closest('div.js-form-managed-file').find('div.ajax-progress-bar').slideDown();
      }, 500);
      $clickedButton.trigger('fileUpload');
    },
    openInNewWindow: function openInNewWindow(event) {
      event.preventDefault();
      $(this).attr('target', '_blank');
      window.open(this.href, 'filePreview', 'toolbar=0,scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,width=500,height=550');
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.user = {
    password: {
      css: {
        passwordParent: 'password-parent',
        passwordsMatch: 'ok',
        passwordsNotMatch: 'error',
        passwordWeak: 'is-weak',
        passwordFair: 'is-fair',
        passwordGood: 'is-good',
        passwordStrong: 'is-strong',
        widgetInitial: '',
        passwordEmpty: '',
        passwordFilled: '',
        confirmEmpty: '',
        confirmFilled: ''
      }
    }
  };
  Drupal.behaviors.password = {
    attach: function attach(context, settings) {
      var cssClasses = Drupal.user.password.css;
      once('password', 'input.js-password-field', context).forEach(function (value) {
        var $mainInput = $(value);
        var $mainInputParent = $mainInput.parent().addClass(cssClasses.passwordParent);
        var $passwordWidget = $mainInput.closest('.js-form-type-password-confirm');
        var $confirmInput = $passwordWidget.find('input.js-password-confirm');
        var $passwordConfirmMessage = $(Drupal.theme('passwordConfirmMessage', settings.password));
        var $passwordMatchStatus = $passwordConfirmMessage.find('[data-drupal-selector="password-match-status-text"]').first();

        if ($passwordMatchStatus.length === 0) {
          $passwordMatchStatus = $passwordConfirmMessage.find('span').first();
          Drupal.deprecationError({
            message: 'Returning <span> without data-drupal-selector="password-match-status-text" attribute is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. See https://www.drupal.org/node/3152101'
          });
        }

        var $confirmInputParent = $confirmInput.parent().addClass('confirm-parent').append($passwordConfirmMessage);
        var passwordStrengthBarClassesToRemove = [cssClasses.passwordWeak || '', cssClasses.passwordFair || '', cssClasses.passwordGood || '', cssClasses.passwordStrong || ''].join(' ').trim();
        var confirmTextWrapperClassesToRemove = [cssClasses.passwordsMatch || '', cssClasses.passwordsNotMatch || ''].join(' ').trim();
        var widgetClassesToRemove = [cssClasses.widgetInitial || '', cssClasses.passwordEmpty || '', cssClasses.passwordFilled || '', cssClasses.confirmEmpty || '', cssClasses.confirmFilled || ''].join(' ').trim();
        var password = {};

        if (settings.password.showStrengthIndicator) {
          var $passwordStrength = $(Drupal.theme('passwordStrength', settings.password));
          password.$strengthBar = $passwordStrength.find('[data-drupal-selector="password-strength-indicator"]').first();

          if (password.$strengthBar.length === 0) {
            password.$strengthBar = $passwordStrength.find('.js-password-strength__indicator').first();
            Drupal.deprecationError({
              message: 'The js-password-strength__indicator class is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Replace js-password-strength__indicator with a data-drupal-selector="password-strength-indicator" attribute. See https://www.drupal.org/node/3152101'
            });
          }

          password.$strengthTextWrapper = $passwordStrength.find('[data-drupal-selector="password-strength-text"]').first();

          if (password.$strengthTextWrapper.length === 0) {
            password.$strengthTextWrapper = $passwordStrength.find('.js-password-strength__text').first();
            Drupal.deprecationError({
              message: 'The js-password-strength__text class is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Replace js-password-strength__text with a data-drupal-selector="password-strength-text" attribute. See https://www.drupal.org/node/3152101'
            });
          }

          password.$suggestions = $(Drupal.theme('passwordSuggestions', settings.password, []));
          password.$suggestions.hide();
          $mainInputParent.append($passwordStrength);
          $confirmInputParent.after(password.$suggestions);
        }

        var addWidgetClasses = function addWidgetClasses() {
          $passwordWidget.addClass($mainInput.val() ? cssClasses.passwordFilled : cssClasses.passwordEmpty).addClass($confirmInput.val() ? cssClasses.confirmFilled : cssClasses.confirmEmpty);
        };

        var passwordCheckMatch = function passwordCheckMatch(confirmInputVal) {
          var passwordsAreMatching = $mainInput.val() === confirmInputVal;
          var confirmClass = passwordsAreMatching ? cssClasses.passwordsMatch : cssClasses.passwordsNotMatch;
          var confirmMessage = passwordsAreMatching ? settings.password.confirmSuccess : settings.password.confirmFailure;

          if (!$passwordMatchStatus.hasClass(confirmClass) || !$passwordMatchStatus.html() === confirmMessage) {
            if (confirmTextWrapperClassesToRemove) {
              $passwordMatchStatus.removeClass(confirmTextWrapperClassesToRemove);
            }

            $passwordMatchStatus.html(confirmMessage).addClass(confirmClass);
          }
        };

        var passwordCheck = function passwordCheck() {
          if (settings.password.showStrengthIndicator) {
            var result = Drupal.evaluatePasswordStrength($mainInput.val(), settings.password);
            var $currentPasswordSuggestions = $(Drupal.theme('passwordSuggestions', settings.password, result.messageTips));

            if (password.$suggestions.html() !== $currentPasswordSuggestions.html()) {
              password.$suggestions.replaceWith($currentPasswordSuggestions);
              password.$suggestions = $currentPasswordSuggestions.toggle(result.strength !== 100);
            }

            if (passwordStrengthBarClassesToRemove) {
              password.$strengthBar.removeClass(passwordStrengthBarClassesToRemove);
            }

            password.$strengthBar.css('width', "".concat(result.strength, "%")).addClass(result.indicatorClass);
            password.$strengthTextWrapper.html(result.indicatorText);
          }

          if ($confirmInput.val()) {
            passwordCheckMatch($confirmInput.val());
            $passwordConfirmMessage.css({
              visibility: 'visible'
            });
          } else {
            $passwordConfirmMessage.css({
              visibility: 'hidden'
            });
          }

          if (widgetClassesToRemove) {
            $passwordWidget.removeClass(widgetClassesToRemove);
            addWidgetClasses();
          }
        };

        if (widgetClassesToRemove) {
          addWidgetClasses();
        }

        $mainInput.on('input', passwordCheck);
        $confirmInput.on('input', passwordCheck);
      });
    }
  };

  Drupal.evaluatePasswordStrength = function (password, passwordSettings) {
    password = password.trim();
    var indicatorText;
    var indicatorClass;
    var weaknesses = 0;
    var strength = 100;
    var msg = [];
    var hasLowercase = /[a-z]/.test(password);
    var hasUppercase = /[A-Z]/.test(password);
    var hasNumbers = /[0-9]/.test(password);
    var hasPunctuation = /[^a-zA-Z0-9]/.test(password);
    var $usernameBox = $('input.username');
    var username = $usernameBox.length > 0 ? $usernameBox.val() : passwordSettings.username;

    if (password.length < 12) {
      msg.push(passwordSettings.tooShort);
      strength -= (12 - password.length) * 5 + 30;
    }

    if (!hasLowercase) {
      msg.push(passwordSettings.addLowerCase);
      weaknesses += 1;
    }

    if (!hasUppercase) {
      msg.push(passwordSettings.addUpperCase);
      weaknesses += 1;
    }

    if (!hasNumbers) {
      msg.push(passwordSettings.addNumbers);
      weaknesses += 1;
    }

    if (!hasPunctuation) {
      msg.push(passwordSettings.addPunctuation);
      weaknesses += 1;
    }

    switch (weaknesses) {
      case 1:
        strength -= 12.5;
        break;

      case 2:
        strength -= 25;
        break;

      case 3:
      case 4:
        strength -= 40;
        break;
    }

    if (password !== '' && password.toLowerCase() === username.toLowerCase()) {
      msg.push(passwordSettings.sameAsUsername);
      strength = 5;
    }

    var cssClasses = Drupal.user.password.css;

    if (strength < 60) {
      indicatorText = passwordSettings.weak;
      indicatorClass = cssClasses.passwordWeak;
    } else if (strength < 70) {
      indicatorText = passwordSettings.fair;
      indicatorClass = cssClasses.passwordFair;
    } else if (strength < 80) {
      indicatorText = passwordSettings.good;
      indicatorClass = cssClasses.passwordGood;
    } else if (strength <= 100) {
      indicatorText = passwordSettings.strong;
      indicatorClass = cssClasses.passwordStrong;
    }

    var messageTips = msg;
    msg = "".concat(passwordSettings.hasWeaknesses, "<ul><li>").concat(msg.join('</li><li>'), "</li></ul>");
    return Drupal.deprecatedProperty({
      target: {
        strength: strength,
        message: msg,
        indicatorText: indicatorText,
        indicatorClass: indicatorClass,
        messageTips: messageTips
      },
      deprecatedProperty: 'message',
      message: 'The message property is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. The markup should be constructed using messageTips property and Drupal.theme.passwordSuggestions. See https://www.drupal.org/node/3130352'
    });
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal) {
  Drupal.theme.passwordConfirmMessage = function (_ref) {
    var confirmTitle = _ref.confirmTitle;
    var confirmTextWrapper = '<span data-drupal-selector="password-match-status-text"></span>';
    return "<div aria-live=\"polite\" aria-atomic=\"true\" class=\"password-confirm-message\" data-drupal-selector=\"password-confirm-message\">".concat(confirmTitle, " ").concat(confirmTextWrapper, "</div>");
  };

  Drupal.theme.passwordStrength = function (_ref2) {
    var strengthTitle = _ref2.strengthTitle;
    var strengthIndicator = '<div class="password-strength__indicator" data-drupal-selector="password-strength-indicator"></div>';
    var strengthText = '<span class="password-strength__text" data-drupal-selector="password-strength-text"></span>';
    return "\n      <div class=\"password-strength\">\n        <div class=\"password-strength__meter\" data-drupal-selector=\"password-strength-meter\">".concat(strengthIndicator, "</div>\n        <div aria-live=\"polite\" aria-atomic=\"true\" class=\"password-strength__title\">").concat(strengthTitle, " ").concat(strengthText, "</div>\n      </div>\n    ");
  };

  Drupal.theme.passwordSuggestions = function (_ref3, tips) {
    var hasWeaknesses = _ref3.hasWeaknesses;
    return "<div class=\"password-suggestions\">".concat(tips.length ? "".concat(hasWeaknesses, "<ul><li>").concat(tips.join('</li><li>'), "</li></ul>") : '', "</div>");
  };
})(Drupal);;
