<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b6f8354f995d08011ddb07eb8aad4caa2ccbe4044937f55f2ace66100036c544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19b5dc86b62518d54e11c53863ff275bcd450c283d96516c634641f844d0d88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b5dc86b62518d54e11c53863ff275bcd450c283d96516c634641f844d0d88e->enter($__internal_19b5dc86b62518d54e11c53863ff275bcd450c283d96516c634641f844d0d88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_93cd3bfce2d78ca31667d70739ad4acbef508faf52478ba07e5ec77ad000d830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cd3bfce2d78ca31667d70739ad4acbef508faf52478ba07e5ec77ad000d830->enter($__internal_93cd3bfce2d78ca31667d70739ad4acbef508faf52478ba07e5ec77ad000d830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_19b5dc86b62518d54e11c53863ff275bcd450c283d96516c634641f844d0d88e->leave($__internal_19b5dc86b62518d54e11c53863ff275bcd450c283d96516c634641f844d0d88e_prof);

        
        $__internal_93cd3bfce2d78ca31667d70739ad4acbef508faf52478ba07e5ec77ad000d830->leave($__internal_93cd3bfce2d78ca31667d70739ad4acbef508faf52478ba07e5ec77ad000d830_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10cf713c80850768f2c625731acfaf3a439e6d1790a32afd8a901ed37d65bf58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10cf713c80850768f2c625731acfaf3a439e6d1790a32afd8a901ed37d65bf58->enter($__internal_10cf713c80850768f2c625731acfaf3a439e6d1790a32afd8a901ed37d65bf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcf40495f3e7c0b05b8340926a8baf74de257915b5335e22a07d8afc88800a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf40495f3e7c0b05b8340926a8baf74de257915b5335e22a07d8afc88800a26->enter($__internal_dcf40495f3e7c0b05b8340926a8baf74de257915b5335e22a07d8afc88800a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dcf40495f3e7c0b05b8340926a8baf74de257915b5335e22a07d8afc88800a26->leave($__internal_dcf40495f3e7c0b05b8340926a8baf74de257915b5335e22a07d8afc88800a26_prof);

        
        $__internal_10cf713c80850768f2c625731acfaf3a439e6d1790a32afd8a901ed37d65bf58->leave($__internal_10cf713c80850768f2c625731acfaf3a439e6d1790a32afd8a901ed37d65bf58_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_eda4ac9366181fa28be52b0a2f0fc43b6d10c4a65bb0ffa6559aa02419051f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda4ac9366181fa28be52b0a2f0fc43b6d10c4a65bb0ffa6559aa02419051f11->enter($__internal_eda4ac9366181fa28be52b0a2f0fc43b6d10c4a65bb0ffa6559aa02419051f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0666d9cfd1d5155447b71fed6e317a5aa8fe35d6189538d5af2f88ac70cf017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0666d9cfd1d5155447b71fed6e317a5aa8fe35d6189538d5af2f88ac70cf017->enter($__internal_d0666d9cfd1d5155447b71fed6e317a5aa8fe35d6189538d5af2f88ac70cf017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d0666d9cfd1d5155447b71fed6e317a5aa8fe35d6189538d5af2f88ac70cf017->leave($__internal_d0666d9cfd1d5155447b71fed6e317a5aa8fe35d6189538d5af2f88ac70cf017_prof);

        
        $__internal_eda4ac9366181fa28be52b0a2f0fc43b6d10c4a65bb0ffa6559aa02419051f11->leave($__internal_eda4ac9366181fa28be52b0a2f0fc43b6d10c4a65bb0ffa6559aa02419051f11_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe5b2f5f9e961ce65ab9fda09a30bdaec7ca170f73a43fcca9a93d63dfcad27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe5b2f5f9e961ce65ab9fda09a30bdaec7ca170f73a43fcca9a93d63dfcad27->enter($__internal_7fe5b2f5f9e961ce65ab9fda09a30bdaec7ca170f73a43fcca9a93d63dfcad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ade0dcfb263c0e5f202bec4c65d81defca849c69221ace0d9139e15bb85d9ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade0dcfb263c0e5f202bec4c65d81defca849c69221ace0d9139e15bb85d9ad4->enter($__internal_ade0dcfb263c0e5f202bec4c65d81defca849c69221ace0d9139e15bb85d9ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ade0dcfb263c0e5f202bec4c65d81defca849c69221ace0d9139e15bb85d9ad4->leave($__internal_ade0dcfb263c0e5f202bec4c65d81defca849c69221ace0d9139e15bb85d9ad4_prof);

        
        $__internal_7fe5b2f5f9e961ce65ab9fda09a30bdaec7ca170f73a43fcca9a93d63dfcad27->leave($__internal_7fe5b2f5f9e961ce65ab9fda09a30bdaec7ca170f73a43fcca9a93d63dfcad27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
