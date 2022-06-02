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

/* modules/contrib/poll/templates/poll-meter.html.twig */
class __TwigTemplate_142bc355d85d9be5bba56113c941fbd4b738a9d57d4400693eaa361a490e764a extends \Twig\Template
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
        // line 26
        $context["is_current_selection_class"] = ((($context["is_current_selection"] ?? null)) ? ("is-current-selection") : ("not-current-selection"));
        // line 27
        echo "<dt class=\"choice-title ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_current_selection_class"] ?? null), 27, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["choice"] ?? null), 27, $this->source), "html", null, true);
        echo "</dt>
<dd class=\"choice-result ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_current_selection_class"] ?? null), 28, $this->source), "html", null, true);
        echo "\">
  <div";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 29, $this->source), "html", null, true);
        echo ">
    <div style=\"width: ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["percentage"] ?? null), 30, $this->source), "html", null, true);
        echo "%\" class=\"foreground\"></div>
  </div>

  ";
        // line 33
        if (($context["display_value"] ?? null)) {
            // line 34
            echo "    <div class=\"percent\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["display_value"] ?? null), 34, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 36
        echo "</dd>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/poll/templates/poll-meter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 36,  64 => 34,  62 => 33,  56 => 30,  52 => 29,  48 => 28,  41 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/poll/templates/poll-meter.html.twig", "/app/modules/contrib/poll/templates/poll-meter.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 26, "if" => 33);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
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
