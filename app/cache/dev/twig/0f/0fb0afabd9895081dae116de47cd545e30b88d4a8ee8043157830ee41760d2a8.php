<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4b97d703b64d6c1bc5345461ac43e98546bea71bdf4f636496b81a29986bb369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da9d2e17eb5cdbe7141506f0abf553c0198a3b0337aba567c0e03e6c204e76a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9d2e17eb5cdbe7141506f0abf553c0198a3b0337aba567c0e03e6c204e76a2->enter($__internal_da9d2e17eb5cdbe7141506f0abf553c0198a3b0337aba567c0e03e6c204e76a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da9d2e17eb5cdbe7141506f0abf553c0198a3b0337aba567c0e03e6c204e76a2->leave($__internal_da9d2e17eb5cdbe7141506f0abf553c0198a3b0337aba567c0e03e6c204e76a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56fb2b2465a61b86ecdee73a783dfcd1f9b7ad9056110b16d004155899e45bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fb2b2465a61b86ecdee73a783dfcd1f9b7ad9056110b16d004155899e45bf3->enter($__internal_56fb2b2465a61b86ecdee73a783dfcd1f9b7ad9056110b16d004155899e45bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56fb2b2465a61b86ecdee73a783dfcd1f9b7ad9056110b16d004155899e45bf3->leave($__internal_56fb2b2465a61b86ecdee73a783dfcd1f9b7ad9056110b16d004155899e45bf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94d64e33bdbadca4113db0d8a66a190c0cf49e0ef79208e73b1d04f96649ec4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d64e33bdbadca4113db0d8a66a190c0cf49e0ef79208e73b1d04f96649ec4c->enter($__internal_94d64e33bdbadca4113db0d8a66a190c0cf49e0ef79208e73b1d04f96649ec4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94d64e33bdbadca4113db0d8a66a190c0cf49e0ef79208e73b1d04f96649ec4c->leave($__internal_94d64e33bdbadca4113db0d8a66a190c0cf49e0ef79208e73b1d04f96649ec4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6043ed90772afb84ba4fbd9848bee0af25caca7489a5069cd9f1c66746b1752f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6043ed90772afb84ba4fbd9848bee0af25caca7489a5069cd9f1c66746b1752f->enter($__internal_6043ed90772afb84ba4fbd9848bee0af25caca7489a5069cd9f1c66746b1752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6043ed90772afb84ba4fbd9848bee0af25caca7489a5069cd9f1c66746b1752f->leave($__internal_6043ed90772afb84ba4fbd9848bee0af25caca7489a5069cd9f1c66746b1752f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
