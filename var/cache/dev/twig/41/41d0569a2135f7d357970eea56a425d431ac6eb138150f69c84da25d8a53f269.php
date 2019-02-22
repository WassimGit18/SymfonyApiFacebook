<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f6befe67edd28940d622feb5b9973853b989d983d5823d133b370237650b6ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b82f698d0f34fc31304767cd02d18bc3360f0af32ab45ab222c58396bcc27cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82f698d0f34fc31304767cd02d18bc3360f0af32ab45ab222c58396bcc27cab->enter($__internal_b82f698d0f34fc31304767cd02d18bc3360f0af32ab45ab222c58396bcc27cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_7fa195a0c82bf6b1fbe38f3ea49e1411fe57d09ab04373c7cc5dc1a59b869726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa195a0c82bf6b1fbe38f3ea49e1411fe57d09ab04373c7cc5dc1a59b869726->enter($__internal_7fa195a0c82bf6b1fbe38f3ea49e1411fe57d09ab04373c7cc5dc1a59b869726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82f698d0f34fc31304767cd02d18bc3360f0af32ab45ab222c58396bcc27cab->leave($__internal_b82f698d0f34fc31304767cd02d18bc3360f0af32ab45ab222c58396bcc27cab_prof);

        
        $__internal_7fa195a0c82bf6b1fbe38f3ea49e1411fe57d09ab04373c7cc5dc1a59b869726->leave($__internal_7fa195a0c82bf6b1fbe38f3ea49e1411fe57d09ab04373c7cc5dc1a59b869726_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54e42e799df1bd1af05740b57d68f3b1a992b456c3260bdf3531edae4ffd0f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e42e799df1bd1af05740b57d68f3b1a992b456c3260bdf3531edae4ffd0f22->enter($__internal_54e42e799df1bd1af05740b57d68f3b1a992b456c3260bdf3531edae4ffd0f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_759ba03b1d6eb45eea2856bb1ffdb33ae7b025809cc7d42e0dc6669ddfc0fb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759ba03b1d6eb45eea2856bb1ffdb33ae7b025809cc7d42e0dc6669ddfc0fb20->enter($__internal_759ba03b1d6eb45eea2856bb1ffdb33ae7b025809cc7d42e0dc6669ddfc0fb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_759ba03b1d6eb45eea2856bb1ffdb33ae7b025809cc7d42e0dc6669ddfc0fb20->leave($__internal_759ba03b1d6eb45eea2856bb1ffdb33ae7b025809cc7d42e0dc6669ddfc0fb20_prof);

        
        $__internal_54e42e799df1bd1af05740b57d68f3b1a992b456c3260bdf3531edae4ffd0f22->leave($__internal_54e42e799df1bd1af05740b57d68f3b1a992b456c3260bdf3531edae4ffd0f22_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
