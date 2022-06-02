<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/newsplus_lite/templates/page.html.twig */
class __TwigTemplate_362a1a3a9b1adaaa32d82d8e4597918791b1b5c9ba6781f9406da2c32ec61e93 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "
<div id=\"toTop\"><i class=\"fa fa-play-circle fa-rotate-270\"></i></div>
<header class=\"headers-wrapper\">
  ";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_left", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_right", [], "any", false, false, true, 62))) {
            // line 63
            echo "    ";
            // line 64
            echo "    <div id=\"pre-header\" class=\"clearfix colored-area ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null), 64, $this->source), "html", null, true);
            echo "\">
      <div class=\"container\">
        ";
            // line 67
            echo "        <div id=\"pre-header-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_left", [], "any", false, false, true, 69)) {
                // line 70
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_left_grid_class"] ?? null), 70, $this->source), "html", null, true);
                echo "\">
                ";
                // line 72
                echo "                <div id=\"pre-header-left\" class=\"clearfix\">
                  <div class=\"pre-header-area\">
                    ";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_left", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 78
                echo "              </div>
            ";
            }
            // line 80
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_right", [], "any", false, false, true, 80)) {
                // line 81
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_right_grid_class"] ?? null), 81, $this->source), "html", null, true);
                echo "\">
                ";
                // line 83
                echo "                <div id=\"pre-header-right\" class=\"clearfix\">
                  <div class=\"pre-header-area\">
                    ";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pre_header_right", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 89
                echo "              </div>
            ";
            }
            // line 91
            echo "          </div>
        </div>
        ";
            // line 94
            echo "      </div>
    </div>
    ";
            // line 97
            echo "  ";
        }
        // line 98
        echo "  ";
        // line 99
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 99) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 99))) {
            // line 100
            echo "    <div id=\"header-top\" role=\"banner\" class=\"clearfix colored-area ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null), 100, $this->source), "html", null, true);
            echo "\">
      <div class=\"container\">
        ";
            // line 103
            echo "        <div id=\"header-top-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 105)) {
                // line 106
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_inside_grid_class"] ?? null), 106, $this->source), "html", null, true);
                echo "\">
                ";
                // line 108
                echo "                <div id=\"header-top-left\" class=\"clearfix\">
                  <div class=\"header-top-area\">

                    ";
                // line 111
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 111)) {
                    // line 112
                    echo "                      ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
                    echo "
                    ";
                }
                // line 114
                echo "
                  </div>
                </div>
                ";
                // line 118
                echo "              </div>
            ";
            }
            // line 120
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 120)) {
                // line 121
                echo "              <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_inside_grid_class"] ?? null), 121, $this->source), "html", null, true);
                echo "\">
                ";
                // line 123
                echo "                <div id=\"header-top-right\" class=\"clearfix\">
                  <div class=\"header-top-area\">
                    ";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 129
                echo "              </div>
            ";
            }
            // line 131
            echo "          </div>
        </div>
        ";
            // line 134
            echo "      </div>
    </div>
  ";
        }
        // line 137
        echo "  ";
        // line 138
        echo "
  ";
        // line 140
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 140) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 140))) {
            // line 141
            echo "    <div id=\"header\" class=\"colored-area ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null), 141, $this->source), "html", null, true);
            echo "\">
      ";
            // line 142
            if (($context["mt_site_name"] ?? null)) {
                // line 143
                echo "        <div class=\"site-name site-name__header\">
          <a href=\"";
                // line 144
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_site_name"] ?? null), 144, $this->source), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 147
            echo "      <div class=\"container\">
        ";
            // line 149
            echo "        <div id=\"header-inside\" class=\"clearfix\">
          <div class=\"row\">
            <div class=\"header-area\">
              <div class=\"";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_inside_left_grid_class"] ?? null), 152, $this->source), "html", null, true);
            echo "\">
                ";
            // line 154
            echo "                <div id=\"header-inside-left\" class=\"clearfix\">
                  ";
            // line 156
            echo "                  <div id=\"main-navigation\" class=\"clearfix\">
                    <nav role=\"navigation\">
                      ";
            // line 158
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 158)) {
                // line 159
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
                echo "
                      ";
            }
            // line 161
            echo "                    </nav>
                  </div>
                  ";
            // line 164
            echo "                </div>
                ";
            // line 166
            echo "              </div>
              ";
            // line 167
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 167)) {
                // line 168
                echo "                <div class=\"col-md-4\">
                  ";
                // line 170
                echo "                  <div id=\"header-inside-right\" class=\"clearfix\">
                    ";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "
                  </div>
                  ";
                // line 174
                echo "                </div>
              ";
            }
            // line 176
            echo "            </div>
          </div>
        </div>
        ";
            // line 180
            echo "      </div>
    </div>
  ";
        }
        // line 183
        echo "  ";
        // line 184
        echo "</header>

";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_intro", [], "any", false, false, true, 186)) {
            // line 187
            echo "  ";
            // line 188
            echo "  <div id=\"page-intro\" class=\"clearfix\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 193
            echo "          <div id=\"page-intro-inside\" class=\"clearfix\">
            ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_intro", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
          </div>
          ";
            // line 197
            echo "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 203
        echo "
";
        // line 205
        echo "<div id=\"page\" class=\"clearfix\">
  <div class=\"container\">
    ";
        // line 208
        echo "    <div id=\"page-inside\">

      ";
        // line 210
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 210)) {
            // line 211
            echo "        ";
            // line 212
            echo "        <div id=\"top-content\">
          ";
            // line 214
            echo "          <div id=\"top-content-inside\" class=\"clearfix\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 217
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_content", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          ";
            // line 222
            echo "        </div>
        ";
            // line 224
            echo "      ";
        }
        // line 225
        echo "
      ";
        // line 227
        echo "      <div id=\"main-content\">
        <div class=\"row\">
          ";
        // line 229
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 229)) {
            // line 230
            echo "            <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null), 230, $this->source), "html", null, true);
            echo "\">
              ";
            // line 232
            echo "              <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                ";
            // line 233
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
            echo "
              </section>
              ";
            // line 236
            echo "            </aside>
          ";
        }
        // line 238
        echo "
          <section class=\"";
        // line 239
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null), 239, $this->source), "html", null, true);
        echo "\">

            ";
        // line 241
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 241)) {
            // line 242
            echo "              ";
            // line 243
            echo "              <div id=\"banner\">
                ";
            // line 245
            echo "                <div id=\"banner-inside\" class=\"clearfix\">
                  ";
            // line 246
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
            echo "
                </div>
                ";
            // line 249
            echo "              </div>
              ";
            // line 251
            echo "            ";
        }
        // line 252
        echo "
            ";
        // line 253
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 253)) {
            // line 254
            echo "              <div id=\"highlighted\">
                <div id=\"highlighted-inside\" class=\"clearfix\">
                  ";
            // line 256
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
            echo "
                </div>
              </div>
            ";
        }
        // line 260
        echo "
            ";
        // line 261
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 261)) {
            // line 262
            echo "              ";
            // line 263
            echo "              <div id=\"promoted\" class=\"clearfix\">
                ";
            // line 265
            echo "                <div id=\"promoted-inside\" class=\"clearfix\">
                  ";
            // line 266
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promoted", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
            echo "
                </div>
                ";
            // line 269
            echo "              </div>
              ";
            // line 271
            echo "            ";
        }
        // line 272
        echo "
            ";
        // line 274
        echo "            <div id=\"main\" class=\"clearfix\">

              ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 276)) {
            // line 277
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
            echo "
              ";
        }
        // line 279
        echo "
            </div>
            ";
        // line 282
        echo "          </section>

          ";
        // line 284
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 284)) {
            // line 285
            echo "          <aside class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null), 285, $this->source), "html", null, true);
            echo "\">
            ";
            // line 287
            echo "            <section id=\"sidebar-second\" class=\"sidebar clearfix\">
              ";
            // line 288
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
            echo "
            </section>
            ";
            // line 291
            echo "          </aside>
          ";
        }
        // line 293
        echo "
        </div>

      </div>
      ";
        // line 298
        echo "
    </div>
    ";
        // line 301
        echo "
  </div>

</div>
";
        // line 306
        echo "

";
        // line 308
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 308) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 308)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 308)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 308))) {
            // line 309
            echo "  ";
            // line 310
            echo "  <footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">

      <div class=\"row\">
        ";
            // line 314
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 314)) {
                // line 315
                echo "          <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null), 315, $this->source), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 317
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 317), 317, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 321
            echo "
        ";
            // line 322
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 322)) {
                // line 323
                echo "          <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null), 323, $this->source), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 325
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 325), 325, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 329
            echo "
        ";
            // line 330
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 330)) {
                // line 331
                echo "          <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null), 331, $this->source), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 333
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 333), 333, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 337
            echo "
        ";
            // line 338
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 338)) {
                // line 339
                echo "          <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null), 339, $this->source), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 341
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 345
            echo "      </div>

    </div>
  </footer>
  ";
        }
        // line 351
        echo "
";
        // line 352
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_left", [], "any", false, false, true, 352) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 352))) {
            // line 353
            echo "  ";
            // line 354
            echo "  <div id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
      ";
            // line 357
            echo "      <div id=\"subfooter-inside\" class=\"clearfix\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            ";
            // line 361
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_left", [], "any", false, false, true, 361)) {
                // line 362
                echo "              <div class=\"subfooter-area left\">
                ";
                // line 363
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sub_footer_left", [], "any", false, false, true, 363), 363, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 366
            echo "            ";
            // line 367
            echo "          </div>
          <div class=\"col-md-8\">
            ";
            // line 370
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 370)) {
                // line 371
                echo "              <div class=\"subfooter-area right\">
                ";
                // line 372
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 372), 372, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 375
            echo "            ";
            // line 376
            echo "          </div>
        </div>
      </div>
      ";
            // line 380
            echo "    </div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/newsplus_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 380,  637 => 376,  635 => 375,  629 => 372,  626 => 371,  623 => 370,  619 => 367,  617 => 366,  611 => 363,  608 => 362,  605 => 361,  600 => 357,  596 => 354,  594 => 353,  592 => 352,  589 => 351,  582 => 345,  575 => 341,  569 => 339,  567 => 338,  564 => 337,  557 => 333,  551 => 331,  549 => 330,  546 => 329,  539 => 325,  533 => 323,  531 => 322,  528 => 321,  521 => 317,  515 => 315,  513 => 314,  507 => 310,  505 => 309,  503 => 308,  499 => 306,  493 => 301,  489 => 298,  483 => 293,  479 => 291,  474 => 288,  471 => 287,  466 => 285,  464 => 284,  460 => 282,  456 => 279,  450 => 277,  448 => 276,  444 => 274,  441 => 272,  438 => 271,  435 => 269,  430 => 266,  427 => 265,  424 => 263,  422 => 262,  420 => 261,  417 => 260,  410 => 256,  406 => 254,  404 => 253,  401 => 252,  398 => 251,  395 => 249,  390 => 246,  387 => 245,  384 => 243,  382 => 242,  380 => 241,  375 => 239,  372 => 238,  368 => 236,  363 => 233,  360 => 232,  355 => 230,  353 => 229,  349 => 227,  346 => 225,  343 => 224,  340 => 222,  333 => 217,  328 => 214,  325 => 212,  323 => 211,  321 => 210,  317 => 208,  313 => 205,  310 => 203,  303 => 197,  298 => 194,  295 => 193,  289 => 188,  287 => 187,  285 => 186,  281 => 184,  279 => 183,  274 => 180,  269 => 176,  265 => 174,  260 => 171,  257 => 170,  254 => 168,  252 => 167,  249 => 166,  246 => 164,  242 => 161,  236 => 159,  234 => 158,  230 => 156,  227 => 154,  223 => 152,  218 => 149,  215 => 147,  205 => 144,  202 => 143,  200 => 142,  195 => 141,  192 => 140,  189 => 138,  187 => 137,  182 => 134,  178 => 131,  174 => 129,  168 => 125,  164 => 123,  159 => 121,  156 => 120,  152 => 118,  147 => 114,  141 => 112,  139 => 111,  134 => 108,  129 => 106,  127 => 105,  123 => 103,  117 => 100,  114 => 99,  112 => 98,  109 => 97,  105 => 94,  101 => 91,  97 => 89,  91 => 85,  87 => 83,  82 => 81,  79 => 80,  75 => 78,  69 => 74,  65 => 72,  60 => 70,  58 => 69,  54 => 67,  48 => 64,  46 => 63,  44 => 62,  39 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/newsplus_lite/templates/page.html.twig", "/app/themes/contrib/newsplus_lite/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 62);
        static $filters = array("escape" => 64, "t" => 144);
        static $functions = array("path" => 144);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
