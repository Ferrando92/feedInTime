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
        $__internal_147b2e9ac9be84f329bff30fe6a9e353c65eea0f9d4d494f5e1ecc03c630316b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147b2e9ac9be84f329bff30fe6a9e353c65eea0f9d4d494f5e1ecc03c630316b->enter($__internal_147b2e9ac9be84f329bff30fe6a9e353c65eea0f9d4d494f5e1ecc03c630316b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_147b2e9ac9be84f329bff30fe6a9e353c65eea0f9d4d494f5e1ecc03c630316b->leave($__internal_147b2e9ac9be84f329bff30fe6a9e353c65eea0f9d4d494f5e1ecc03c630316b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d238f0f798323826e2cf287efe16727c961e985e1fa61f3215bdf2ff90077999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d238f0f798323826e2cf287efe16727c961e985e1fa61f3215bdf2ff90077999->enter($__internal_d238f0f798323826e2cf287efe16727c961e985e1fa61f3215bdf2ff90077999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "feed/new.html.twig"));

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
        
        $__internal_d238f0f798323826e2cf287efe16727c961e985e1fa61f3215bdf2ff90077999->leave($__internal_d238f0f798323826e2cf287efe16727c961e985e1fa61f3215bdf2ff90077999_prof);

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
