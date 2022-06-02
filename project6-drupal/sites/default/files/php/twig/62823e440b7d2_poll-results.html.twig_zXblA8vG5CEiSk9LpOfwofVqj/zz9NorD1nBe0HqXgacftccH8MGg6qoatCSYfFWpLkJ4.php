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

/* modules/contrib/poll/templates/poll-results.html.twig */
class __TwigTemplate_b0371113ae060a048d077d42f8aff35ad33656952c10966ceee6d9c1d6aaffda extends \Twig\Template
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
        // line 21
        echo "<div class=\"poll\">
  ";
        // line 22
        if (($context["show_question"] ?? null)) {
            // line 23
            echo "    <h3 class=\"poll-question\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 23, $this->source), "html", null, true);
            echo "</h3>
  ";
        } else {
            // line 25
            echo "    <h3 class=\"poll-results-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results_title"] ?? null), 25, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 27
        echo "  <dl>
    ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["results"] ?? null), 28, $this->source), "html", null, true);
        echo "
  </dl>
  <div class=\"total\">
    ";
        // line 31
        echo t("Total votes: @votes", array("@votes" => ($context["votes"] ?? null), ));
        // line 32
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/poll/templates/poll-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 32,  65 => 31,  59 => 28,  56 => 27,  50 => 25,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/poll/templates/poll-results.html.twig", "/app/modules/contrib/poll/templates/poll-results.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "trans" => 31);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
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
