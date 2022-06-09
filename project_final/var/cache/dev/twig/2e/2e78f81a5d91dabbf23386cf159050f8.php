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

/* charts/common/navbar/second_level/index.html.twig */
class __TwigTemplate_b9f608cf0642244cc77fc1aece095b17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts/common/navbar/second_level/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "charts/common/navbar/second_level/index.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
    <li>
        <a class=\"dropdown-item text-center\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["chartsUrl"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 4
        echo twig_escape_filter($this->env, ($context["chartsName"] ?? null), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <hr class=\"dropdown-divider\">
    </li>
    <li>
        <a class=\"dropdown-item text-center\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["pieChartsUrl"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 12
        echo twig_escape_filter($this->env, ($context["pieChartsName"] ?? null), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a class=\"dropdown-item text-center\" href=\"#\">
            Something else here
        </a>
    </li>
    <li>
        <a class=\"dropdown-item text-center\" href=\"#\">
            Something else here
        </a>
    </li>
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "charts/common/navbar/second_level/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  61 => 11,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
    <li>
        <a class=\"dropdown-item text-center\" href=\"{{ chartsUrl }}\">
            {{ chartsName }}
        </a>
    </li>
    <li>
        <hr class=\"dropdown-divider\">
    </li>
    <li>
        <a class=\"dropdown-item text-center\" href=\"{{ pieChartsUrl }}\">
            {{ pieChartsName }}
        </a>
    </li>
    <li>
        <a class=\"dropdown-item text-center\" href=\"#\">
            Something else here
        </a>
    </li>
    <li>
        <a class=\"dropdown-item text-center\" href=\"#\">
            Something else here
        </a>
    </li>
</ul>
", "charts/common/navbar/second_level/index.html.twig", "/home/kali/Bureau/final_project/project_final/templates/charts/common/navbar/second_level/index.html.twig");
    }
}
