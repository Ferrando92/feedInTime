<?php

/* :feed:edit.html.twig */
class __TwigTemplate_af55de05e7e393878ef3f5490b011059e120541ca9cd456b7b11dad2ddd1696b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":feed:edit.html.twig", 1);
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
        $__internal_48f330462c2225bb356335521617d3003a35909952dbbcabf70adbf2b206ee14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f330462c2225bb356335521617d3003a35909952dbbcabf70adbf2b206ee14->enter($__internal_48f330462c2225bb356335521617d3003a35909952dbbcabf70adbf2b206ee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":feed:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f330462c2225bb356335521617d3003a35909952dbbcabf70adbf2b206ee14->leave($__internal_48f330462c2225bb356335521617d3003a35909952dbbcabf70adbf2b206ee14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7c15374f01f84251770b8409eb83b8cb4dc764f3af808cec4427467cdc665d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c15374f01f84251770b8409eb83b8cb4dc764f3af808cec4427467cdc665d7->enter($__internal_e7c15374f01f84251770b8409eb83b8cb4dc764f3af808cec4427467cdc665d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", ":feed:edit.html.twig"));

        // line 4
        echo "    <h1>Feed edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e7c15374f01f84251770b8409eb83b8cb4dc764f3af808cec4427467cdc665d7->leave($__internal_e7c15374f01f84251770b8409eb83b8cb4dc764f3af808cec4427467cdc665d7_prof);

    }

    public function getTemplateName()
    {
        return ":feed:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Feed edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('feed_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":feed:edit.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/app/Resources/views/feed/edit.html.twig");
    }
}
