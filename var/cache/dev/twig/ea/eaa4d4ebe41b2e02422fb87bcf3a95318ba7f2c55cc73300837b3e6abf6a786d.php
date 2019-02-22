<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_7db7e2e3b8038165be65b2004a83891e4f1b63323e5120637cbd66801ead558e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58d83d5605957c5b1463b14655fa0d8fb5bf271b9ab3d36a9a6c788e81c1d177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d83d5605957c5b1463b14655fa0d8fb5bf271b9ab3d36a9a6c788e81c1d177->enter($__internal_58d83d5605957c5b1463b14655fa0d8fb5bf271b9ab3d36a9a6c788e81c1d177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_a9d11e30e8b7fa73dc4f5b9fc275b26ae0e8656b776bbef2f1dcb6391aa945c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d11e30e8b7fa73dc4f5b9fc275b26ae0e8656b776bbef2f1dcb6391aa945c1->enter($__internal_a9d11e30e8b7fa73dc4f5b9fc275b26ae0e8656b776bbef2f1dcb6391aa945c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_58d83d5605957c5b1463b14655fa0d8fb5bf271b9ab3d36a9a6c788e81c1d177->leave($__internal_58d83d5605957c5b1463b14655fa0d8fb5bf271b9ab3d36a9a6c788e81c1d177_prof);

        
        $__internal_a9d11e30e8b7fa73dc4f5b9fc275b26ae0e8656b776bbef2f1dcb6391aa945c1->leave($__internal_a9d11e30e8b7fa73dc4f5b9fc275b26ae0e8656b776bbef2f1dcb6391aa945c1_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d546431931bfbeada371ef738cd216697d76847c16936e92559b5d03e17dcc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d546431931bfbeada371ef738cd216697d76847c16936e92559b5d03e17dcc61->enter($__internal_d546431931bfbeada371ef738cd216697d76847c16936e92559b5d03e17dcc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0e4e54e8f4daedb70bcec4c6f19b2e45ea8a831ce6adc02d1230f8cd812536fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4e54e8f4daedb70bcec4c6f19b2e45ea8a831ce6adc02d1230f8cd812536fb->enter($__internal_0e4e54e8f4daedb70bcec4c6f19b2e45ea8a831ce6adc02d1230f8cd812536fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_0e4e54e8f4daedb70bcec4c6f19b2e45ea8a831ce6adc02d1230f8cd812536fb->leave($__internal_0e4e54e8f4daedb70bcec4c6f19b2e45ea8a831ce6adc02d1230f8cd812536fb_prof);

        
        $__internal_d546431931bfbeada371ef738cd216697d76847c16936e92559b5d03e17dcc61->leave($__internal_d546431931bfbeada371ef738cd216697d76847c16936e92559b5d03e17dcc61_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1b7da031caba6b83200f1794d9c77a776610bae7f379dbebdb74e613e19b7fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7da031caba6b83200f1794d9c77a776610bae7f379dbebdb74e613e19b7fde->enter($__internal_1b7da031caba6b83200f1794d9c77a776610bae7f379dbebdb74e613e19b7fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ada9eedc0f5307bdc036e15827a2a28413e557aa673947307bcceef45d7790e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada9eedc0f5307bdc036e15827a2a28413e557aa673947307bcceef45d7790e1->enter($__internal_ada9eedc0f5307bdc036e15827a2a28413e557aa673947307bcceef45d7790e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_ada9eedc0f5307bdc036e15827a2a28413e557aa673947307bcceef45d7790e1->leave($__internal_ada9eedc0f5307bdc036e15827a2a28413e557aa673947307bcceef45d7790e1_prof);

        
        $__internal_1b7da031caba6b83200f1794d9c77a776610bae7f379dbebdb74e613e19b7fde->leave($__internal_1b7da031caba6b83200f1794d9c77a776610bae7f379dbebdb74e613e19b7fde_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9e8b826191ed1f2e6323bdb8de4d5e7b18d7131d0a25061a268a886d277efedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8b826191ed1f2e6323bdb8de4d5e7b18d7131d0a25061a268a886d277efedd->enter($__internal_9e8b826191ed1f2e6323bdb8de4d5e7b18d7131d0a25061a268a886d277efedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3f3b8a4652205788a81565bce48f8c3bd76a96fc3bb9f86a4a91cd3aef22d2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3b8a4652205788a81565bce48f8c3bd76a96fc3bb9f86a4a91cd3aef22d2bc->enter($__internal_3f3b8a4652205788a81565bce48f8c3bd76a96fc3bb9f86a4a91cd3aef22d2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_3f3b8a4652205788a81565bce48f8c3bd76a96fc3bb9f86a4a91cd3aef22d2bc->leave($__internal_3f3b8a4652205788a81565bce48f8c3bd76a96fc3bb9f86a4a91cd3aef22d2bc_prof);

        
        $__internal_9e8b826191ed1f2e6323bdb8de4d5e7b18d7131d0a25061a268a886d277efedd->leave($__internal_9e8b826191ed1f2e6323bdb8de4d5e7b18d7131d0a25061a268a886d277efedd_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f8ae3a64ae0b89cf60790df233d507a5ecd44d2c52f29b1141747a8a6dac97a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ae3a64ae0b89cf60790df233d507a5ecd44d2c52f29b1141747a8a6dac97a6->enter($__internal_f8ae3a64ae0b89cf60790df233d507a5ecd44d2c52f29b1141747a8a6dac97a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1b88e071c725de5134600105c8811fb06cbab96be4b48ee32a35e1307d77f2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b88e071c725de5134600105c8811fb06cbab96be4b48ee32a35e1307d77f2bd->enter($__internal_1b88e071c725de5134600105c8811fb06cbab96be4b48ee32a35e1307d77f2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_1b88e071c725de5134600105c8811fb06cbab96be4b48ee32a35e1307d77f2bd->leave($__internal_1b88e071c725de5134600105c8811fb06cbab96be4b48ee32a35e1307d77f2bd_prof);

        
        $__internal_f8ae3a64ae0b89cf60790df233d507a5ecd44d2c52f29b1141747a8a6dac97a6->leave($__internal_f8ae3a64ae0b89cf60790df233d507a5ecd44d2c52f29b1141747a8a6dac97a6_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_918eb89d32fd480bfd180c33e3556c0dcba86295d6faa8c52ce82d9043c2f081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918eb89d32fd480bfd180c33e3556c0dcba86295d6faa8c52ce82d9043c2f081->enter($__internal_918eb89d32fd480bfd180c33e3556c0dcba86295d6faa8c52ce82d9043c2f081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c1252e99a9175fe9c6cad2f46687c46da76919b1b7ae998566f33563920b0a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1252e99a9175fe9c6cad2f46687c46da76919b1b7ae998566f33563920b0a23->enter($__internal_c1252e99a9175fe9c6cad2f46687c46da76919b1b7ae998566f33563920b0a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_c1252e99a9175fe9c6cad2f46687c46da76919b1b7ae998566f33563920b0a23->leave($__internal_c1252e99a9175fe9c6cad2f46687c46da76919b1b7ae998566f33563920b0a23_prof);

        
        $__internal_918eb89d32fd480bfd180c33e3556c0dcba86295d6faa8c52ce82d9043c2f081->leave($__internal_918eb89d32fd480bfd180c33e3556c0dcba86295d6faa8c52ce82d9043c2f081_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7c177bc5e2d631110de848a96e80d1a39544ce85ec5c5554be197fc2eef8ed57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c177bc5e2d631110de848a96e80d1a39544ce85ec5c5554be197fc2eef8ed57->enter($__internal_7c177bc5e2d631110de848a96e80d1a39544ce85ec5c5554be197fc2eef8ed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_594778f3fb44b66e70fb90a95ead3e288d88f97826ba968b1f7a43021f4b0d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594778f3fb44b66e70fb90a95ead3e288d88f97826ba968b1f7a43021f4b0d15->enter($__internal_594778f3fb44b66e70fb90a95ead3e288d88f97826ba968b1f7a43021f4b0d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_594778f3fb44b66e70fb90a95ead3e288d88f97826ba968b1f7a43021f4b0d15->leave($__internal_594778f3fb44b66e70fb90a95ead3e288d88f97826ba968b1f7a43021f4b0d15_prof);

        
        $__internal_7c177bc5e2d631110de848a96e80d1a39544ce85ec5c5554be197fc2eef8ed57->leave($__internal_7c177bc5e2d631110de848a96e80d1a39544ce85ec5c5554be197fc2eef8ed57_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c0a7ff77832f47a4cbbd687cf89c12f5d5faa3d4b547e0e047f3f8266748cc0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a7ff77832f47a4cbbd687cf89c12f5d5faa3d4b547e0e047f3f8266748cc0e->enter($__internal_c0a7ff77832f47a4cbbd687cf89c12f5d5faa3d4b547e0e047f3f8266748cc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_09c70630d66d64200abea72e492d7324b7d2ecb322677d695f392c953af2cbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c70630d66d64200abea72e492d7324b7d2ecb322677d695f392c953af2cbd4->enter($__internal_09c70630d66d64200abea72e492d7324b7d2ecb322677d695f392c953af2cbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_09c70630d66d64200abea72e492d7324b7d2ecb322677d695f392c953af2cbd4->leave($__internal_09c70630d66d64200abea72e492d7324b7d2ecb322677d695f392c953af2cbd4_prof);

        
        $__internal_c0a7ff77832f47a4cbbd687cf89c12f5d5faa3d4b547e0e047f3f8266748cc0e->leave($__internal_c0a7ff77832f47a4cbbd687cf89c12f5d5faa3d4b547e0e047f3f8266748cc0e_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_8fa92b093e32098da691dc8b4053da052138c107a40b5183f03bdedddedbc19a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa92b093e32098da691dc8b4053da052138c107a40b5183f03bdedddedbc19a->enter($__internal_8fa92b093e32098da691dc8b4053da052138c107a40b5183f03bdedddedbc19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_d7280f794c10060a88295cef67ab172b8a2d1b4fb0123b9636111c6f3b706083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7280f794c10060a88295cef67ab172b8a2d1b4fb0123b9636111c6f3b706083->enter($__internal_d7280f794c10060a88295cef67ab172b8a2d1b4fb0123b9636111c6f3b706083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_d7280f794c10060a88295cef67ab172b8a2d1b4fb0123b9636111c6f3b706083->leave($__internal_d7280f794c10060a88295cef67ab172b8a2d1b4fb0123b9636111c6f3b706083_prof);

        
        $__internal_8fa92b093e32098da691dc8b4053da052138c107a40b5183f03bdedddedbc19a->leave($__internal_8fa92b093e32098da691dc8b4053da052138c107a40b5183f03bdedddedbc19a_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_18895cb14f3a0fc23815d1a57ab7410c6f2fcc19f15320aa0b22b973066ab8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18895cb14f3a0fc23815d1a57ab7410c6f2fcc19f15320aa0b22b973066ab8f8->enter($__internal_18895cb14f3a0fc23815d1a57ab7410c6f2fcc19f15320aa0b22b973066ab8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9f9581f4c4a79259bb963264f7bbdfef10e3331c1933ff68cc4cd1f8fd27bf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9581f4c4a79259bb963264f7bbdfef10e3331c1933ff68cc4cd1f8fd27bf7e->enter($__internal_9f9581f4c4a79259bb963264f7bbdfef10e3331c1933ff68cc4cd1f8fd27bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9f9581f4c4a79259bb963264f7bbdfef10e3331c1933ff68cc4cd1f8fd27bf7e->leave($__internal_9f9581f4c4a79259bb963264f7bbdfef10e3331c1933ff68cc4cd1f8fd27bf7e_prof);

        
        $__internal_18895cb14f3a0fc23815d1a57ab7410c6f2fcc19f15320aa0b22b973066ab8f8->leave($__internal_18895cb14f3a0fc23815d1a57ab7410c6f2fcc19f15320aa0b22b973066ab8f8_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1339d5493ccd4a666be4a2b39b0a1ede009b810946605ab1ac9b7459ab64b83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1339d5493ccd4a666be4a2b39b0a1ede009b810946605ab1ac9b7459ab64b83d->enter($__internal_1339d5493ccd4a666be4a2b39b0a1ede009b810946605ab1ac9b7459ab64b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_60bc1aea696d6d65d06fe198f8e2f88d4e52faf5c7e244a8b1d44613cf99cb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bc1aea696d6d65d06fe198f8e2f88d4e52faf5c7e244a8b1d44613cf99cb53->enter($__internal_60bc1aea696d6d65d06fe198f8e2f88d4e52faf5c7e244a8b1d44613cf99cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_60bc1aea696d6d65d06fe198f8e2f88d4e52faf5c7e244a8b1d44613cf99cb53->leave($__internal_60bc1aea696d6d65d06fe198f8e2f88d4e52faf5c7e244a8b1d44613cf99cb53_prof);

        
        $__internal_1339d5493ccd4a666be4a2b39b0a1ede009b810946605ab1ac9b7459ab64b83d->leave($__internal_1339d5493ccd4a666be4a2b39b0a1ede009b810946605ab1ac9b7459ab64b83d_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e0ddb5b1e609640843012020ef5c8886892366addae1f0dcedb604b139172db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ddb5b1e609640843012020ef5c8886892366addae1f0dcedb604b139172db7->enter($__internal_e0ddb5b1e609640843012020ef5c8886892366addae1f0dcedb604b139172db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_aff9e962be9d36b914623ef16e4e573956190dc26dd323dc7669de0368701a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff9e962be9d36b914623ef16e4e573956190dc26dd323dc7669de0368701a3d->enter($__internal_aff9e962be9d36b914623ef16e4e573956190dc26dd323dc7669de0368701a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_aff9e962be9d36b914623ef16e4e573956190dc26dd323dc7669de0368701a3d->leave($__internal_aff9e962be9d36b914623ef16e4e573956190dc26dd323dc7669de0368701a3d_prof);

        
        $__internal_e0ddb5b1e609640843012020ef5c8886892366addae1f0dcedb604b139172db7->leave($__internal_e0ddb5b1e609640843012020ef5c8886892366addae1f0dcedb604b139172db7_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_326ee51012d109d121b6fcee2373c565f01c24c48a34f9e6e1029c44cae47e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326ee51012d109d121b6fcee2373c565f01c24c48a34f9e6e1029c44cae47e11->enter($__internal_326ee51012d109d121b6fcee2373c565f01c24c48a34f9e6e1029c44cae47e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a0bb3e56ba8a8d6f740decc41dacafb21f97e4ec215b79a3f7f904f6c7c98021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0bb3e56ba8a8d6f740decc41dacafb21f97e4ec215b79a3f7f904f6c7c98021->enter($__internal_a0bb3e56ba8a8d6f740decc41dacafb21f97e4ec215b79a3f7f904f6c7c98021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_a0bb3e56ba8a8d6f740decc41dacafb21f97e4ec215b79a3f7f904f6c7c98021->leave($__internal_a0bb3e56ba8a8d6f740decc41dacafb21f97e4ec215b79a3f7f904f6c7c98021_prof);

        
        $__internal_326ee51012d109d121b6fcee2373c565f01c24c48a34f9e6e1029c44cae47e11->leave($__internal_326ee51012d109d121b6fcee2373c565f01c24c48a34f9e6e1029c44cae47e11_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b67a204551d027701526313bcfb57b669abec3e9063c12b0c1426ef0b2dd0d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67a204551d027701526313bcfb57b669abec3e9063c12b0c1426ef0b2dd0d60->enter($__internal_b67a204551d027701526313bcfb57b669abec3e9063c12b0c1426ef0b2dd0d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0f3096324d2188da01d2d2289fce2b7a7dd5ef929b1008baf19110a4ba557d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3096324d2188da01d2d2289fce2b7a7dd5ef929b1008baf19110a4ba557d3e->enter($__internal_0f3096324d2188da01d2d2289fce2b7a7dd5ef929b1008baf19110a4ba557d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0f3096324d2188da01d2d2289fce2b7a7dd5ef929b1008baf19110a4ba557d3e->leave($__internal_0f3096324d2188da01d2d2289fce2b7a7dd5ef929b1008baf19110a4ba557d3e_prof);

        
        $__internal_b67a204551d027701526313bcfb57b669abec3e9063c12b0c1426ef0b2dd0d60->leave($__internal_b67a204551d027701526313bcfb57b669abec3e9063c12b0c1426ef0b2dd0d60_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a4d7bc3df7295a13a078fce0982306fa1a7394586f1d93490626b0e3f012f4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d7bc3df7295a13a078fce0982306fa1a7394586f1d93490626b0e3f012f4d6->enter($__internal_a4d7bc3df7295a13a078fce0982306fa1a7394586f1d93490626b0e3f012f4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6de1e536fc63e0039e470e85f34ce043946caab43cb9254f8c0089ee7f0a70b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de1e536fc63e0039e470e85f34ce043946caab43cb9254f8c0089ee7f0a70b3->enter($__internal_6de1e536fc63e0039e470e85f34ce043946caab43cb9254f8c0089ee7f0a70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_6de1e536fc63e0039e470e85f34ce043946caab43cb9254f8c0089ee7f0a70b3->leave($__internal_6de1e536fc63e0039e470e85f34ce043946caab43cb9254f8c0089ee7f0a70b3_prof);

        
        $__internal_a4d7bc3df7295a13a078fce0982306fa1a7394586f1d93490626b0e3f012f4d6->leave($__internal_a4d7bc3df7295a13a078fce0982306fa1a7394586f1d93490626b0e3f012f4d6_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7e7aa471cc639b7ed05749419f081f307799831eead0a5e7c224b246d0f12bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7aa471cc639b7ed05749419f081f307799831eead0a5e7c224b246d0f12bf8->enter($__internal_7e7aa471cc639b7ed05749419f081f307799831eead0a5e7c224b246d0f12bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9e75bf5366a20835775d5a9f1e05f6f6419553b2e891608791d4dc4ae372d943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e75bf5366a20835775d5a9f1e05f6f6419553b2e891608791d4dc4ae372d943->enter($__internal_9e75bf5366a20835775d5a9f1e05f6f6419553b2e891608791d4dc4ae372d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_9e75bf5366a20835775d5a9f1e05f6f6419553b2e891608791d4dc4ae372d943->leave($__internal_9e75bf5366a20835775d5a9f1e05f6f6419553b2e891608791d4dc4ae372d943_prof);

        
        $__internal_7e7aa471cc639b7ed05749419f081f307799831eead0a5e7c224b246d0f12bf8->leave($__internal_7e7aa471cc639b7ed05749419f081f307799831eead0a5e7c224b246d0f12bf8_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3a6a09af806606030bb28afe2f24ec6c8e4fb782993299e4934116f55b884c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6a09af806606030bb28afe2f24ec6c8e4fb782993299e4934116f55b884c9a->enter($__internal_3a6a09af806606030bb28afe2f24ec6c8e4fb782993299e4934116f55b884c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_97461602aadc6c563a0cac7cece3e40d552c7e86e92e4a969ee0b5d9e2e4a69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97461602aadc6c563a0cac7cece3e40d552c7e86e92e4a969ee0b5d9e2e4a69a->enter($__internal_97461602aadc6c563a0cac7cece3e40d552c7e86e92e4a969ee0b5d9e2e4a69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_97461602aadc6c563a0cac7cece3e40d552c7e86e92e4a969ee0b5d9e2e4a69a->leave($__internal_97461602aadc6c563a0cac7cece3e40d552c7e86e92e4a969ee0b5d9e2e4a69a_prof);

        
        $__internal_3a6a09af806606030bb28afe2f24ec6c8e4fb782993299e4934116f55b884c9a->leave($__internal_3a6a09af806606030bb28afe2f24ec6c8e4fb782993299e4934116f55b884c9a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form.parent %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp64\\www\\ConnectWithFacebook\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
