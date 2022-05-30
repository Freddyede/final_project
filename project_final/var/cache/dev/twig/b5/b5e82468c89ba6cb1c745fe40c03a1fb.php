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

/* charts/index.html.twig */
class __TwigTemplate_6733bc9af5c9642235ca1c9886723705 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "charts/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ChartsController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"col-1\" style=\"border: 1px solid red;\"></div>
    <div class=\"col-10 d-flex-column justify-content-center align-items-center mx-auto\" style=\"height: 94vh; border:1px solid black;\">
        <div class=\"d-flex justify-content-center align-items-center mx-auto\" style=\"width: 100%;height: 47vh;\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charts_pie");
        echo "\" class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </a>
            <a href=\"#\" class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://aws1.discourse-cdn.com/business7/uploads/plot/original/2X/5/57f6d8bf56efe71ab31948990fc4dbf5b356684f.png\" alt=\"charts\" class=\"img-fluid\" />
            </a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bar_charts");
        echo "\" class=\"col-1 h-50 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </a>
        </div>
        <div class=\"d-flex justify-content-center align-items-center mx-auto container-47\">
            <div class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </div>
            <div class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </div>
            <div class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </div>
        </div>
    </div>
    <div class=\"col-1\" style=\"border: 1px solid red;\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "charts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ChartsController!{% endblock %}

{% block body %}
    <div class=\"col-1\" style=\"border: 1px solid red;\"></div>
    <div class=\"col-10 d-flex-column justify-content-center align-items-center mx-auto\" style=\"height: 94vh; border:1px solid black;\">
        <div class=\"d-flex justify-content-center align-items-center mx-auto\" style=\"width: 100%;height: 47vh;\">
            <a href=\"{{ path('charts_pie') }}\" class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </a>
            <a href=\"#\" class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://aws1.discourse-cdn.com/business7/uploads/plot/original/2X/5/57f6d8bf56efe71ab31948990fc4dbf5b356684f.png\" alt=\"charts\" class=\"img-fluid\" />
            </a>
            <a href=\"{{ path('bar_charts') }}\" class=\"col-1 h-50 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </a>
        </div>
        <div class=\"d-flex justify-content-center align-items-center mx-auto container-47\">
            <div class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </div>
            <div class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </div>
            <div class=\"col-1 h-25 d-flex justify-content-center align-items-center mx-auto\">
                <img src=\"https://miro.medium.com/max/629/1*rzNBRBt1RCr4NsN4Lb7V1Q.png\" alt=\"charts\" class=\"img-fluid\" />
            </div>
        </div>
    </div>
    <div class=\"col-1\" style=\"border: 1px solid red;\"></div>
{% endblock %}
", "charts/index.html.twig", "/home/kali/Bureau/project_final/templates/charts/index.html.twig");
    }
}
