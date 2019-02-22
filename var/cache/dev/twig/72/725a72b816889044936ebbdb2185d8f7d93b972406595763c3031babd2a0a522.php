<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_1cb5742ba2491cec1f3295876f11c560746b4e2709930338f5c7e262a7443d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1d519c07dec7a388ea919f0d756e66926d60c372cb1ba800bee2b2b1d3bc604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d519c07dec7a388ea919f0d756e66926d60c372cb1ba800bee2b2b1d3bc604->enter($__internal_c1d519c07dec7a388ea919f0d756e66926d60c372cb1ba800bee2b2b1d3bc604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_45f3d02579f609ef2b150165b68fed8db6f4523b22495fe32a9b0cb584c1340c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f3d02579f609ef2b150165b68fed8db6f4523b22495fe32a9b0cb584c1340c->enter($__internal_45f3d02579f609ef2b150165b68fed8db6f4523b22495fe32a9b0cb584c1340c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d519c07dec7a388ea919f0d756e66926d60c372cb1ba800bee2b2b1d3bc604->leave($__internal_c1d519c07dec7a388ea919f0d756e66926d60c372cb1ba800bee2b2b1d3bc604_prof);

        
        $__internal_45f3d02579f609ef2b150165b68fed8db6f4523b22495fe32a9b0cb584c1340c->leave($__internal_45f3d02579f609ef2b150165b68fed8db6f4523b22495fe32a9b0cb584c1340c_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_4f2463d8675ba926e5f2c772fd05a047a4bdf4b84a3a5d34708250edcb73a72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2463d8675ba926e5f2c772fd05a047a4bdf4b84a3a5d34708250edcb73a72f->enter($__internal_4f2463d8675ba926e5f2c772fd05a047a4bdf4b84a3a5d34708250edcb73a72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_5fa80ec9f18679c5da40809cf8ff10cbc0d71981e0b9a5606a59874923387d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa80ec9f18679c5da40809cf8ff10cbc0d71981e0b9a5606a59874923387d33->enter($__internal_5fa80ec9f18679c5da40809cf8ff10cbc0d71981e0b9a5606a59874923387d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_5fa80ec9f18679c5da40809cf8ff10cbc0d71981e0b9a5606a59874923387d33->leave($__internal_5fa80ec9f18679c5da40809cf8ff10cbc0d71981e0b9a5606a59874923387d33_prof);

        
        $__internal_4f2463d8675ba926e5f2c772fd05a047a4bdf4b84a3a5d34708250edcb73a72f->leave($__internal_4f2463d8675ba926e5f2c772fd05a047a4bdf4b84a3a5d34708250edcb73a72f_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration_success.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\hwi\\oauth-bundle/Resources/views/Connect/registration_success.html.twig");
    }
}
