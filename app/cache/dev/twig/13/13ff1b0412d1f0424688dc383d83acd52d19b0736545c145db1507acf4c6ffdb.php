<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_57ef4cf2235936509f3faa17a2819bd1c6ea566abb4908a2565ecf88b8db3f19 extends Twig_Template
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
        $__internal_818fe00aa4fb0cd6a2b0d9c0256e1dd68531a73d44bb6def1e4bfff2e077d2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818fe00aa4fb0cd6a2b0d9c0256e1dd68531a73d44bb6def1e4bfff2e077d2fd->enter($__internal_818fe00aa4fb0cd6a2b0d9c0256e1dd68531a73d44bb6def1e4bfff2e077d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_818fe00aa4fb0cd6a2b0d9c0256e1dd68531a73d44bb6def1e4bfff2e077d2fd->leave($__internal_818fe00aa4fb0cd6a2b0d9c0256e1dd68531a73d44bb6def1e4bfff2e077d2fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
