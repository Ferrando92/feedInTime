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
        $__internal_2fb8bf2e5076735a13c56b35eb987784171e81ac3ef6cedbd94ba5df833c3379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb8bf2e5076735a13c56b35eb987784171e81ac3ef6cedbd94ba5df833c3379->enter($__internal_2fb8bf2e5076735a13c56b35eb987784171e81ac3ef6cedbd94ba5df833c3379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb8bf2e5076735a13c56b35eb987784171e81ac3ef6cedbd94ba5df833c3379->leave($__internal_2fb8bf2e5076735a13c56b35eb987784171e81ac3ef6cedbd94ba5df833c3379_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daf54d6ace7d9ecea041f1edf3518059f432461c87b6947022d6e3ca70c2bb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf54d6ace7d9ecea041f1edf3518059f432461c87b6947022d6e3ca70c2bb76->enter($__internal_daf54d6ace7d9ecea041f1edf3518059f432461c87b6947022d6e3ca70c2bb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_daf54d6ace7d9ecea041f1edf3518059f432461c87b6947022d6e3ca70c2bb76->leave($__internal_daf54d6ace7d9ecea041f1edf3518059f432461c87b6947022d6e3ca70c2bb76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36a91c82cd1b0d7e6361a377dcbbf65b261a62636091f3f929b0f19c459810b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a91c82cd1b0d7e6361a377dcbbf65b261a62636091f3f929b0f19c459810b4->enter($__internal_36a91c82cd1b0d7e6361a377dcbbf65b261a62636091f3f929b0f19c459810b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36a91c82cd1b0d7e6361a377dcbbf65b261a62636091f3f929b0f19c459810b4->leave($__internal_36a91c82cd1b0d7e6361a377dcbbf65b261a62636091f3f929b0f19c459810b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e0268d48a41f8217af0dec5ee88a305ef6c496088d82813a29857656af2cbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0268d48a41f8217af0dec5ee88a305ef6c496088d82813a29857656af2cbb7->enter($__internal_2e0268d48a41f8217af0dec5ee88a305ef6c496088d82813a29857656af2cbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e0268d48a41f8217af0dec5ee88a305ef6c496088d82813a29857656af2cbb7->leave($__internal_2e0268d48a41f8217af0dec5ee88a305ef6c496088d82813a29857656af2cbb7_prof);

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
