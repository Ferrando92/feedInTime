<?php

/* feed/new.html.twig */
class __TwigTemplate_161fdbf95f05bfbf1c9bd55c4ff3341113bdbd8f2a96905c273d85a188d23ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "feed/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0942a2f35a9ed2dcab5ae3f1577efe6af7b654955624985f2b40c7537b1854aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0942a2f35a9ed2dcab5ae3f1577efe6af7b654955624985f2b40c7537b1854aa->enter($__internal_0942a2f35a9ed2dcab5ae3f1577efe6af7b654955624985f2b40c7537b1854aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0942a2f35a9ed2dcab5ae3f1577efe6af7b654955624985f2b40c7537b1854aa->leave($__internal_0942a2f35a9ed2dcab5ae3f1577efe6af7b654955624985f2b40c7537b1854aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34c14551a8d456f1e56e6325dc6129ded2085317287fa16ca47b88aae11a42ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c14551a8d456f1e56e6325dc6129ded2085317287fa16ca47b88aae11a42ca->enter($__internal_34c14551a8d456f1e56e6325dc6129ded2085317287fa16ca47b88aae11a42ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "feed/new.html.twig"));

        // line 4
        echo "    <h1>Feed creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_34c14551a8d456f1e56e6325dc6129ded2085317287fa16ca47b88aae11a42ca->leave($__internal_34c14551a8d456f1e56e6325dc6129ded2085317287fa16ca47b88aae11a42ca_prof);

    }

    public function getTemplateName()
    {
        return "feed/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Feed creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('feed_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "feed/new.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/app/Resources/views/feed/new.html.twig");
    }
}
