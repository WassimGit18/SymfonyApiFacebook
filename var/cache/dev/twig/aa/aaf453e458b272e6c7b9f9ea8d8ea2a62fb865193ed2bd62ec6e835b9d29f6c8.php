<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_877ad327a0c73c58cbbe46b5b43ef9e36163914ec3f38df96937b67b4adfd066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32340d5f00a50a0734e6e850fbaec6065b226063f5ea6bfff97add826f763376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32340d5f00a50a0734e6e850fbaec6065b226063f5ea6bfff97add826f763376->enter($__internal_32340d5f00a50a0734e6e850fbaec6065b226063f5ea6bfff97add826f763376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_727717fdff2cab0c5308d2a32762a69f7a45390c0908e7a680261be308c28c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727717fdff2cab0c5308d2a32762a69f7a45390c0908e7a680261be308c28c75->enter($__internal_727717fdff2cab0c5308d2a32762a69f7a45390c0908e7a680261be308c28c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_32340d5f00a50a0734e6e850fbaec6065b226063f5ea6bfff97add826f763376->leave($__internal_32340d5f00a50a0734e6e850fbaec6065b226063f5ea6bfff97add826f763376_prof);

        
        $__internal_727717fdff2cab0c5308d2a32762a69f7a45390c0908e7a680261be308c28c75->leave($__internal_727717fdff2cab0c5308d2a32762a69f7a45390c0908e7a680261be308c28c75_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9adcd3ca602d2c69232e62e3f876ca6363f108faa88dd6949dadf017d1e35444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adcd3ca602d2c69232e62e3f876ca6363f108faa88dd6949dadf017d1e35444->enter($__internal_9adcd3ca602d2c69232e62e3f876ca6363f108faa88dd6949dadf017d1e35444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_10bfd4f0a1e2bbdb73b42b8a14b14f7bf8e28270a70b8720b98a12eaeb15be72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bfd4f0a1e2bbdb73b42b8a14b14f7bf8e28270a70b8720b98a12eaeb15be72->enter($__internal_10bfd4f0a1e2bbdb73b42b8a14b14f7bf8e28270a70b8720b98a12eaeb15be72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_10bfd4f0a1e2bbdb73b42b8a14b14f7bf8e28270a70b8720b98a12eaeb15be72->leave($__internal_10bfd4f0a1e2bbdb73b42b8a14b14f7bf8e28270a70b8720b98a12eaeb15be72_prof);

        
        $__internal_9adcd3ca602d2c69232e62e3f876ca6363f108faa88dd6949dadf017d1e35444->leave($__internal_9adcd3ca602d2c69232e62e3f876ca6363f108faa88dd6949dadf017d1e35444_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b596950b295c83a4542ca868589113bf6e36a1718c3d6fbfba0b0302c6f01c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b596950b295c83a4542ca868589113bf6e36a1718c3d6fbfba0b0302c6f01c43->enter($__internal_b596950b295c83a4542ca868589113bf6e36a1718c3d6fbfba0b0302c6f01c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_97d32b63526add7aa004be1ce4791a1f626f18f70b18dc6b2e69f6e1a89b4c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d32b63526add7aa004be1ce4791a1f626f18f70b18dc6b2e69f6e1a89b4c6b->enter($__internal_97d32b63526add7aa004be1ce4791a1f626f18f70b18dc6b2e69f6e1a89b4c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_97d32b63526add7aa004be1ce4791a1f626f18f70b18dc6b2e69f6e1a89b4c6b->leave($__internal_97d32b63526add7aa004be1ce4791a1f626f18f70b18dc6b2e69f6e1a89b4c6b_prof);

        
        $__internal_b596950b295c83a4542ca868589113bf6e36a1718c3d6fbfba0b0302c6f01c43->leave($__internal_b596950b295c83a4542ca868589113bf6e36a1718c3d6fbfba0b0302c6f01c43_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e69b681dd761afbab59184367f2688e9813229b5929fec4010b33bb7dcacb808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69b681dd761afbab59184367f2688e9813229b5929fec4010b33bb7dcacb808->enter($__internal_e69b681dd761afbab59184367f2688e9813229b5929fec4010b33bb7dcacb808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b425e1b6edb78e67f3acd5ada71810cc016f52f26560adb6d16f1057fe445ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b425e1b6edb78e67f3acd5ada71810cc016f52f26560adb6d16f1057fe445ac7->enter($__internal_b425e1b6edb78e67f3acd5ada71810cc016f52f26560adb6d16f1057fe445ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_b425e1b6edb78e67f3acd5ada71810cc016f52f26560adb6d16f1057fe445ac7->leave($__internal_b425e1b6edb78e67f3acd5ada71810cc016f52f26560adb6d16f1057fe445ac7_prof);

        
        $__internal_e69b681dd761afbab59184367f2688e9813229b5929fec4010b33bb7dcacb808->leave($__internal_e69b681dd761afbab59184367f2688e9813229b5929fec4010b33bb7dcacb808_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_590b9be934f3c9ef773e3203119d435a0f4e2f57cc10c38cbc3600436dad931e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590b9be934f3c9ef773e3203119d435a0f4e2f57cc10c38cbc3600436dad931e->enter($__internal_590b9be934f3c9ef773e3203119d435a0f4e2f57cc10c38cbc3600436dad931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_92523cf745a67ff8f3f786c9e12694189279ccf09ca994e724905bad8c5f6792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92523cf745a67ff8f3f786c9e12694189279ccf09ca994e724905bad8c5f6792->enter($__internal_92523cf745a67ff8f3f786c9e12694189279ccf09ca994e724905bad8c5f6792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_92523cf745a67ff8f3f786c9e12694189279ccf09ca994e724905bad8c5f6792->leave($__internal_92523cf745a67ff8f3f786c9e12694189279ccf09ca994e724905bad8c5f6792_prof);

        
        $__internal_590b9be934f3c9ef773e3203119d435a0f4e2f57cc10c38cbc3600436dad931e->leave($__internal_590b9be934f3c9ef773e3203119d435a0f4e2f57cc10c38cbc3600436dad931e_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_766b207d25b013353788e2c587cf9501d833771f91957269e204e24b0564d9ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766b207d25b013353788e2c587cf9501d833771f91957269e204e24b0564d9ed->enter($__internal_766b207d25b013353788e2c587cf9501d833771f91957269e204e24b0564d9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4172ff330f439bcecbbe80686b63460ab1a220cea2bbf8a5d9ddd9f4f8900b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4172ff330f439bcecbbe80686b63460ab1a220cea2bbf8a5d9ddd9f4f8900b5d->enter($__internal_4172ff330f439bcecbbe80686b63460ab1a220cea2bbf8a5d9ddd9f4f8900b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_4172ff330f439bcecbbe80686b63460ab1a220cea2bbf8a5d9ddd9f4f8900b5d->leave($__internal_4172ff330f439bcecbbe80686b63460ab1a220cea2bbf8a5d9ddd9f4f8900b5d_prof);

        
        $__internal_766b207d25b013353788e2c587cf9501d833771f91957269e204e24b0564d9ed->leave($__internal_766b207d25b013353788e2c587cf9501d833771f91957269e204e24b0564d9ed_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a58dcc68fac2f3ce74e392176988171af87db3aa7a1b7d3342e5c99e405ef850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58dcc68fac2f3ce74e392176988171af87db3aa7a1b7d3342e5c99e405ef850->enter($__internal_a58dcc68fac2f3ce74e392176988171af87db3aa7a1b7d3342e5c99e405ef850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ea025c1fc3229c6cdf5335afa0a777523238e65f223042ed337a6c1fd4390a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea025c1fc3229c6cdf5335afa0a777523238e65f223042ed337a6c1fd4390a3e->enter($__internal_ea025c1fc3229c6cdf5335afa0a777523238e65f223042ed337a6c1fd4390a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_ea025c1fc3229c6cdf5335afa0a777523238e65f223042ed337a6c1fd4390a3e->leave($__internal_ea025c1fc3229c6cdf5335afa0a777523238e65f223042ed337a6c1fd4390a3e_prof);

        
        $__internal_a58dcc68fac2f3ce74e392176988171af87db3aa7a1b7d3342e5c99e405ef850->leave($__internal_a58dcc68fac2f3ce74e392176988171af87db3aa7a1b7d3342e5c99e405ef850_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a4a5bf81e5f7d88884dc51c01b810d0ef204b3995e1a68245c1aadbc3654f140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a5bf81e5f7d88884dc51c01b810d0ef204b3995e1a68245c1aadbc3654f140->enter($__internal_a4a5bf81e5f7d88884dc51c01b810d0ef204b3995e1a68245c1aadbc3654f140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8dd617de0a6e06653654ae51b0b0c321719854ffd16203ec925d94d6e666f5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd617de0a6e06653654ae51b0b0c321719854ffd16203ec925d94d6e666f5f8->enter($__internal_8dd617de0a6e06653654ae51b0b0c321719854ffd16203ec925d94d6e666f5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_8dd617de0a6e06653654ae51b0b0c321719854ffd16203ec925d94d6e666f5f8->leave($__internal_8dd617de0a6e06653654ae51b0b0c321719854ffd16203ec925d94d6e666f5f8_prof);

        
        $__internal_a4a5bf81e5f7d88884dc51c01b810d0ef204b3995e1a68245c1aadbc3654f140->leave($__internal_a4a5bf81e5f7d88884dc51c01b810d0ef204b3995e1a68245c1aadbc3654f140_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4c1adc81ce6d493e0e2dca93367b2b2ee712e271478f6351f47adf7477a4aa76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1adc81ce6d493e0e2dca93367b2b2ee712e271478f6351f47adf7477a4aa76->enter($__internal_4c1adc81ce6d493e0e2dca93367b2b2ee712e271478f6351f47adf7477a4aa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0f7763dfcf97790b48b496e85e4e8067acaf7d340c4cbd57d2e5cf98f6521590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7763dfcf97790b48b496e85e4e8067acaf7d340c4cbd57d2e5cf98f6521590->enter($__internal_0f7763dfcf97790b48b496e85e4e8067acaf7d340c4cbd57d2e5cf98f6521590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_0f7763dfcf97790b48b496e85e4e8067acaf7d340c4cbd57d2e5cf98f6521590->leave($__internal_0f7763dfcf97790b48b496e85e4e8067acaf7d340c4cbd57d2e5cf98f6521590_prof);

        
        $__internal_4c1adc81ce6d493e0e2dca93367b2b2ee712e271478f6351f47adf7477a4aa76->leave($__internal_4c1adc81ce6d493e0e2dca93367b2b2ee712e271478f6351f47adf7477a4aa76_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
