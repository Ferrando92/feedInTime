<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_701e36d750db73893ef761ca88ccbea310bcc10a48015e40a110351ab3b3b8bb extends Twig_Template
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
        $__internal_6f412a2d4cd5b9df1a7dcb337c98de5dcfb5893180acb4c03fa24506a954de9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f412a2d4cd5b9df1a7dcb337c98de5dcfb5893180acb4c03fa24506a954de9f->enter($__internal_6f412a2d4cd5b9df1a7dcb337c98de5dcfb5893180acb4c03fa24506a954de9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f412a2d4cd5b9df1a7dcb337c98de5dcfb5893180acb4c03fa24506a954de9f->leave($__internal_6f412a2d4cd5b9df1a7dcb337c98de5dcfb5893180acb4c03fa24506a954de9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab3c88d7fa06c3b52c31f55f41d1ba08e5f9820e5ad391d68c1c27848b4eb969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3c88d7fa06c3b52c31f55f41d1ba08e5f9820e5ad391d68c1c27848b4eb969->enter($__internal_ab3c88d7fa06c3b52c31f55f41d1ba08e5f9820e5ad391d68c1c27848b4eb969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_ab3c88d7fa06c3b52c31f55f41d1ba08e5f9820e5ad391d68c1c27848b4eb969->leave($__internal_ab3c88d7fa06c3b52c31f55f41d1ba08e5f9820e5ad391d68c1c27848b4eb969_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05e3569c16d06fc5ff73074579db699dde2aa658fa232ee46b95cdd1ae1f4ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e3569c16d06fc5ff73074579db699dde2aa658fa232ee46b95cdd1ae1f4ab2->enter($__internal_05e3569c16d06fc5ff73074579db699dde2aa658fa232ee46b95cdd1ae1f4ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_05e3569c16d06fc5ff73074579db699dde2aa658fa232ee46b95cdd1ae1f4ab2->leave($__internal_05e3569c16d06fc5ff73074579db699dde2aa658fa232ee46b95cdd1ae1f4ab2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f00080dcaeb1668edb8596e47e0094bc0a134849cc35b7df4f57091c974b78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f00080dcaeb1668edb8596e47e0094bc0a134849cc35b7df4f57091c974b78e->enter($__internal_1f00080dcaeb1668edb8596e47e0094bc0a134849cc35b7df4f57091c974b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f00080dcaeb1668edb8596e47e0094bc0a134849cc35b7df4f57091c974b78e->leave($__internal_1f00080dcaeb1668edb8596e47e0094bc0a134849cc35b7df4f57091c974b78e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Sergio/Projects/simfony/old_feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
