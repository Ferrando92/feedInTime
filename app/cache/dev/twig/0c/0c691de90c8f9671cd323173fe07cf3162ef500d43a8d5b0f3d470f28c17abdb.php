<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_25d499ab940fd371f39724338d9c2ebd4f93ebf771835ab4bedfa981205391e7 extends Twig_Template
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
        $__internal_db25eb0595dd78d899613a33a805a15351ca1ffdd2e87e6569ac1e9a36f3d558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db25eb0595dd78d899613a33a805a15351ca1ffdd2e87e6569ac1e9a36f3d558->enter($__internal_db25eb0595dd78d899613a33a805a15351ca1ffdd2e87e6569ac1e9a36f3d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_db25eb0595dd78d899613a33a805a15351ca1ffdd2e87e6569ac1e9a36f3d558->leave($__internal_db25eb0595dd78d899613a33a805a15351ca1ffdd2e87e6569ac1e9a36f3d558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
