<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ccfd28ebb4b118bc7a62512823738a7c64314135108f169f6cb073941ffc5dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc9c28acb5a2cec3e00b7fa0704b9c4094dd8a551346b872c783a31460e0833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc9c28acb5a2cec3e00b7fa0704b9c4094dd8a551346b872c783a31460e0833->enter($__internal_0fc9c28acb5a2cec3e00b7fa0704b9c4094dd8a551346b872c783a31460e0833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc9c28acb5a2cec3e00b7fa0704b9c4094dd8a551346b872c783a31460e0833->leave($__internal_0fc9c28acb5a2cec3e00b7fa0704b9c4094dd8a551346b872c783a31460e0833_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6eabc15f7deb4a738f1747dba4cc1ec9f102202df1a972315b1c040e1a16451a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eabc15f7deb4a738f1747dba4cc1ec9f102202df1a972315b1c040e1a16451a->enter($__internal_6eabc15f7deb4a738f1747dba4cc1ec9f102202df1a972315b1c040e1a16451a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6eabc15f7deb4a738f1747dba4cc1ec9f102202df1a972315b1c040e1a16451a->leave($__internal_6eabc15f7deb4a738f1747dba4cc1ec9f102202df1a972315b1c040e1a16451a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36a88d1077da4e087f2af8fd531d6f54b19644bcb451a56aace97e260784c70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a88d1077da4e087f2af8fd531d6f54b19644bcb451a56aace97e260784c70a->enter($__internal_36a88d1077da4e087f2af8fd531d6f54b19644bcb451a56aace97e260784c70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36a88d1077da4e087f2af8fd531d6f54b19644bcb451a56aace97e260784c70a->leave($__internal_36a88d1077da4e087f2af8fd531d6f54b19644bcb451a56aace97e260784c70a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f97cf82148443f2cc27a6a4fed1a386146d89fdfccec757fd4b39499b5b8ce8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97cf82148443f2cc27a6a4fed1a386146d89fdfccec757fd4b39499b5b8ce8e->enter($__internal_f97cf82148443f2cc27a6a4fed1a386146d89fdfccec757fd4b39499b5b8ce8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f97cf82148443f2cc27a6a4fed1a386146d89fdfccec757fd4b39499b5b8ce8e->leave($__internal_f97cf82148443f2cc27a6a4fed1a386146d89fdfccec757fd4b39499b5b8ce8e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
