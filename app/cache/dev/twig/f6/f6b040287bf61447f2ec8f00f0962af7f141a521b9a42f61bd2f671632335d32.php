<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3005dcda492eb279516c5adf76c99031a0dbdd45154806f0f16b5b28a7296107 extends Twig_Template
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
        $__internal_3731cac253b14a231f62b9fe6ab7b5a4c4ab0e21953546cd82afa059cca46f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3731cac253b14a231f62b9fe6ab7b5a4c4ab0e21953546cd82afa059cca46f0f->enter($__internal_3731cac253b14a231f62b9fe6ab7b5a4c4ab0e21953546cd82afa059cca46f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3731cac253b14a231f62b9fe6ab7b5a4c4ab0e21953546cd82afa059cca46f0f->leave($__internal_3731cac253b14a231f62b9fe6ab7b5a4c4ab0e21953546cd82afa059cca46f0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
