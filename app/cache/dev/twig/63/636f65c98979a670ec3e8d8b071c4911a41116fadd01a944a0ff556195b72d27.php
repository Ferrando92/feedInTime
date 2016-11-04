<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_b1852d90f170e79d5af4ac4109d76b0ac351b1da62e8322950e57239a01f2bfe extends Twig_Template
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
        $__internal_77354a24092e823a785826333dd1fa7628a427511e1e32410a94775e0da5ae47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77354a24092e823a785826333dd1fa7628a427511e1e32410a94775e0da5ae47->enter($__internal_77354a24092e823a785826333dd1fa7628a427511e1e32410a94775e0da5ae47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_77354a24092e823a785826333dd1fa7628a427511e1e32410a94775e0da5ae47->leave($__internal_77354a24092e823a785826333dd1fa7628a427511e1e32410a94775e0da5ae47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
