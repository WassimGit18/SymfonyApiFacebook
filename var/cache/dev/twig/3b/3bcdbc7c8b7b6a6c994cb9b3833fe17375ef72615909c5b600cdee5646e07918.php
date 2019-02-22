<?php

/* @Httplug/webprofiler.html.twig */
class __TwigTemplate_6332d959af5b29a5bd64403e43f2dc28d829996ba84faf1fa4e737db6c1da234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Httplug/webprofiler.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b509e492afdeaaad5a8a12aa79db42d23b66c14d38abcdfda2892af8f912d120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b509e492afdeaaad5a8a12aa79db42d23b66c14d38abcdfda2892af8f912d120->enter($__internal_b509e492afdeaaad5a8a12aa79db42d23b66c14d38abcdfda2892af8f912d120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $__internal_5076243612fc2dd153a244f2012839781a4b0445b46854f438e53a08451c6996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5076243612fc2dd153a244f2012839781a4b0445b46854f438e53a08451c6996->enter($__internal_5076243612fc2dd153a244f2012839781a4b0445b46854f438e53a08451c6996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b509e492afdeaaad5a8a12aa79db42d23b66c14d38abcdfda2892af8f912d120->leave($__internal_b509e492afdeaaad5a8a12aa79db42d23b66c14d38abcdfda2892af8f912d120_prof);

        
        $__internal_5076243612fc2dd153a244f2012839781a4b0445b46854f438e53a08451c6996->leave($__internal_5076243612fc2dd153a244f2012839781a4b0445b46854f438e53a08451c6996_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9d938ce76b7e4a7292432ceff36023795b1da6a46a6bbe9029412ac86c54651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d938ce76b7e4a7292432ceff36023795b1da6a46a6bbe9029412ac86c54651->enter($__internal_b9d938ce76b7e4a7292432ceff36023795b1da6a46a6bbe9029412ac86c54651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84d1d03d8684a9ed39abaededde888422d7f4b6d089d698ce9950935f378c022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d1d03d8684a9ed39abaededde888422d7f4b6d089d698ce9950935f378c022->enter($__internal_84d1d03d8684a9ed39abaededde888422d7f4b6d089d698ce9950935f378c022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalDuration", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())), "html", null, true);
            echo " requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["stack"], "client", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["stack"], "requestMethod", array()), "html", null, true);
                echo "</td>
                                ";
                // line 33
                $context["target"] = $this->getAttribute($context["stack"], "requestTarget", array());
                // line 34
                echo "                                <td title=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? $this->getContext($context, "target")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["target"] ?? $this->getContext($context, "target"))) > 30)) ? ((twig_slice($this->env, ($context["target"] ?? $this->getContext($context, "target")), 0, 30) . "...")) : (($context["target"] ?? $this->getContext($context, "target")))), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, ((($this->getAttribute($context["stack"], "duration", array()) == 0)) ? ("n/a") : ((twig_number_format_filter($this->env, $this->getAttribute($context["stack"], "duration", array())) . " ms"))), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, (($this->getAttribute($context["stack"], "failed", array())) ? ("FAILED") : ((($this->getAttribute($context["stack"], "responseCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["stack"], "responseCode", array()), "n/a")) : ("n/a")))), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
        ";
            // line 44
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Httplug/webprofiler.html.twig", 44)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("red") : ("")))));
            // line 45
            echo "    ";
        }
        
        $__internal_84d1d03d8684a9ed39abaededde888422d7f4b6d089d698ce9950935f378c022->leave($__internal_84d1d03d8684a9ed39abaededde888422d7f4b6d089d698ce9950935f378c022_prof);

        
        $__internal_b9d938ce76b7e4a7292432ceff36023795b1da6a46a6bbe9029412ac86c54651->leave($__internal_b9d938ce76b7e4a7292432ceff36023795b1da6a46a6bbe9029412ac86c54651_prof);

    }

    // line 48
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef4b40c23521405833bfe9fc8118d93061172fbc2a1bca2f42620759979d8898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4b40c23521405833bfe9fc8118d93061172fbc2a1bca2f42620759979d8898->enter($__internal_ef4b40c23521405833bfe9fc8118d93061172fbc2a1bca2f42620759979d8898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a271d6c123dc166c0c3f9b77756fa329c9a996613e490c9f3492f38728195148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a271d6c123dc166c0c3f9b77756fa329c9a996613e490c9f3492f38728195148->enter($__internal_a271d6c123dc166c0c3f9b77756fa329c9a996613e490c9f3492f38728195148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 49
        echo "    <style>
        ";
        // line 50
        echo twig_include($this->env, $context, "@Httplug/style/httplug.css.twig");
        echo "
    </style>
    <script type=\"text/javascript\">
        ";
        // line 53
        echo twig_include($this->env, $context, "@Httplug/script/httplug.js.twig");
        echo "
    </script>
    ";
        // line 55
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a271d6c123dc166c0c3f9b77756fa329c9a996613e490c9f3492f38728195148->leave($__internal_a271d6c123dc166c0c3f9b77756fa329c9a996613e490c9f3492f38728195148_prof);

        
        $__internal_ef4b40c23521405833bfe9fc8118d93061172fbc2a1bca2f42620759979d8898->leave($__internal_ef4b40c23521405833bfe9fc8118d93061172fbc2a1bca2f42620759979d8898_prof);

    }

    // line 58
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee27b7bb58e074abd750bdc5400443d5f2f43a59f15510f316cba316d5b0c9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee27b7bb58e074abd750bdc5400443d5f2f43a59f15510f316cba316d5b0c9e0->enter($__internal_ee27b7bb58e074abd750bdc5400443d5f2f43a59f15510f316cba316d5b0c9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cff230273872549f923b4cb95b229b52ae884edf86ef094bc17b48f81c594f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff230273872549f923b4cb95b229b52ae884edf86ef094bc17b48f81c594f5b->enter($__internal_cff230273872549f923b4cb95b229b52ae884edf86ef094bc17b48f81c594f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 59
        echo "    ";
        // line 60
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 62
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        ";
        // line 65
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) {
            // line 66
            echo "            <span class=\"count\">
                <span>";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array())), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 70
        echo "    </span>
";
        
        $__internal_cff230273872549f923b4cb95b229b52ae884edf86ef094bc17b48f81c594f5b->leave($__internal_cff230273872549f923b4cb95b229b52ae884edf86ef094bc17b48f81c594f5b_prof);

        
        $__internal_ee27b7bb58e074abd750bdc5400443d5f2f43a59f15510f316cba316d5b0c9e0->leave($__internal_ee27b7bb58e074abd750bdc5400443d5f2f43a59f15510f316cba316d5b0c9e0_prof);

    }

    // line 73
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9390fd4c83dc99f1da5e60932e98bd6a0836562df151766762ea767e7480759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9390fd4c83dc99f1da5e60932e98bd6a0836562df151766762ea767e7480759->enter($__internal_d9390fd4c83dc99f1da5e60932e98bd6a0836562df151766762ea767e7480759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_284a35a9e3838ff60185ad80da49595864def5cf21ba1e25ea95f655faf67d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284a35a9e3838ff60185ad80da49595864def5cf21ba1e25ea95f655faf67d74->enter($__internal_284a35a9e3838ff60185ad80da49595864def5cf21ba1e25ea95f655faf67d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 74
        echo "    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clients", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 77
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 78
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countClientMessages", array(0 => $context["client"]), "method"), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 82
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "\".
                </p>

                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clientRootStacks", array(0 => $context["client"]), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 86
                echo "                    <div class=\"httplug-stack\">
                        ";
                // line 87
                $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/webprofiler.html.twig", 87)->display(array("collector" =>                 // line 88
($context["collector"] ?? $this->getContext($context, "collector")), "client" =>                 // line 89
$context["client"], "stack" =>                 // line 90
$context["stack"], "id" => $this->getAttribute(                // line 91
$context["loop"], "index", array())));
                // line 93
                echo "                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </div>
";
        
        $__internal_284a35a9e3838ff60185ad80da49595864def5cf21ba1e25ea95f655faf67d74->leave($__internal_284a35a9e3838ff60185ad80da49595864def5cf21ba1e25ea95f655faf67d74_prof);

        
        $__internal_d9390fd4c83dc99f1da5e60932e98bd6a0836562df151766762ea767e7480759->leave($__internal_d9390fd4c83dc99f1da5e60932e98bd6a0836562df151766762ea767e7480759_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 102,  324 => 98,  317 => 95,  302 => 93,  300 => 91,  299 => 90,  298 => 89,  297 => 88,  296 => 87,  293 => 86,  276 => 85,  270 => 82,  261 => 78,  258 => 77,  253 => 76,  249 => 74,  240 => 73,  229 => 70,  223 => 67,  220 => 66,  218 => 65,  212 => 62,  204 => 60,  202 => 59,  193 => 58,  181 => 55,  176 => 53,  170 => 50,  167 => 49,  158 => 48,  147 => 45,  145 => 44,  142 => 43,  136 => 39,  127 => 36,  123 => 35,  116 => 34,  114 => 33,  110 => 32,  106 => 31,  103 => 30,  99 => 29,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  68 => 9,  63 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.stacks|length > 0 %}
        {% set icon %}
            {{ include('@Httplug/Icon/httplug.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.stacks|length }}</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.stacks|length }} requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for stack in collector.stacks %}
                            <tr>
                                <td>{{ stack.client }}</td>
                                <td>{{ stack.requestMethod }}</td>
                                {% set target = stack.requestTarget %}
                                <td title=\"{{ target }}\">{{ target|length > 30 ? target[:30] ~ '...' : target }}</td>
                                <td>{{ stack.duration == 0 ? 'n/a' : stack.duration|number_format ~ ' ms'}}</td>
                                <td>{{ stack.failed ? 'FAILED' : stack.responseCode|default('n/a') }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, 'status': collector.failedStacks|length ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block head %}
    <style>
        {{ include('@Httplug/style/httplug.css.twig') }}
    </style>
    <script type=\"text/javascript\">
        {{ include('@Httplug/script/httplug.js.twig') }}
    </script>
    {{ parent() }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.stacks|length == 0 ? 'disabled' }} {{ collector.failedStacks|length ? 'label-status-error' }}\">
        <span class=\"icon\">
            {{ include('@Httplug/Icon/httplug.svg') }}
        </span>
        <strong>Httplug</strong>
        {% if collector.failedStacks|length %}
            <span class=\"count\">
                <span>{{ collector.failedStacks|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        {% for client in collector.clients %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ client }} <span class=\"badge\">{{ collector.countClientMessages(client) }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"{{ client }}\".
                </p>

                {% for stack in collector.clientRootStacks(client) %}
                    <div class=\"httplug-stack\">
                        {% include '@Httplug/stack.html.twig' with {
                            'collector': collector,
                            'client': client,
                            'stack': stack,
                            'id': loop.index
                        } only %}
                    </div>
                {% endfor %}
            </div>
        </div>
        {% else %}
            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "@Httplug/webprofiler.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\php-http\\httplug-bundle\\Resources\\views\\webprofiler.html.twig");
    }
}
