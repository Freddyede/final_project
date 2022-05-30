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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_c01f2a3cd683ba32bc67386667a701ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 6), "unavailable_migrations_count", [], "any", true, true, false, 6)) {
            // line 7
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 7), "unavailable_migrations_count", [], "any", false, false, false, 7);
            // line 8
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 8), "new_migrations", [], "any", false, false, false, 8));
            // line 9
            echo "        ";
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 10
                echo "            ";
                $context["executed_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 10), "executed_migrations", [], "any", false, false, false, 10));
                // line 11
                echo "            ";
                $context["available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 11), "available_migrations_count", [], "any", false, false, false, 11);
                // line 12
                echo "            ";
                $context["status_color"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("yellow") : (""));
                // line 13
                echo "            ";
                $context["status_color"] = (((($context["new_migrations"] ?? null) > 0)) ? ("red") : (($context["status_color"] ?? null)));
                // line 14
                echo "
            ";
                // line 15
                ob_start();
                // line 16
                echo "                ";
                echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 17
                echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                echo "</span>
            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 19
                echo "
            ";
                // line 20
                ob_start();
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Current</b>
                    <span>";
                // line 23
                (((($context["executed_migrations"] ?? null) > 0)) ? (print (twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 23), "executed_migrations", [], "any", false, false, false, 23)), "version", [], "any", false, false, false, 23), "\\")), "html", null, true))) : (print ("n/a")));
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed</b>
                    <span class=\"sf-toolbar-status\">";
                // line 27
                echo twig_escape_filter($this->env, ($context["executed_migrations"] ?? null), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed Unavailable</b>
                    <span class=\"sf-toolbar-status ";
                // line 31
                echo (((($context["unavailable_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, ($context["unavailable_migrations"] ?? null), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Available</b>
                    <span class=\"sf-toolbar-status\">";
                // line 35
                echo twig_escape_filter($this->env, ($context["available_migrations"] ?? null), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>New</b>
                    <span class=\"sf-toolbar-status ";
                // line 39
                echo (((($context["new_migrations"] ?? null) > 0)) ? ("sf-toolbar-status-red") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, ($context["new_migrations"] ?? null), "html", null, true);
                echo "</span>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 42
                echo "
            ";
                // line 43
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
                echo "
        ";
            }
            // line 45
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 50), "unavailable_migrations_count", [], "any", true, true, false, 50)) {
            // line 51
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 51), "unavailable_migrations_count", [], "any", false, false, false, 51);
            // line 52
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 52), "new_migrations", [], "any", false, false, false, 52));
            // line 53
            echo "        ";
            $context["label"] = (((($context["unavailable_migrations"] ?? null) > 0)) ? ("label-status-warning") : (""));
            // line 54
            echo "        ";
            $context["label"] = (((($context["new_migrations"] ?? null) > 0)) ? ("label-status-error") : (($context["label"] ?? null)));
            // line 55
            echo "        <span class=\"label ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
            <span class=\"icon\">";
            // line 56
            echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
            echo "</span>
            <strong>Migrations</strong>
            ";
            // line 58
            if (((($context["unavailable_migrations"] ?? null) > 0) || (($context["new_migrations"] ?? null) > 0))) {
                // line 59
                echo "                <span class=\"count\">
                    <span>";
                // line 60
                echo twig_escape_filter($this->env, (($context["new_migrations"] ?? null) + ($context["unavailable_migrations"] ?? null)), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 63
            echo "        </span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 68
        echo "    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 71), "executed_migrations", [], "any", false, false, false, 71)), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 75), "unavailable_migrations_count", [], "any", false, false, false, 75), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 79), "available_migrations_count", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 83), "new_migrations", [], "any", false, false, false, 83)), "html", null, true);
        echo "</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 97), "storage", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 99), "table", [], "any", true, true, false, 99)) {
            // line 100
            echo "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 102), "table", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 105
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 105), "column", [], "any", true, true, false, 105)) {
            // line 106
            echo "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 108), "column", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 111
        echo "    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 120), "driver", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 133), "namespaces", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
            // line 134
            echo "            <tr>
                <td class=\"font-normal\">";
            // line 135
            echo twig_escape_filter($this->env, $context["namespace"], "html", null, true);
            echo "</td>
                <td class=\"font-normal\">";
            // line 136
            echo twig_escape_filter($this->env, $context["directory"], "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 152), "new_migrations", [], "any", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 153
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 153, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 156), "executed_migrations", [], "any", false, false, false, 156)));
        foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
            // line 157
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function macro_render_migration($__migration__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            // line 163
            echo "    <tr>
        <td class=\"font-normal\">
            ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 165)) {
                // line 166
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 166), 1), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "file", [], "any", false, false, false, 166), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 166), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 168
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "version", [], "any", false, false, false, 168), "html", null, true);
                echo "
            ";
            }
            // line 170
            echo "        </td>
        <td class=\"font-normal\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "description", [], "any", false, false, false, 171), "html", null, true);
            echo "</td>
        <td class=\"font-normal\">
            ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "is_new", [], "any", false, false, false, 173)) {
                // line 174
                echo "                <span class=\"label status-error\">NOT EXECUTED</span>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 175
($context["migration"] ?? null), "is_unavailable", [], "any", false, false, false, 175)) {
                // line 176
                echo "                <span class=\"label status-warning\">UNAVAILABLE</span>
            ";
            } else {
                // line 178
                echo "                <span class=\"label status-success\">EXECUTED</span>
            ";
            }
            // line 180
            echo "        </td>
        <td class=\"font-normal\">";
            // line 181
            ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 181)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "executed_at", [], "any", false, false, false, 181)), "html", null, true))) : (print ("n/a")));
            echo "</td>
        <td class=\"font-normal\">";
            // line 182
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["migration"] ?? null), "execution_time", [], "any", false, false, false, 182), "n/a")) : ("n/a")), "html", null, true);
            echo "</td>
    </tr>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 182,  491 => 181,  488 => 180,  484 => 178,  480 => 176,  478 => 175,  475 => 174,  473 => 173,  468 => 171,  465 => 170,  459 => 168,  449 => 166,  447 => 165,  443 => 163,  424 => 162,  413 => 159,  404 => 157,  400 => 156,  397 => 155,  388 => 153,  384 => 152,  369 => 139,  360 => 136,  356 => 135,  353 => 134,  349 => 133,  337 => 124,  330 => 120,  319 => 111,  313 => 108,  309 => 106,  306 => 105,  300 => 102,  296 => 100,  294 => 99,  289 => 97,  272 => 83,  265 => 79,  258 => 75,  251 => 71,  246 => 68,  236 => 67,  224 => 63,  218 => 60,  215 => 59,  213 => 58,  208 => 56,  203 => 55,  200 => 54,  197 => 53,  194 => 52,  191 => 51,  188 => 50,  178 => 49,  167 => 45,  162 => 43,  159 => 42,  151 => 39,  144 => 35,  135 => 31,  128 => 27,  121 => 23,  117 => 21,  115 => 20,  112 => 19,  107 => 17,  102 => 16,  100 => 15,  97 => 14,  94 => 13,  91 => 12,  88 => 11,  85 => 10,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.data.unavailable_migrations_count is defined %}
        {% set unavailable_migrations = collector.data.unavailable_migrations_count %}
        {% set new_migrations = collector.data.new_migrations|length %}
        {% if unavailable_migrations > 0 or new_migrations > 0 %}
            {% set executed_migrations = collector.data.executed_migrations|length %}
            {% set available_migrations = collector.data.available_migrations_count %}
            {% set status_color = unavailable_migrations > 0 ? 'yellow' : '' %}
            {% set status_color = new_migrations > 0 ? 'red' : status_color %}

            {% set icon %}
                {{ include('@DoctrineMigrations/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ new_migrations + unavailable_migrations }}</span>
            {% endset %}

            {% set text %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Current</b>
                    <span>{{ executed_migrations > 0 ? collector.data.executed_migrations|last.version|split('\\\\')|last : 'n/a' }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed</b>
                    <span class=\"sf-toolbar-status\">{{ executed_migrations }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Executed Unavailable</b>
                    <span class=\"sf-toolbar-status {{ unavailable_migrations > 0 ? 'sf-toolbar-status-yellow' }}\">{{ unavailable_migrations }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Available</b>
                    <span class=\"sf-toolbar-status\">{{ available_migrations }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>New</b>
                    <span class=\"sf-toolbar-status {{ new_migrations > 0 ? 'sf-toolbar-status-red' }}\">{{ new_migrations }}</span>
                </div>
            {% endset %}

            {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
        {% endif %}
    {% endif %}
{% endblock %}


{% block menu %}
    {% if collector.data.unavailable_migrations_count is defined %}
        {% set unavailable_migrations = collector.data.unavailable_migrations_count %}
        {% set new_migrations = collector.data.new_migrations|length %}
        {% set label = unavailable_migrations > 0 ? 'label-status-warning' : '' %}
        {% set label = new_migrations > 0 ? 'label-status-error' : label %}
        <span class=\"label {{ label }}\">
            <span class=\"icon\">{{ include('@DoctrineMigrations/Collector/icon.svg') }}</span>
            <strong>Migrations</strong>
            {% if unavailable_migrations > 0 or new_migrations > 0 %}
                <span class=\"count\">
                    <span>{{ new_migrations + unavailable_migrations }}</span>
                </span>
            {% endif %}
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.executed_migrations|length }}</span>
            <span class=\"label\">Executed</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.unavailable_migrations_count }}</span>
            <span class=\"label\">Executed Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.available_migrations_count }}</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.data.new_migrations|length }}</span>
            <span class=\"label\">New</span>
        </div>
    </div>

    <h3>Configuration</h3>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">{{ collector.data.storage }}</td>
        </tr>
        {% if collector.data.table is defined %}
            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">{{ collector.data.table }}</td>
            </tr>
        {% endif %}
        {% if collector.data.column is defined %}
            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">{{ collector.data.column }}</td>
            </tr>
        {% endif %}
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Database</th>
            </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">{{ collector.data.driver }}</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">{{ collector.data.name }}</td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
            </tr>
        </thead>
        {% for namespace, directory in collector.data.namespaces %}
            <tr>
                <td class=\"font-normal\">{{ namespace }}</td>
                <td class=\"font-normal\">{{ directory }}</td>
            </tr>
        {% endfor %}
    </table>

    <h3>Migrations</h3>
    <table>
        <thead>
            <tr>
                <th class=\"colored font-normal\">Version</th>
                <th class=\"colored font-normal\">Description</th>
                <th class=\"colored font-normal\">Status</th>
                <th class=\"colored font-normal\">Executed at</th>
                <th class=\"colored font-normal\">Execution time</th>
            </tr>
        </thead>
        {% for migration in collector.data.new_migrations %}
            {{ helper.render_migration(migration) }}
        {% endfor %}

        {% for migration in collector.data.executed_migrations|reverse %}
            {{ helper.render_migration(migration) }}
        {% endfor %}
    </table>
{% endblock %}

{% macro render_migration(migration) %}
    <tr>
        <td class=\"font-normal\">
            {% if migration.file %}
                <a href=\"{{ migration.file|file_link(1) }}\" title=\"{{ migration.file }}\">{{ migration.version }}</a>
            {% else %}
                {{ migration.version }}
            {% endif %}
        </td>
        <td class=\"font-normal\">{{ migration.description }}</td>
        <td class=\"font-normal\">
            {% if migration.is_new %}
                <span class=\"label status-error\">NOT EXECUTED</span>
            {% elseif migration.is_unavailable %}
                <span class=\"label status-warning\">UNAVAILABLE</span>
            {% else %}
                <span class=\"label status-success\">EXECUTED</span>
            {% endif %}
        </td>
        <td class=\"font-normal\">{{ migration.executed_at ? migration.executed_at|date : 'n/a' }}</td>
        <td class=\"font-normal\">{{ migration.execution_time|default('n/a') }}</td>
    </tr>
{% endmacro %}
", "@DoctrineMigrations/Collector/migrations.html.twig", "/home/kali/Bureau/project_final/vendor/doctrine/doctrine-migrations-bundle/Resources/views/Collector/migrations.html.twig");
    }
}
