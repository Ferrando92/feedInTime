<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cfc4ecdcd6e0ec656f2a7c5efdc4fa4d4ab5d7ac39b195c1406c60a2bbc9c344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cd793538047ffc8fda8d1857400c143ac75775375143e25ef1d56cdf984b9e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd793538047ffc8fda8d1857400c143ac75775375143e25ef1d56cdf984b9e64->enter($__internal_cd793538047ffc8fda8d1857400c143ac75775375143e25ef1d56cdf984b9e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd793538047ffc8fda8d1857400c143ac75775375143e25ef1d56cdf984b9e64->leave($__internal_cd793538047ffc8fda8d1857400c143ac75775375143e25ef1d56cdf984b9e64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_214fd7ac873b4efe9b814b3865ef53b5d1fc596b5cb094d42e5424ac1560b6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214fd7ac873b4efe9b814b3865ef53b5d1fc596b5cb094d42e5424ac1560b6fe->enter($__internal_214fd7ac873b4efe9b814b3865ef53b5d1fc596b5cb094d42e5424ac1560b6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_214fd7ac873b4efe9b814b3865ef53b5d1fc596b5cb094d42e5424ac1560b6fe->leave($__internal_214fd7ac873b4efe9b814b3865ef53b5d1fc596b5cb094d42e5424ac1560b6fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4717548d77959c4e78b6bfbbc94c1b9676953cfc2571e56439efd95b805a32d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4717548d77959c4e78b6bfbbc94c1b9676953cfc2571e56439efd95b805a32d8->enter($__internal_4717548d77959c4e78b6bfbbc94c1b9676953cfc2571e56439efd95b805a32d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4717548d77959c4e78b6bfbbc94c1b9676953cfc2571e56439efd95b805a32d8->leave($__internal_4717548d77959c4e78b6bfbbc94c1b9676953cfc2571e56439efd95b805a32d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aed50798fd0676fe4f01c04e46c6f5d4e2fef48fcf8529533028b42a3e3fd708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed50798fd0676fe4f01c04e46c6f5d4e2fef48fcf8529533028b42a3e3fd708->enter($__internal_aed50798fd0676fe4f01c04e46c6f5d4e2fef48fcf8529533028b42a3e3fd708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aed50798fd0676fe4f01c04e46c6f5d4e2fef48fcf8529533028b42a3e3fd708->leave($__internal_aed50798fd0676fe4f01c04e46c6f5d4e2fef48fcf8529533028b42a3e3fd708_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Sergio/Projects/simfony/old_feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
