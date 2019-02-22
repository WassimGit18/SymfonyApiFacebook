<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_ddea582ccc8bce147c0450f7b174d88fbb44246827bc94c9ca2a0d0458bb2b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
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
        $__internal_05f2ef7df35e9c17f799ad46ccd367fe670e9002abd633da1a187e6bdc2b96f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f2ef7df35e9c17f799ad46ccd367fe670e9002abd633da1a187e6bdc2b96f4->enter($__internal_05f2ef7df35e9c17f799ad46ccd367fe670e9002abd633da1a187e6bdc2b96f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_7de34b389bd94d3e8939a0de546be23298976a8e268b2d1f0c8ba4c0b279f65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de34b389bd94d3e8939a0de546be23298976a8e268b2d1f0c8ba4c0b279f65b->enter($__internal_7de34b389bd94d3e8939a0de546be23298976a8e268b2d1f0c8ba4c0b279f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f2ef7df35e9c17f799ad46ccd367fe670e9002abd633da1a187e6bdc2b96f4->leave($__internal_05f2ef7df35e9c17f799ad46ccd367fe670e9002abd633da1a187e6bdc2b96f4_prof);

        
        $__internal_7de34b389bd94d3e8939a0de546be23298976a8e268b2d1f0c8ba4c0b279f65b->leave($__internal_7de34b389bd94d3e8939a0de546be23298976a8e268b2d1f0c8ba4c0b279f65b_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_214f09eb60a67086f3d970cecd4b49d5b41d062e209ac0104f91d940f090d0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214f09eb60a67086f3d970cecd4b49d5b41d062e209ac0104f91d940f090d0c4->enter($__internal_214f09eb60a67086f3d970cecd4b49d5b41d062e209ac0104f91d940f090d0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_dcb33b5c064a9b32dee9139dda243c1a23aed138bb967013e0c26f67f3fc4031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb33b5c064a9b32dee9139dda243c1a23aed138bb967013e0c26f67f3fc4031->enter($__internal_dcb33b5c064a9b32dee9139dda243c1a23aed138bb967013e0c26f67f3fc4031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && ($context["error"] ?? $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dcb33b5c064a9b32dee9139dda243c1a23aed138bb967013e0c26f67f3fc4031->leave($__internal_dcb33b5c064a9b32dee9139dda243c1a23aed138bb967013e0c26f67f3fc4031_prof);

        
        $__internal_214f09eb60a67086f3d970cecd4b49d5b41d062e209ac0104f91d940f090d0c4->leave($__internal_214f09eb60a67086f3d970cecd4b49d5b41d062e209ac0104f91d940f090d0c4_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\hwi\\oauth-bundle/Resources/views/Connect/login.html.twig");
    }
}
