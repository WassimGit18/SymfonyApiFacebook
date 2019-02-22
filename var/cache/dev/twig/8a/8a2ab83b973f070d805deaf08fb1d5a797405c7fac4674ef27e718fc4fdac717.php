<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9bcaac0ca0139bab93b0d0a8d1859f2b453bb9edcf2a807131acb99b293dd39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cc16e92e4ff3114eadd946a14b5e79898c7f92191a9fcfc5e32aa75c4060d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc16e92e4ff3114eadd946a14b5e79898c7f92191a9fcfc5e32aa75c4060d29->enter($__internal_0cc16e92e4ff3114eadd946a14b5e79898c7f92191a9fcfc5e32aa75c4060d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b9bbbda9aa034ff18b03feb3a7cf246e80d52a88e8f9e26c5dbfe75a716422db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bbbda9aa034ff18b03feb3a7cf246e80d52a88e8f9e26c5dbfe75a716422db->enter($__internal_b9bbbda9aa034ff18b03feb3a7cf246e80d52a88e8f9e26c5dbfe75a716422db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cc16e92e4ff3114eadd946a14b5e79898c7f92191a9fcfc5e32aa75c4060d29->leave($__internal_0cc16e92e4ff3114eadd946a14b5e79898c7f92191a9fcfc5e32aa75c4060d29_prof);

        
        $__internal_b9bbbda9aa034ff18b03feb3a7cf246e80d52a88e8f9e26c5dbfe75a716422db->leave($__internal_b9bbbda9aa034ff18b03feb3a7cf246e80d52a88e8f9e26c5dbfe75a716422db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0c11edf7e6d3bac09a16e07938919652e24a4fff6275c2d4008771a6ec88da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c11edf7e6d3bac09a16e07938919652e24a4fff6275c2d4008771a6ec88da4->enter($__internal_c0c11edf7e6d3bac09a16e07938919652e24a4fff6275c2d4008771a6ec88da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc827bece3948f787e8f1d3989dcc8b4e6fa152d3636830b38f4407e4b0a4de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc827bece3948f787e8f1d3989dcc8b4e6fa152d3636830b38f4407e4b0a4de9->enter($__internal_bc827bece3948f787e8f1d3989dcc8b4e6fa152d3636830b38f4407e4b0a4de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_bc827bece3948f787e8f1d3989dcc8b4e6fa152d3636830b38f4407e4b0a4de9->leave($__internal_bc827bece3948f787e8f1d3989dcc8b4e6fa152d3636830b38f4407e4b0a4de9_prof);

        
        $__internal_c0c11edf7e6d3bac09a16e07938919652e24a4fff6275c2d4008771a6ec88da4->leave($__internal_c0c11edf7e6d3bac09a16e07938919652e24a4fff6275c2d4008771a6ec88da4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f17860dcdf36a629292abd1f6baf5caafb46aa5d7b0e654f9302a730ad8d6262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17860dcdf36a629292abd1f6baf5caafb46aa5d7b0e654f9302a730ad8d6262->enter($__internal_f17860dcdf36a629292abd1f6baf5caafb46aa5d7b0e654f9302a730ad8d6262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96e706abdf1b9377f6d6817c1bb197277aaf0e1fa0ef6a255d5786e4e2a170c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e706abdf1b9377f6d6817c1bb197277aaf0e1fa0ef6a255d5786e4e2a170c5->enter($__internal_96e706abdf1b9377f6d6817c1bb197277aaf0e1fa0ef6a255d5786e4e2a170c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96e706abdf1b9377f6d6817c1bb197277aaf0e1fa0ef6a255d5786e4e2a170c5->leave($__internal_96e706abdf1b9377f6d6817c1bb197277aaf0e1fa0ef6a255d5786e4e2a170c5_prof);

        
        $__internal_f17860dcdf36a629292abd1f6baf5caafb46aa5d7b0e654f9302a730ad8d6262->leave($__internal_f17860dcdf36a629292abd1f6baf5caafb46aa5d7b0e654f9302a730ad8d6262_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4004e058014a3cb4f4d03e62b26b09b8c50072788fbc6863a184725056656981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4004e058014a3cb4f4d03e62b26b09b8c50072788fbc6863a184725056656981->enter($__internal_4004e058014a3cb4f4d03e62b26b09b8c50072788fbc6863a184725056656981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e370c547166df9f0dc9de2aba4c524148f2d3ab36d65c6de5e76597d00b8f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e370c547166df9f0dc9de2aba4c524148f2d3ab36d65c6de5e76597d00b8f90->enter($__internal_0e370c547166df9f0dc9de2aba4c524148f2d3ab36d65c6de5e76597d00b8f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0e370c547166df9f0dc9de2aba4c524148f2d3ab36d65c6de5e76597d00b8f90->leave($__internal_0e370c547166df9f0dc9de2aba4c524148f2d3ab36d65c6de5e76597d00b8f90_prof);

        
        $__internal_4004e058014a3cb4f4d03e62b26b09b8c50072788fbc6863a184725056656981->leave($__internal_4004e058014a3cb4f4d03e62b26b09b8c50072788fbc6863a184725056656981_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
