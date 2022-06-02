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

/* themes/contrib/newsplus_lite/templates/node.html.twig */
class __TwigTemplate_b367ebf795bf3c44e99460f213874c607a1130b37a5e6825f5c266e18e8185d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'above_header' => [$this, 'block_above_header'],
            'title_area' => [$this, 'block_title_area'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : ("")), 6 => "clearfix"];
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ">
  ";
        // line 77
        $this->displayBlock('node_side', $context, $blocks);
        // line 79
        echo "  <div class=\"node-content\">
    ";
        // line 80
        $this->displayBlock('above_header', $context, $blocks);
        // line 82
        echo "    <header>
      ";
        // line 83
        $this->displayBlock('title_area', $context, $blocks);
        // line 92
        echo "      ";
        $this->displayBlock('meta_area', $context, $blocks);
        // line 106
        echo "    </header>
    <div";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 107), 107, $this->source), "html", null, true);
        echo ">
      ";
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</article>
";
    }

    // line 77
    public function block_node_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "  ";
    }

    // line 80
    public function block_above_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "    ";
    }

    // line 83
    public function block_title_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 84, $this->source), "html", null, true);
        echo "
        ";
        // line 85
        if ( !($context["page"] ?? null)) {
            // line 86
            echo "          <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title title"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
            echo ">
            <a href=\"";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 87, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 87, $this->source), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 90
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 92
    public function block_meta_area($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "        ";
        if (($context["display_submitted"] ?? null)) {
            // line 94
            echo "          <div class=\"node__meta\">
            <span";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "user-picture"], "method", false, false, true, 95), 95, $this->source), "html", null, true);
            echo ">
              ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 96, $this->source), "html", null, true);
            echo "
            </span>
            <span class=\"post-info\">
              <span>";
            // line 99
            echo t("@posted_ago ago", array("@posted_ago" => ($context["posted_ago"] ?? null), ));
            echo "</span>
              <span>";
            // line 100
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            echo "</span>
            </span>
            ";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 102, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 105
        echo "      ";
    }

    // line 108
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 109, $this->source), "links"), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/newsplus_lite/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 109,  179 => 108,  175 => 105,  169 => 102,  164 => 100,  160 => 99,  154 => 96,  150 => 95,  147 => 94,  144 => 93,  140 => 92,  133 => 90,  125 => 87,  120 => 86,  118 => 85,  113 => 84,  109 => 83,  105 => 81,  101 => 80,  97 => 78,  93 => 77,  83 => 111,  81 => 108,  77 => 107,  74 => 106,  71 => 92,  69 => 83,  66 => 82,  64 => 80,  61 => 79,  59 => 77,  55 => 76,  51 => 75,  49 => 71,  48 => 70,  47 => 69,  46 => 68,  45 => 67,  44 => 65,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/newsplus_lite/templates/node.html.twig", "/app/themes/contrib/newsplus_lite/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "block" => 77, "if" => 85, "trans" => 99);
        static $filters = array("clean_class" => 67, "escape" => 75, "without" => 109);
        static $functions = array("attach_library" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
                ['attach_library']
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
