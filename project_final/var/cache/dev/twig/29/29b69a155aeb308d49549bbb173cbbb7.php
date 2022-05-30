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

/* common/navbar_dark/common/container_fluid/index.html.twig */
class __TwigTemplate_62ea72adee17106a86cbf498b7441ac6 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/navbar_dark/common/container_fluid/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/navbar_dark/common/container_fluid/index.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    ";
        // line 2
        $this->loadTemplate("common/navbar_dark/common/title/index.html.twig", "common/navbar_dark/common/container_fluid/index.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("common/navbar_dark/common/navbar_supported_content/index.html.twig", "common/navbar_dark/common/container_fluid/index.html.twig", 3)->display($context);
        // line 4
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "common/navbar_dark/common/container_fluid/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    {% include 'common/navbar_dark/common/title/index.html.twig' %}
    {% include 'common/navbar_dark/common/navbar_supported_content/index.html.twig' %}
</div>
", "common/navbar_dark/common/container_fluid/index.html.twig", "/home/kali/Bureau/project_final/templates/common/navbar_dark/common/container_fluid/index.html.twig");
    }
}
