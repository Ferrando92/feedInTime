<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8552045390973e2613b1f87691bd24afd42ebaffc7cbc7b558e86004d4c5b482 extends Twig_Template
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
        $__internal_c60dc5eb555a677e5c642898e2e689577e9a5905e6e47e9004eb2c6e8e769c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60dc5eb555a677e5c642898e2e689577e9a5905e6e47e9004eb2c6e8e769c5e->enter($__internal_c60dc5eb555a677e5c642898e2e689577e9a5905e6e47e9004eb2c6e8e769c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c60dc5eb555a677e5c642898e2e689577e9a5905e6e47e9004eb2c6e8e769c5e->leave($__internal_c60dc5eb555a677e5c642898e2e689577e9a5905e6e47e9004eb2c6e8e769c5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
