<?php

/* ::base.html.twig */
class __TwigTemplate_db600c9cfe3a29995c1262c612d9146a05a7f40d4dfb35111b1e3d31cb3d932e extends Twig_Template
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
        $__internal_3d05248f42b1757aa0cd72d418bab02161af1b00189bf59b636f5d16cbb4b823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d05248f42b1757aa0cd72d418bab02161af1b00189bf59b636f5d16cbb4b823->enter($__internal_3d05248f42b1757aa0cd72d418bab02161af1b00189bf59b636f5d16cbb4b823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3d05248f42b1757aa0cd72d418bab02161af1b00189bf59b636f5d16cbb4b823->leave($__internal_3d05248f42b1757aa0cd72d418bab02161af1b00189bf59b636f5d16cbb4b823_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b3be6a9ae3118b24795bc7b79239892ac8f2c0f053d3a4e34a43f13a6c39f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3be6a9ae3118b24795bc7b79239892ac8f2c0f053d3a4e34a43f13a6c39f3f->enter($__internal_6b3be6a9ae3118b24795bc7b79239892ac8f2c0f053d3a4e34a43f13a6c39f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_6b3be6a9ae3118b24795bc7b79239892ac8f2c0f053d3a4e34a43f13a6c39f3f->leave($__internal_6b3be6a9ae3118b24795bc7b79239892ac8f2c0f053d3a4e34a43f13a6c39f3f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b397cf8698d3a6b3491e92e049ac7c2066eb407ca3769b68d836dd7eb66e4ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b397cf8698d3a6b3491e92e049ac7c2066eb407ca3769b68d836dd7eb66e4ea9->enter($__internal_b397cf8698d3a6b3491e92e049ac7c2066eb407ca3769b68d836dd7eb66e4ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_b397cf8698d3a6b3491e92e049ac7c2066eb407ca3769b68d836dd7eb66e4ea9->leave($__internal_b397cf8698d3a6b3491e92e049ac7c2066eb407ca3769b68d836dd7eb66e4ea9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_347ff5f12aa614ef1abd45f81abf30be040f90014dbc49951f3d75c43ee6369a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347ff5f12aa614ef1abd45f81abf30be040f90014dbc49951f3d75c43ee6369a->enter($__internal_347ff5f12aa614ef1abd45f81abf30be040f90014dbc49951f3d75c43ee6369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_347ff5f12aa614ef1abd45f81abf30be040f90014dbc49951f3d75c43ee6369a->leave($__internal_347ff5f12aa614ef1abd45f81abf30be040f90014dbc49951f3d75c43ee6369a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbe8c12dd5945399fb39b467dee94d8b23ba277e6d45f019f23769074088eb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe8c12dd5945399fb39b467dee94d8b23ba277e6d45f019f23769074088eb2e->enter($__internal_cbe8c12dd5945399fb39b467dee94d8b23ba277e6d45f019f23769074088eb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_cbe8c12dd5945399fb39b467dee94d8b23ba277e6d45f019f23769074088eb2e->leave($__internal_cbe8c12dd5945399fb39b467dee94d8b23ba277e6d45f019f23769074088eb2e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/app/Resources/views/base.html.twig");
    }
}
