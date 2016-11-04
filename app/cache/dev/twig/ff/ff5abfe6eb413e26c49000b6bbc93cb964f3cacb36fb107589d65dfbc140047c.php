<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4978887af319973fc04cf88a0a410f3c3c7a26b174de8739764038b16233f9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5779c94c2d088c0871a882f8523c38b58b7956b0e4eb13c547a1340983cd1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5779c94c2d088c0871a882f8523c38b58b7956b0e4eb13c547a1340983cd1a3->enter($__internal_b5779c94c2d088c0871a882f8523c38b58b7956b0e4eb13c547a1340983cd1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b5779c94c2d088c0871a882f8523c38b58b7956b0e4eb13c547a1340983cd1a3->leave($__internal_b5779c94c2d088c0871a882f8523c38b58b7956b0e4eb13c547a1340983cd1a3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1145746404ded6ed13a5258fd20694c0ba8416827893304b23dfac52a4b97c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1145746404ded6ed13a5258fd20694c0ba8416827893304b23dfac52a4b97c36->enter($__internal_1145746404ded6ed13a5258fd20694c0ba8416827893304b23dfac52a4b97c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_1145746404ded6ed13a5258fd20694c0ba8416827893304b23dfac52a4b97c36->leave($__internal_1145746404ded6ed13a5258fd20694c0ba8416827893304b23dfac52a4b97c36_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
