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

/* themes/custom/consultant/templates/page.html.twig */
class __TwigTemplate_a19e41146779d9b6ea8d2e00dd2a7d3c510227b65ff1241ebd0643221af197fe extends \Twig\Template
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
        // line 1
        echo "
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>complete responsive coffee shop website design</title>

    <!-- font awesome cdn link  -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <!-- custom css file link  -->
    <link rel=\"stylesheet\" href=\"css/style.css\">

  
   
   <!-- header section starts  -->
<header class=\"header\">

<a href=\"#\" class=\"logo\">
        ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
    </a>

    <nav class=\"navbar\">
       ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
    </nav>


    <div>
    ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_right", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
    
    </div>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class=\"home\" id=\"home\">

    ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class=\"about\" id=\"about\">

   

    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "
</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class=\"menu\" id=\"menu\">

   ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "

</section>

<!-- menu section ends -->



<!-- review section starts  -->

<section class=\"review\" id=\"review\">

    <h1 class=\"heading\"> customer's <span>review</span> </h1>
    ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "review", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class=\"contact\" id=\"contact\">

    <h1 class=\"heading\"> <span>contact</span> us </h1>

    <div class=\"row\">

        
        

        <form action=\"\">
            <h3>get in touch</h3>
            ";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact_us_right", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class=\"blogs\" id=\"blogs\">

    <h1 class=\"heading\"> our <span>blogs</span> </h1>

    <div class=\"box-container\">

        <div class=\"box\">
            <div class=\"image\">
                <img src=\"";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 112, $this->source), "html", null, true);
        echo "/images/blog-1.jpeg\" alt=\"\">
            </div>
            <div class=\"content\">
                ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blogs_left", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"box\">
            <div class=\"image\">
                <img src=\"";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 121, $this->source), "html", null, true);
        echo "/images/blog-2.jpeg\" alt=\"\">
            </div>
            <div class=\"content\">
                ";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blogs_buttom", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"box\">
            <div class=\"image\">
                <img src=\"";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 130, $this->source), "html", null, true);
        echo "/images/blog-3.jpeg\" alt=\"\">
            </div>
            <div class=\"content\">
                ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "blogs_right", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class=\"footer\">

   ";
        // line 147
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_column", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
        echo "

    <div class=\"credit\">created by <span>mr. web designer</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src=\"js/script.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/consultant/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 147,  212 => 133,  206 => 130,  197 => 124,  191 => 121,  182 => 115,  176 => 112,  154 => 93,  133 => 75,  117 => 62,  105 => 53,  90 => 41,  76 => 30,  68 => 25,  61 => 21,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/consultant/templates/page.html.twig", "/app/themes/custom/consultant/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
