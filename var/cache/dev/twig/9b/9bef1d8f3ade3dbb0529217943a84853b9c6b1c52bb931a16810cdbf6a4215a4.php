<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7a520e895d2083e84b161450c68f36a747a4a611bf191615b006cbca78b7d50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e671a3cf5e0dcdc311c57fe9064579e73d5349fe2e1c4e45abc394d723337ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e671a3cf5e0dcdc311c57fe9064579e73d5349fe2e1c4e45abc394d723337ff->enter($__internal_6e671a3cf5e0dcdc311c57fe9064579e73d5349fe2e1c4e45abc394d723337ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_59a359337d0b2996ca68bf6b1fc283e25e8c42d608d84e81b8c91b6db6117f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a359337d0b2996ca68bf6b1fc283e25e8c42d608d84e81b8c91b6db6117f37->enter($__internal_59a359337d0b2996ca68bf6b1fc283e25e8c42d608d84e81b8c91b6db6117f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e671a3cf5e0dcdc311c57fe9064579e73d5349fe2e1c4e45abc394d723337ff->leave($__internal_6e671a3cf5e0dcdc311c57fe9064579e73d5349fe2e1c4e45abc394d723337ff_prof);

        
        $__internal_59a359337d0b2996ca68bf6b1fc283e25e8c42d608d84e81b8c91b6db6117f37->leave($__internal_59a359337d0b2996ca68bf6b1fc283e25e8c42d608d84e81b8c91b6db6117f37_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3949c4243bdcd6abd34d678934d09527032de5d3b0e32bb61f50a21c7711047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3949c4243bdcd6abd34d678934d09527032de5d3b0e32bb61f50a21c7711047->enter($__internal_e3949c4243bdcd6abd34d678934d09527032de5d3b0e32bb61f50a21c7711047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_33136d1986b794585a635d3440b0a5936a3bff4599f75c99c0af216f79ec894f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33136d1986b794585a635d3440b0a5936a3bff4599f75c99c0af216f79ec894f->enter($__internal_33136d1986b794585a635d3440b0a5936a3bff4599f75c99c0af216f79ec894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_33136d1986b794585a635d3440b0a5936a3bff4599f75c99c0af216f79ec894f->leave($__internal_33136d1986b794585a635d3440b0a5936a3bff4599f75c99c0af216f79ec894f_prof);

        
        $__internal_e3949c4243bdcd6abd34d678934d09527032de5d3b0e32bb61f50a21c7711047->leave($__internal_e3949c4243bdcd6abd34d678934d09527032de5d3b0e32bb61f50a21c7711047_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
