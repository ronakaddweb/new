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

/* core/themes/seven/templates/classy/content/links--node.html.twig */
class __TwigTemplate_c1ead3df2300c82ca8dac05965479d0810fd3ac384ff7cce46f5c9db7f817274 extends \Twig\Template
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
        // line 36
        if (($context["links"] ?? null)) {
            // line 37
            echo "  <div class=\"node__links\">
    ";
            // line 38
            $this->loadTemplate("links.html.twig", "core/themes/seven/templates/classy/content/links--node.html.twig", 38)->display($context);
            // line 39
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/content/links--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 39,  44 => 38,  41 => 37,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/seven/templates/classy/content/links--node.html.twig", "/opt/lampp/htdocs/testdrupal/web/core/themes/seven/templates/classy/content/links--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "include" => 38);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
