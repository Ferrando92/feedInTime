<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e4d0e3766f9d6ac68d37ab737cd0f7803f58d39a0ec65151eceb165ccea2bcfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a1b479dd5a6b247d9392e28e238b479dec7bbdb01c1591622f2317e63279fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1b479dd5a6b247d9392e28e238b479dec7bbdb01c1591622f2317e63279fb8->enter($__internal_3a1b479dd5a6b247d9392e28e238b479dec7bbdb01c1591622f2317e63279fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3a1b479dd5a6b247d9392e28e238b479dec7bbdb01c1591622f2317e63279fb8->leave($__internal_3a1b479dd5a6b247d9392e28e238b479dec7bbdb01c1591622f2317e63279fb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/Sergio/Projects/simfony/feedInTime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
