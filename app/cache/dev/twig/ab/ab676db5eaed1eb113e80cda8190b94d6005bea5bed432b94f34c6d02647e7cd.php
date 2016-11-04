<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_64eaf26e3aff30578dd60541006f25e7d88cfa18f197f023be3c826c4ae24adf extends Twig_Template
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
        $__internal_bb005b891307a9386a63ca4f1cecf6bdc36806d8d59aebb3f0a42f29eda3cbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb005b891307a9386a63ca4f1cecf6bdc36806d8d59aebb3f0a42f29eda3cbf7->enter($__internal_bb005b891307a9386a63ca4f1cecf6bdc36806d8d59aebb3f0a42f29eda3cbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bb005b891307a9386a63ca4f1cecf6bdc36806d8d59aebb3f0a42f29eda3cbf7->leave($__internal_bb005b891307a9386a63ca4f1cecf6bdc36806d8d59aebb3f0a42f29eda3cbf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
