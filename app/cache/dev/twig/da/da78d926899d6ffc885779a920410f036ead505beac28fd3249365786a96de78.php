<?php

/* feed/index.html.twig */
class __TwigTemplate_6a1b3457919719525b7d0e1e0240748e955eebc12e67b307b81b2fddcbb9089e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "feed/index.html.twig", 1);
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
        $__internal_580e245c98d31ead91d39a123f2daa231114a38a4ddc573e97023920dac023b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580e245c98d31ead91d39a123f2daa231114a38a4ddc573e97023920dac023b5->enter($__internal_580e245c98d31ead91d39a123f2daa231114a38a4ddc573e97023920dac023b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_580e245c98d31ead91d39a123f2daa231114a38a4ddc573e97023920dac023b5->leave($__internal_580e245c98d31ead91d39a123f2daa231114a38a4ddc573e97023920dac023b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39248f3432cf16eb4507283551de9424dbca13c0d08e6c08f4e014a0b41fb00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39248f3432cf16eb4507283551de9424dbca13c0d08e6c08f4e014a0b41fb00a->enter($__internal_39248f3432cf16eb4507283551de9424dbca13c0d08e6c08f4e014a0b41fb00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "feed/index.html.twig"));

        // line 4
        echo "    <h1>Feeds list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Image</th>
                <th>Source</th>
                <th>Publisher</th>
                <th>Date</th>
                <th>Active_at_frontpage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_show", array("id" => $this->getAttribute($context["feed"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "body", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "source", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "publisher", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "date", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["feed"], "activeatfrontpage", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_show", array("id" => $this->getAttribute($context["feed"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_edit", array("id" => $this->getAttribute($context["feed"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_new");
        echo "\">Create a new feed</a>
        </li>
    </ul>
";
        
        $__internal_39248f3432cf16eb4507283551de9424dbca13c0d08e6c08f4e014a0b41fb00a->leave($__internal_39248f3432cf16eb4507283551de9424dbca13c0d08e6c08f4e014a0b41fb00a_prof);

    }

    public function getTemplateName()
    {
        return "feed/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  125 => 43,  113 => 37,  107 => 34,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Feeds list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Image</th>
                <th>Source</th>
                <th>Publisher</th>
                <th>Date</th>
                <th>Active_at_frontpage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for feed in feeds %}
            <tr>
                <td><a href=\"{{ path('feed_show', { 'id': feed.id }) }}\">{{ feed.id }}</a></td>
                <td>{{ feed.title }}</td>
                <td>{{ feed.body }}</td>
                <td>{{ feed.image }}</td>
                <td>{{ feed.source }}</td>
                <td>{{ feed.publisher }}</td>
                <td>{{ feed.date }}</td>
                <td>{% if feed.activeatfrontpage %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('feed_show', { 'id': feed.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('feed_edit', { 'id': feed.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('feed_new') }}\">Create a new feed</a>
        </li>
    </ul>
{% endblock %}
", "feed/index.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/app/Resources/views/feed/index.html.twig");
    }
}
