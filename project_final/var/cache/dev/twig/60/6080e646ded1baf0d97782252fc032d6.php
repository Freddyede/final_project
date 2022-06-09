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

/* navbar/index.html.twig */
class __TwigTemplate_c0639b96dc4d8b98f25a9037d3a0d1ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/index.html.twig"));

        // line 1
        $context["roles"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "roles", [], "any", false, false, false, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["roles"] ?? null) : null);
        // line 2
        if ((null === ($context["roles"] ?? null))) {
            // line 3
            echo "    ";
            $this->loadTemplate("component/LOGINREGISTER/index.html.twig", "navbar/index.html.twig", 3)->display($context);
        } elseif ((        // line 4
($context["roles"] ?? null) === "ROLE_ADMIN")) {
            // line 5
            echo "    ";
            $this->loadTemplate("component/ADMIN/index.html.twig", "navbar/index.html.twig", 5)->display($context);
        } elseif ((        // line 6
($context["roles"] ?? null) === "ROLE_USER")) {
            // line 7
            echo "    ";
            $this->loadTemplate("component/PROFILE/index.html.twig", "navbar/index.html.twig", 7)->display($context);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  55 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set roles = app.user.roles[\"roles\"] %}
{% if roles is null %}
    {% include 'component/LOGINREGISTER/index.html.twig' %}
{% elseif roles is same as('ROLE_ADMIN') %}
    {% include 'component/ADMIN/index.html.twig' %}
{% elseif roles is same as('ROLE_USER') %}
    {% include 'component/PROFILE/index.html.twig' %}
{% endif %}
", "navbar/index.html.twig", "/home/kali/Bureau/final_project/project_final/templates/navbar/index.html.twig");
    }
}
