<?php

/* base.html.twig */
class __TwigTemplate_01c3cbe62106eed3794e26336424e4bdd78fee0152e27e37c91df027473afca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ad0d0a8f0f0ce8521eb539fafc46ef81951b1aeeaed29b2c86ab416ce1e0786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad0d0a8f0f0ce8521eb539fafc46ef81951b1aeeaed29b2c86ab416ce1e0786->enter($__internal_2ad0d0a8f0f0ce8521eb539fafc46ef81951b1aeeaed29b2c86ab416ce1e0786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_faf9a08bc57a1f39812f8dc9c59c8b76ca1381807c1eeed1019c49ce63a4ef1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf9a08bc57a1f39812f8dc9c59c8b76ca1381807c1eeed1019c49ce63a4ef1e->enter($__internal_faf9a08bc57a1f39812f8dc9c59c8b76ca1381807c1eeed1019c49ce63a4ef1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_2ad0d0a8f0f0ce8521eb539fafc46ef81951b1aeeaed29b2c86ab416ce1e0786->leave($__internal_2ad0d0a8f0f0ce8521eb539fafc46ef81951b1aeeaed29b2c86ab416ce1e0786_prof);

        
        $__internal_faf9a08bc57a1f39812f8dc9c59c8b76ca1381807c1eeed1019c49ce63a4ef1e->leave($__internal_faf9a08bc57a1f39812f8dc9c59c8b76ca1381807c1eeed1019c49ce63a4ef1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21d541a26b3fed8a3ed35bf036080d32dba6119a427d0e545a7bf7c13232f554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d541a26b3fed8a3ed35bf036080d32dba6119a427d0e545a7bf7c13232f554->enter($__internal_21d541a26b3fed8a3ed35bf036080d32dba6119a427d0e545a7bf7c13232f554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cca839ba9aed977cf3a9741ae50e1d025e29312a562b98d5465f925a36a3d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cca839ba9aed977cf3a9741ae50e1d025e29312a562b98d5465f925a36a3d53->enter($__internal_3cca839ba9aed977cf3a9741ae50e1d025e29312a562b98d5465f925a36a3d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3cca839ba9aed977cf3a9741ae50e1d025e29312a562b98d5465f925a36a3d53->leave($__internal_3cca839ba9aed977cf3a9741ae50e1d025e29312a562b98d5465f925a36a3d53_prof);

        
        $__internal_21d541a26b3fed8a3ed35bf036080d32dba6119a427d0e545a7bf7c13232f554->leave($__internal_21d541a26b3fed8a3ed35bf036080d32dba6119a427d0e545a7bf7c13232f554_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c9a79e791cb7e0964dd09138560bedf5e7eb6e71c2812faedfb544455f3231d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9a79e791cb7e0964dd09138560bedf5e7eb6e71c2812faedfb544455f3231d->enter($__internal_6c9a79e791cb7e0964dd09138560bedf5e7eb6e71c2812faedfb544455f3231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4ef0879f2327dd871e97e4f9315d8786f18377b25f0d7c16643f6e30f3142a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef0879f2327dd871e97e4f9315d8786f18377b25f0d7c16643f6e30f3142a03->enter($__internal_4ef0879f2327dd871e97e4f9315d8786f18377b25f0d7c16643f6e30f3142a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ef0879f2327dd871e97e4f9315d8786f18377b25f0d7c16643f6e30f3142a03->leave($__internal_4ef0879f2327dd871e97e4f9315d8786f18377b25f0d7c16643f6e30f3142a03_prof);

        
        $__internal_6c9a79e791cb7e0964dd09138560bedf5e7eb6e71c2812faedfb544455f3231d->leave($__internal_6c9a79e791cb7e0964dd09138560bedf5e7eb6e71c2812faedfb544455f3231d_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd7395d8c2483ccde6eac3fa8b6df7112bf8349e5ae6638ac0de91bb1e89e778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7395d8c2483ccde6eac3fa8b6df7112bf8349e5ae6638ac0de91bb1e89e778->enter($__internal_cd7395d8c2483ccde6eac3fa8b6df7112bf8349e5ae6638ac0de91bb1e89e778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37965961ee8be7b19a1c80f89dd03282ced2c412e6d1b38cf2f1f524060d5a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37965961ee8be7b19a1c80f89dd03282ced2c412e6d1b38cf2f1f524060d5a1b->enter($__internal_37965961ee8be7b19a1c80f89dd03282ced2c412e6d1b38cf2f1f524060d5a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37965961ee8be7b19a1c80f89dd03282ced2c412e6d1b38cf2f1f524060d5a1b->leave($__internal_37965961ee8be7b19a1c80f89dd03282ced2c412e6d1b38cf2f1f524060d5a1b_prof);

        
        $__internal_cd7395d8c2483ccde6eac3fa8b6df7112bf8349e5ae6638ac0de91bb1e89e778->leave($__internal_cd7395d8c2483ccde6eac3fa8b6df7112bf8349e5ae6638ac0de91bb1e89e778_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2099e0db4cec6c69633266b482336df6fa1e829f6d15535e86361fe1f0591adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2099e0db4cec6c69633266b482336df6fa1e829f6d15535e86361fe1f0591adb->enter($__internal_2099e0db4cec6c69633266b482336df6fa1e829f6d15535e86361fe1f0591adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f7e573ae5c7c4ba9be569a54e06cc20e15a49875c972b09465e036db703ce3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e573ae5c7c4ba9be569a54e06cc20e15a49875c972b09465e036db703ce3c2->enter($__internal_f7e573ae5c7c4ba9be569a54e06cc20e15a49875c972b09465e036db703ce3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7e573ae5c7c4ba9be569a54e06cc20e15a49875c972b09465e036db703ce3c2->leave($__internal_f7e573ae5c7c4ba9be569a54e06cc20e15a49875c972b09465e036db703ce3c2_prof);

        
        $__internal_2099e0db4cec6c69633266b482336df6fa1e829f6d15535e86361fe1f0591adb->leave($__internal_2099e0db4cec6c69633266b482336df6fa1e829f6d15535e86361fe1f0591adb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 15,  104 => 14,  87 => 10,  69 => 5,  57 => 16,  54 => 15,  52 => 14,  45 => 11,  43 => 10,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\app\\Resources\\views\\base.html.twig");
    }
}
