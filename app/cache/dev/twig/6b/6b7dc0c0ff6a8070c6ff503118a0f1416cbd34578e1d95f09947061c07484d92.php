<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_1a81ea5cbc614de757a7b0625961328c2d9ac1fdf886ee9c11755774b4dbfc85 extends Twig_Template
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
        $__internal_8a673a36164bf3f3e829f9a94b96e08f95db8ddec2c6dbc2fb5fa220f1b3af2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a673a36164bf3f3e829f9a94b96e08f95db8ddec2c6dbc2fb5fa220f1b3af2a->enter($__internal_8a673a36164bf3f3e829f9a94b96e08f95db8ddec2c6dbc2fb5fa220f1b3af2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8a673a36164bf3f3e829f9a94b96e08f95db8ddec2c6dbc2fb5fa220f1b3af2a->leave($__internal_8a673a36164bf3f3e829f9a94b96e08f95db8ddec2c6dbc2fb5fa220f1b3af2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
