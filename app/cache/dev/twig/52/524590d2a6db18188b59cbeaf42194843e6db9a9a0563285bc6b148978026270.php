<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_7577dcd4efd21f7701a59a4e5aea553f201dada0813ff24bb88e2c9469904416 extends Twig_Template
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
        $__internal_69386c74b3dee6818031b2603b4691c34df34ab6ebc6f76cdf84157ae6dd8a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69386c74b3dee6818031b2603b4691c34df34ab6ebc6f76cdf84157ae6dd8a68->enter($__internal_69386c74b3dee6818031b2603b4691c34df34ab6ebc6f76cdf84157ae6dd8a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_69386c74b3dee6818031b2603b4691c34df34ab6ebc6f76cdf84157ae6dd8a68->leave($__internal_69386c74b3dee6818031b2603b4691c34df34ab6ebc6f76cdf84157ae6dd8a68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
