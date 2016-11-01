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
        $__internal_3ad66a0952defc5e0f6ccc4b7e13fd587acd5cab2973392952f0490cb91b4c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad66a0952defc5e0f6ccc4b7e13fd587acd5cab2973392952f0490cb91b4c2d->enter($__internal_3ad66a0952defc5e0f6ccc4b7e13fd587acd5cab2973392952f0490cb91b4c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ad66a0952defc5e0f6ccc4b7e13fd587acd5cab2973392952f0490cb91b4c2d->leave($__internal_3ad66a0952defc5e0f6ccc4b7e13fd587acd5cab2973392952f0490cb91b4c2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53c987254fea5b8e4a8d5fbafd1b2377286c951ff5b7cb05ee7878c04a788142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c987254fea5b8e4a8d5fbafd1b2377286c951ff5b7cb05ee7878c04a788142->enter($__internal_53c987254fea5b8e4a8d5fbafd1b2377286c951ff5b7cb05ee7878c04a788142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53c987254fea5b8e4a8d5fbafd1b2377286c951ff5b7cb05ee7878c04a788142->leave($__internal_53c987254fea5b8e4a8d5fbafd1b2377286c951ff5b7cb05ee7878c04a788142_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd91b77fe15fe295107536199e5dcdfdfd939e78696fb8109b5dbd6a50e2c880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd91b77fe15fe295107536199e5dcdfdfd939e78696fb8109b5dbd6a50e2c880->enter($__internal_fd91b77fe15fe295107536199e5dcdfdfd939e78696fb8109b5dbd6a50e2c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd91b77fe15fe295107536199e5dcdfdfd939e78696fb8109b5dbd6a50e2c880->leave($__internal_fd91b77fe15fe295107536199e5dcdfdfd939e78696fb8109b5dbd6a50e2c880_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a148015be2a9d2e8951aa24fe5d020239d190b6248eaa00a75deb3501afa12c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a148015be2a9d2e8951aa24fe5d020239d190b6248eaa00a75deb3501afa12c7->enter($__internal_a148015be2a9d2e8951aa24fe5d020239d190b6248eaa00a75deb3501afa12c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a148015be2a9d2e8951aa24fe5d020239d190b6248eaa00a75deb3501afa12c7->leave($__internal_a148015be2a9d2e8951aa24fe5d020239d190b6248eaa00a75deb3501afa12c7_prof);

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
