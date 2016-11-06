<?php

/* base.html.twig */
class __TwigTemplate_33a853f2408824ab5947778ff177fe2d824063cad0abe2b323cf02651b60cc26 extends Twig_Template
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
        $__internal_3f969ef439d65f68b90a7e2661fb0f5a6e1a219f35912915aa672e94526a6d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f969ef439d65f68b90a7e2661fb0f5a6e1a219f35912915aa672e94526a6d4e->enter($__internal_3f969ef439d65f68b90a7e2661fb0f5a6e1a219f35912915aa672e94526a6d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f969ef439d65f68b90a7e2661fb0f5a6e1a219f35912915aa672e94526a6d4e->leave($__internal_3f969ef439d65f68b90a7e2661fb0f5a6e1a219f35912915aa672e94526a6d4e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cb1595d4b1a553b2514e49212e2e11e0cc63abe471e9885239d535e9880980b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb1595d4b1a553b2514e49212e2e11e0cc63abe471e9885239d535e9880980b->enter($__internal_4cb1595d4b1a553b2514e49212e2e11e0cc63abe471e9885239d535e9880980b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_4cb1595d4b1a553b2514e49212e2e11e0cc63abe471e9885239d535e9880980b->leave($__internal_4cb1595d4b1a553b2514e49212e2e11e0cc63abe471e9885239d535e9880980b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d603ac9b5274f49ce83d5117004657b583baa93f3c3a087c63b79325f638dd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d603ac9b5274f49ce83d5117004657b583baa93f3c3a087c63b79325f638dd97->enter($__internal_d603ac9b5274f49ce83d5117004657b583baa93f3c3a087c63b79325f638dd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d603ac9b5274f49ce83d5117004657b583baa93f3c3a087c63b79325f638dd97->leave($__internal_d603ac9b5274f49ce83d5117004657b583baa93f3c3a087c63b79325f638dd97_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a286aa53b1767267a71119009a2300be9fed0c75a1213247df11636149d687ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a286aa53b1767267a71119009a2300be9fed0c75a1213247df11636149d687ad->enter($__internal_a286aa53b1767267a71119009a2300be9fed0c75a1213247df11636149d687ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a286aa53b1767267a71119009a2300be9fed0c75a1213247df11636149d687ad->leave($__internal_a286aa53b1767267a71119009a2300be9fed0c75a1213247df11636149d687ad_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fba701d6b822ef5601181e3ac66507c8cfe016b5a149cc3b1bd356aba9dd669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fba701d6b822ef5601181e3ac66507c8cfe016b5a149cc3b1bd356aba9dd669->enter($__internal_4fba701d6b822ef5601181e3ac66507c8cfe016b5a149cc3b1bd356aba9dd669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_4fba701d6b822ef5601181e3ac66507c8cfe016b5a149cc3b1bd356aba9dd669->leave($__internal_4fba701d6b822ef5601181e3ac66507c8cfe016b5a149cc3b1bd356aba9dd669_prof);

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
", "base.html.twig", "/Users/Sergio/Projects/simfony/old_feedInTime/app/Resources/views/base.html.twig");
    }
}
