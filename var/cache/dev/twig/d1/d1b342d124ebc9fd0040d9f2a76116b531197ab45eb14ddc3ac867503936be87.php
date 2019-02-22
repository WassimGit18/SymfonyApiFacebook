<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_418110502fa08e96ecbe2e61f353e715d6493ca7459f34da1a2de637000dae99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1bfea781b1dc8cd37e9dfd6820394d2fc9f6c889ff3ea016b0e1dc4d92013769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfea781b1dc8cd37e9dfd6820394d2fc9f6c889ff3ea016b0e1dc4d92013769->enter($__internal_1bfea781b1dc8cd37e9dfd6820394d2fc9f6c889ff3ea016b0e1dc4d92013769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2f58ec7b396d053b01b45caf6152c09ebc4a929be98e0afdf29562a223075d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f58ec7b396d053b01b45caf6152c09ebc4a929be98e0afdf29562a223075d2f->enter($__internal_2f58ec7b396d053b01b45caf6152c09ebc4a929be98e0afdf29562a223075d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bfea781b1dc8cd37e9dfd6820394d2fc9f6c889ff3ea016b0e1dc4d92013769->leave($__internal_1bfea781b1dc8cd37e9dfd6820394d2fc9f6c889ff3ea016b0e1dc4d92013769_prof);

        
        $__internal_2f58ec7b396d053b01b45caf6152c09ebc4a929be98e0afdf29562a223075d2f->leave($__internal_2f58ec7b396d053b01b45caf6152c09ebc4a929be98e0afdf29562a223075d2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_790489ed421e2f4d2ce32b957215c44558243a8102867e91b9197adb2e57b168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790489ed421e2f4d2ce32b957215c44558243a8102867e91b9197adb2e57b168->enter($__internal_790489ed421e2f4d2ce32b957215c44558243a8102867e91b9197adb2e57b168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ec2106e363b9bb060151782f1214b325cb29d8ad5b8ebd3b686f3842006fa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec2106e363b9bb060151782f1214b325cb29d8ad5b8ebd3b686f3842006fa8a->enter($__internal_5ec2106e363b9bb060151782f1214b325cb29d8ad5b8ebd3b686f3842006fa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ec2106e363b9bb060151782f1214b325cb29d8ad5b8ebd3b686f3842006fa8a->leave($__internal_5ec2106e363b9bb060151782f1214b325cb29d8ad5b8ebd3b686f3842006fa8a_prof);

        
        $__internal_790489ed421e2f4d2ce32b957215c44558243a8102867e91b9197adb2e57b168->leave($__internal_790489ed421e2f4d2ce32b957215c44558243a8102867e91b9197adb2e57b168_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eadb92389de786cc7560df563ff2fc06e4e7d660f655ec755327f39196f48f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadb92389de786cc7560df563ff2fc06e4e7d660f655ec755327f39196f48f68->enter($__internal_eadb92389de786cc7560df563ff2fc06e4e7d660f655ec755327f39196f48f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95608af1920e5e0428527fe1774cfa65fefe939a28680edf693aed55b51042e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95608af1920e5e0428527fe1774cfa65fefe939a28680edf693aed55b51042e0->enter($__internal_95608af1920e5e0428527fe1774cfa65fefe939a28680edf693aed55b51042e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95608af1920e5e0428527fe1774cfa65fefe939a28680edf693aed55b51042e0->leave($__internal_95608af1920e5e0428527fe1774cfa65fefe939a28680edf693aed55b51042e0_prof);

        
        $__internal_eadb92389de786cc7560df563ff2fc06e4e7d660f655ec755327f39196f48f68->leave($__internal_eadb92389de786cc7560df563ff2fc06e4e7d660f655ec755327f39196f48f68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56d3e214b268f046ec5c9dad7130b0770ca1f36d833684a150cf7d79bd18769b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d3e214b268f046ec5c9dad7130b0770ca1f36d833684a150cf7d79bd18769b->enter($__internal_56d3e214b268f046ec5c9dad7130b0770ca1f36d833684a150cf7d79bd18769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_786ae939c430f7b7e5bb15792721517ace29fa8543eb5712487eb1fa81ff0bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786ae939c430f7b7e5bb15792721517ace29fa8543eb5712487eb1fa81ff0bca->enter($__internal_786ae939c430f7b7e5bb15792721517ace29fa8543eb5712487eb1fa81ff0bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_786ae939c430f7b7e5bb15792721517ace29fa8543eb5712487eb1fa81ff0bca->leave($__internal_786ae939c430f7b7e5bb15792721517ace29fa8543eb5712487eb1fa81ff0bca_prof);

        
        $__internal_56d3e214b268f046ec5c9dad7130b0770ca1f36d833684a150cf7d79bd18769b->leave($__internal_56d3e214b268f046ec5c9dad7130b0770ca1f36d833684a150cf7d79bd18769b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
