<?php

/* default/index.html.twig */
class __TwigTemplate_3a2bc6769f845dc32393eca5d89e261d8087b3948d44a379da09d7639f6081ce extends Twig_Template
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
        $__internal_734fc93ef38dd7a467d97019e0f17eb9bddaa53458f0478dab574f0c23a3a311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734fc93ef38dd7a467d97019e0f17eb9bddaa53458f0478dab574f0c23a3a311->enter($__internal_734fc93ef38dd7a467d97019e0f17eb9bddaa53458f0478dab574f0c23a3a311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Notisiones</title>
    </head>
    <body>
        <ul id=\"navigation\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 9
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "publisher", array()), "html", null, true);
            echo "</h2>
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["feed"], "date", array()), "D-M-Y"), "html", null, true);
            echo "</p>
                <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "body", array()), "html", null, true);
            echo "</p>
                <img style=\"max-width:400px;max-height:400px;\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "image", array()), "html", null, true);
            echo "\" >
                <p><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "source", array()), "html", null, true);
            echo "\">Ir al Link de la noticia</a></p>
                <hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
    </body>
</html>";
        
        $__internal_734fc93ef38dd7a467d97019e0f17eb9bddaa53458f0478dab574f0c23a3a311->leave($__internal_734fc93ef38dd7a467d97019e0f17eb9bddaa53458f0478dab574f0c23a3a311_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  35 => 9,  31 => 8,  22 => 1,);
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
        <title>Notisiones</title>
    </head>
    <body>
        <ul id=\"navigation\">
            {% for feed in feeds %}
                <h2>{{ feed.publisher }}</h2>
                <p>{{ feed.title }}</p>
                <p>{{ feed.date|date('D-M-Y') }}</p>
                <p>{{ feed.body }}</p>
                <img style=\"max-width:400px;max-height:400px;\" src=\"{{ feed.image }}\" >
                <p><a href=\"{{ feed.source }}\">Ir al Link de la noticia</a></p>
                <hr>
            {% endfor %}
        </ul>
    </body>
</html>", "default/index.html.twig", "/Users/Sergio/Projects/simfony/old_feedInTime/app/Resources/views/default/index.html.twig");
    }
}
