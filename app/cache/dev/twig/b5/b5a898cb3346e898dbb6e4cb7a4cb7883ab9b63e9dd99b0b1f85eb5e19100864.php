<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a8de1d6f19203e95a491fb70362c632c0ab05670dd43536973f4c61de771d942 extends Twig_Template
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
        $__internal_565dcfc0afa27ddd259f7af30b8e7d74cfc8e695b22ef5f1a29c6aa339ebd29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565dcfc0afa27ddd259f7af30b8e7d74cfc8e695b22ef5f1a29c6aa339ebd29f->enter($__internal_565dcfc0afa27ddd259f7af30b8e7d74cfc8e695b22ef5f1a29c6aa339ebd29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_565dcfc0afa27ddd259f7af30b8e7d74cfc8e695b22ef5f1a29c6aa339ebd29f->leave($__internal_565dcfc0afa27ddd259f7af30b8e7d74cfc8e695b22ef5f1a29c6aa339ebd29f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
