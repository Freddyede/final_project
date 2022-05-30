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

/* common/navbar_dark/common/navbar_supported_content/index.html.twig */
class __TwigTemplate_f809475eaaaa75f200da74a1d89f5e17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/navbar_dark/common/navbar_supported_content/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/navbar_dark/common/navbar_supported_content/index.html.twig"));

        // line 1
        echo "<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        ";
        // line 9
        $this->loadTemplate("charts/common/navbar/index.html.twig", "common/navbar_dark/common/navbar_supported_content/index.html.twig", 9)->display($context);
        // line 10
        echo "        <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
        </li>
    </ul>
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["logoutUrl"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-danger\">";
        echo twig_escape_filter($this->env, ($context["logoutName"] ?? null), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "common/navbar_dark/common/navbar_supported_content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        {% include('charts/common/navbar/index.html.twig') %}
        <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Disabled</a>
        </li>
    </ul>
    <a href=\"{{ logoutUrl }}\" class=\"btn btn-danger\">{{ logoutName }}</a>
</div>
", "common/navbar_dark/common/navbar_supported_content/index.html.twig", "/home/kali/Bureau/project_final/templates/common/navbar_dark/common/navbar_supported_content/index.html.twig");
    }
}
