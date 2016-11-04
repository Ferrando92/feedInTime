<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_978e019150cae4dc8cc5a460aa332e4538e414be2485f9b82013e6b75a262c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_12798ef4c80e03cd9199bc9b8b3c13a78034d9a8b89312cb6a5ec42479c98c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12798ef4c80e03cd9199bc9b8b3c13a78034d9a8b89312cb6a5ec42479c98c9b->enter($__internal_12798ef4c80e03cd9199bc9b8b3c13a78034d9a8b89312cb6a5ec42479c98c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12798ef4c80e03cd9199bc9b8b3c13a78034d9a8b89312cb6a5ec42479c98c9b->leave($__internal_12798ef4c80e03cd9199bc9b8b3c13a78034d9a8b89312cb6a5ec42479c98c9b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b840a932bc57e17886dbdf16100b9058e452e965967c454e5ddf515ba04715d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b840a932bc57e17886dbdf16100b9058e452e965967c454e5ddf515ba04715d4->enter($__internal_b840a932bc57e17886dbdf16100b9058e452e965967c454e5ddf515ba04715d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_b840a932bc57e17886dbdf16100b9058e452e965967c454e5ddf515ba04715d4->leave($__internal_b840a932bc57e17886dbdf16100b9058e452e965967c454e5ddf515ba04715d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1191c055f857a3ed7d83e026dc77beb325a5e50e44d0c0e3041c3bb17aab2377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1191c055f857a3ed7d83e026dc77beb325a5e50e44d0c0e3041c3bb17aab2377->enter($__internal_1191c055f857a3ed7d83e026dc77beb325a5e50e44d0c0e3041c3bb17aab2377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1191c055f857a3ed7d83e026dc77beb325a5e50e44d0c0e3041c3bb17aab2377->leave($__internal_1191c055f857a3ed7d83e026dc77beb325a5e50e44d0c0e3041c3bb17aab2377_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1085e1d2772fe696a40bb5b28f190e7fd91e470109be718133193f8d9b58e9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1085e1d2772fe696a40bb5b28f190e7fd91e470109be718133193f8d9b58e9f5->enter($__internal_1085e1d2772fe696a40bb5b28f190e7fd91e470109be718133193f8d9b58e9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1085e1d2772fe696a40bb5b28f190e7fd91e470109be718133193f8d9b58e9f5->leave($__internal_1085e1d2772fe696a40bb5b28f190e7fd91e470109be718133193f8d9b58e9f5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
