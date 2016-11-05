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
        $__internal_7f3c8eff5c15b688f64076b14df940df0f364362ec077b766afd131fc522642f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3c8eff5c15b688f64076b14df940df0f364362ec077b766afd131fc522642f->enter($__internal_7f3c8eff5c15b688f64076b14df940df0f364362ec077b766afd131fc522642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7f3c8eff5c15b688f64076b14df940df0f364362ec077b766afd131fc522642f->leave($__internal_7f3c8eff5c15b688f64076b14df940df0f364362ec077b766afd131fc522642f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e3a9c77078a40e91f894bfa4645f09ecd226aa27f1cfe1c532b1c2b184702b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3a9c77078a40e91f894bfa4645f09ecd226aa27f1cfe1c532b1c2b184702b1->enter($__internal_5e3a9c77078a40e91f894bfa4645f09ecd226aa27f1cfe1c532b1c2b184702b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_5e3a9c77078a40e91f894bfa4645f09ecd226aa27f1cfe1c532b1c2b184702b1->leave($__internal_5e3a9c77078a40e91f894bfa4645f09ecd226aa27f1cfe1c532b1c2b184702b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92d4433255a627383ba3ff542610945b25c72952e507da9adc2c2394d0114258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d4433255a627383ba3ff542610945b25c72952e507da9adc2c2394d0114258->enter($__internal_92d4433255a627383ba3ff542610945b25c72952e507da9adc2c2394d0114258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_92d4433255a627383ba3ff542610945b25c72952e507da9adc2c2394d0114258->leave($__internal_92d4433255a627383ba3ff542610945b25c72952e507da9adc2c2394d0114258_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bef495d9546f460f325958f5bcb423a81b2d04ee44c7b5de4f373a98d3fc83e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef495d9546f460f325958f5bcb423a81b2d04ee44c7b5de4f373a98d3fc83e5->enter($__internal_bef495d9546f460f325958f5bcb423a81b2d04ee44c7b5de4f373a98d3fc83e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_bef495d9546f460f325958f5bcb423a81b2d04ee44c7b5de4f373a98d3fc83e5->leave($__internal_bef495d9546f460f325958f5bcb423a81b2d04ee44c7b5de4f373a98d3fc83e5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ffc6ea96991967e761664886710b36594d44e15122f10fa6e1dc0c428db0092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffc6ea96991967e761664886710b36594d44e15122f10fa6e1dc0c428db0092->enter($__internal_2ffc6ea96991967e761664886710b36594d44e15122f10fa6e1dc0c428db0092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_2ffc6ea96991967e761664886710b36594d44e15122f10fa6e1dc0c428db0092->leave($__internal_2ffc6ea96991967e761664886710b36594d44e15122f10fa6e1dc0c428db0092_prof);

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
