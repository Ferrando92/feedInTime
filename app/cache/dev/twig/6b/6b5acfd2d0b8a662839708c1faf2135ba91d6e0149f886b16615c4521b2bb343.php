<?php

/* base.html.twig */
class __TwigTemplate_f2e4be722a1f904776a77750db5f45c3402ee0ec7949fb4b37406605e2144449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f1636de19977bc14f2518f8044cd179bcfe3556fafd11ed85fc908b765f90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f1636de19977bc14f2518f8044cd179bcfe3556fafd11ed85fc908b765f90f->enter($__internal_01f1636de19977bc14f2518f8044cd179bcfe3556fafd11ed85fc908b765f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_01f1636de19977bc14f2518f8044cd179bcfe3556fafd11ed85fc908b765f90f->leave($__internal_01f1636de19977bc14f2518f8044cd179bcfe3556fafd11ed85fc908b765f90f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af0a368d7fae0258a27734ad9f2e39e5b37d16eb78990858659d601a784b7d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0a368d7fae0258a27734ad9f2e39e5b37d16eb78990858659d601a784b7d27->enter($__internal_af0a368d7fae0258a27734ad9f2e39e5b37d16eb78990858659d601a784b7d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_af0a368d7fae0258a27734ad9f2e39e5b37d16eb78990858659d601a784b7d27->leave($__internal_af0a368d7fae0258a27734ad9f2e39e5b37d16eb78990858659d601a784b7d27_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e867a76f9d9425fff79ec9f1547cc6cfd89b1f64f8f2ae17a660994dea0edb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e867a76f9d9425fff79ec9f1547cc6cfd89b1f64f8f2ae17a660994dea0edb5->enter($__internal_6e867a76f9d9425fff79ec9f1547cc6cfd89b1f64f8f2ae17a660994dea0edb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_6e867a76f9d9425fff79ec9f1547cc6cfd89b1f64f8f2ae17a660994dea0edb5->leave($__internal_6e867a76f9d9425fff79ec9f1547cc6cfd89b1f64f8f2ae17a660994dea0edb5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_971b4a90101a1ebae7e05dec5b0bbdf4ccf680248031610529c2ac6be133e423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971b4a90101a1ebae7e05dec5b0bbdf4ccf680248031610529c2ac6be133e423->enter($__internal_971b4a90101a1ebae7e05dec5b0bbdf4ccf680248031610529c2ac6be133e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_971b4a90101a1ebae7e05dec5b0bbdf4ccf680248031610529c2ac6be133e423->leave($__internal_971b4a90101a1ebae7e05dec5b0bbdf4ccf680248031610529c2ac6be133e423_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f77cf2ce86c3c9bc3e8dd197fafd38c45c2d9df7fd014e9c12d7b274b7ce360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f77cf2ce86c3c9bc3e8dd197fafd38c45c2d9df7fd014e9c12d7b274b7ce360->enter($__internal_9f77cf2ce86c3c9bc3e8dd197fafd38c45c2d9df7fd014e9c12d7b274b7ce360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_9f77cf2ce86c3c9bc3e8dd197fafd38c45c2d9df7fd014e9c12d7b274b7ce360->leave($__internal_9f77cf2ce86c3c9bc3e8dd197fafd38c45c2d9df7fd014e9c12d7b274b7ce360_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/app/Resources/views/base.html.twig");
    }
}
