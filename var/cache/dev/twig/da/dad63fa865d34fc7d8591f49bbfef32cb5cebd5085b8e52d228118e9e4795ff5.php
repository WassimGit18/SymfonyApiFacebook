<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_925b9d35310a58f0b54699f5c0ff1160cde55f065fa6a5c934ad895ccca811f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ec8d3088d059fa79f2ba1a9934eafb66b9b5ab54c08a0e8306097dd60b3bda4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8d3088d059fa79f2ba1a9934eafb66b9b5ab54c08a0e8306097dd60b3bda4d->enter($__internal_ec8d3088d059fa79f2ba1a9934eafb66b9b5ab54c08a0e8306097dd60b3bda4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6e0ad35af9e5877bc864903d02424c9496d32d7bd2907cc140ad3df1350c4f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0ad35af9e5877bc864903d02424c9496d32d7bd2907cc140ad3df1350c4f90->enter($__internal_6e0ad35af9e5877bc864903d02424c9496d32d7bd2907cc140ad3df1350c4f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec8d3088d059fa79f2ba1a9934eafb66b9b5ab54c08a0e8306097dd60b3bda4d->leave($__internal_ec8d3088d059fa79f2ba1a9934eafb66b9b5ab54c08a0e8306097dd60b3bda4d_prof);

        
        $__internal_6e0ad35af9e5877bc864903d02424c9496d32d7bd2907cc140ad3df1350c4f90->leave($__internal_6e0ad35af9e5877bc864903d02424c9496d32d7bd2907cc140ad3df1350c4f90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4708fe8ba5f8edb81b5f37d25922b49a80c429128fda8f396952d151f3c9e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4708fe8ba5f8edb81b5f37d25922b49a80c429128fda8f396952d151f3c9e82->enter($__internal_c4708fe8ba5f8edb81b5f37d25922b49a80c429128fda8f396952d151f3c9e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9b5a1aff4949763b96afe8e9d907edcc34bc28f6aa5c4307e02775d31d98e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b5a1aff4949763b96afe8e9d907edcc34bc28f6aa5c4307e02775d31d98e0e->enter($__internal_d9b5a1aff4949763b96afe8e9d907edcc34bc28f6aa5c4307e02775d31d98e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d9b5a1aff4949763b96afe8e9d907edcc34bc28f6aa5c4307e02775d31d98e0e->leave($__internal_d9b5a1aff4949763b96afe8e9d907edcc34bc28f6aa5c4307e02775d31d98e0e_prof);

        
        $__internal_c4708fe8ba5f8edb81b5f37d25922b49a80c429128fda8f396952d151f3c9e82->leave($__internal_c4708fe8ba5f8edb81b5f37d25922b49a80c429128fda8f396952d151f3c9e82_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac0ec1456603f39cd2050c507c478249f7623674363ea7eed8f7e48e27e8d24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0ec1456603f39cd2050c507c478249f7623674363ea7eed8f7e48e27e8d24e->enter($__internal_ac0ec1456603f39cd2050c507c478249f7623674363ea7eed8f7e48e27e8d24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ad183af8efb1f0b7032239058e559af098b7cbacdf16a35a84822209ce11b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad183af8efb1f0b7032239058e559af098b7cbacdf16a35a84822209ce11b79->enter($__internal_1ad183af8efb1f0b7032239058e559af098b7cbacdf16a35a84822209ce11b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ad183af8efb1f0b7032239058e559af098b7cbacdf16a35a84822209ce11b79->leave($__internal_1ad183af8efb1f0b7032239058e559af098b7cbacdf16a35a84822209ce11b79_prof);

        
        $__internal_ac0ec1456603f39cd2050c507c478249f7623674363ea7eed8f7e48e27e8d24e->leave($__internal_ac0ec1456603f39cd2050c507c478249f7623674363ea7eed8f7e48e27e8d24e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1b8ebd17a561fdf0c0283dd0d1ca72b544e3b8b0e93160a5234b84745a2accb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b8ebd17a561fdf0c0283dd0d1ca72b544e3b8b0e93160a5234b84745a2accb->enter($__internal_a1b8ebd17a561fdf0c0283dd0d1ca72b544e3b8b0e93160a5234b84745a2accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96f9e783b3b95b5bfff77d0e83da348000fd70a3343b777a9e29a3b909b773d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f9e783b3b95b5bfff77d0e83da348000fd70a3343b777a9e29a3b909b773d5->enter($__internal_96f9e783b3b95b5bfff77d0e83da348000fd70a3343b777a9e29a3b909b773d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96f9e783b3b95b5bfff77d0e83da348000fd70a3343b777a9e29a3b909b773d5->leave($__internal_96f9e783b3b95b5bfff77d0e83da348000fd70a3343b777a9e29a3b909b773d5_prof);

        
        $__internal_a1b8ebd17a561fdf0c0283dd0d1ca72b544e3b8b0e93160a5234b84745a2accb->leave($__internal_a1b8ebd17a561fdf0c0283dd0d1ca72b544e3b8b0e93160a5234b84745a2accb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
