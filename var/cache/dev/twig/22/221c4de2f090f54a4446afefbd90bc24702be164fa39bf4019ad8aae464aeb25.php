<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_c119d9aeb7947f57ec1ab7bb2bb00e2fb0b3a3bf536927d90485a304213f7519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9054316a6a421e7089a9cacbc56d3479424638df5572469c50261686c478603e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9054316a6a421e7089a9cacbc56d3479424638df5572469c50261686c478603e->enter($__internal_9054316a6a421e7089a9cacbc56d3479424638df5572469c50261686c478603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_d6628f35f9170f4a0304b734561e6b7f22b1e8ef4316088c9d6680f494fea980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6628f35f9170f4a0304b734561e6b7f22b1e8ef4316088c9d6680f494fea980->enter($__internal_d6628f35f9170f4a0304b734561e6b7f22b1e8ef4316088c9d6680f494fea980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_9054316a6a421e7089a9cacbc56d3479424638df5572469c50261686c478603e->leave($__internal_9054316a6a421e7089a9cacbc56d3479424638df5572469c50261686c478603e_prof);

        
        $__internal_d6628f35f9170f4a0304b734561e6b7f22b1e8ef4316088c9d6680f494fea980->leave($__internal_d6628f35f9170f4a0304b734561e6b7f22b1e8ef4316088c9d6680f494fea980_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_2441d98a96248b3a85e52566cecac5917ddc98fd42dd793b9c689d362addd22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2441d98a96248b3a85e52566cecac5917ddc98fd42dd793b9c689d362addd22a->enter($__internal_2441d98a96248b3a85e52566cecac5917ddc98fd42dd793b9c689d362addd22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_b038f6d09ab7cd0e95bf29c06b54771e10263d9fddfb62d76026d5815b41b0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b038f6d09ab7cd0e95bf29c06b54771e10263d9fddfb62d76026d5815b41b0f9->enter($__internal_b038f6d09ab7cd0e95bf29c06b54771e10263d9fddfb62d76026d5815b41b0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_b038f6d09ab7cd0e95bf29c06b54771e10263d9fddfb62d76026d5815b41b0f9->leave($__internal_b038f6d09ab7cd0e95bf29c06b54771e10263d9fddfb62d76026d5815b41b0f9_prof);

        
        $__internal_2441d98a96248b3a85e52566cecac5917ddc98fd42dd793b9c689d362addd22a->leave($__internal_2441d98a96248b3a85e52566cecac5917ddc98fd42dd793b9c689d362addd22a_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 8,  37 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
    </body>
</html>
", "HWIOAuthBundle::layout.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\hwi\\oauth-bundle/Resources/views/layout.html.twig");
    }
}
