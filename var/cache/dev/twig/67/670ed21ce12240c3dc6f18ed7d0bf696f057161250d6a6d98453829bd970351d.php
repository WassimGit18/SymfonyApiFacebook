<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_feaa7c12e4bc78fa55c5c071d79a99e783baf400badd2f371bad6e2c6c87bf90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ad6a11b7617ca9916a31b18515c605c67ca9b9369989bfc2815abc6f55d4960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad6a11b7617ca9916a31b18515c605c67ca9b9369989bfc2815abc6f55d4960->enter($__internal_8ad6a11b7617ca9916a31b18515c605c67ca9b9369989bfc2815abc6f55d4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_298cc7e9f02a9dd3dcb6c7771094fda15a316707f2ab793f695ae98c0ce4b862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298cc7e9f02a9dd3dcb6c7771094fda15a316707f2ab793f695ae98c0ce4b862->enter($__internal_298cc7e9f02a9dd3dcb6c7771094fda15a316707f2ab793f695ae98c0ce4b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_8ad6a11b7617ca9916a31b18515c605c67ca9b9369989bfc2815abc6f55d4960->leave($__internal_8ad6a11b7617ca9916a31b18515c605c67ca9b9369989bfc2815abc6f55d4960_prof);

        
        $__internal_298cc7e9f02a9dd3dcb6c7771094fda15a316707f2ab793f695ae98c0ce4b862->leave($__internal_298cc7e9f02a9dd3dcb6c7771094fda15a316707f2ab793f695ae98c0ce4b862_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\Work\\Symf\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
