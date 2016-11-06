<?php

/* feed/index.html.twig */
class __TwigTemplate_32fde0420d91882807f97fe70d8cbac439a9dc9bd76042142a741a4378de643a extends Twig_Template
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
        $__internal_cbded15face8c6117a6eba385f04077cf53a71aa35f8214e6c692ab75c6fcdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbded15face8c6117a6eba385f04077cf53a71aa35f8214e6c692ab75c6fcdfc->enter($__internal_cbded15face8c6117a6eba385f04077cf53a71aa35f8214e6c692ab75c6fcdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbded15face8c6117a6eba385f04077cf53a71aa35f8214e6c692ab75c6fcdfc->leave($__internal_cbded15face8c6117a6eba385f04077cf53a71aa35f8214e6c692ab75c6fcdfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_575d9f703ac8ec985fbe8f1642cb1c13e77db419f23a6d206de275fc9e84b95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575d9f703ac8ec985fbe8f1642cb1c13e77db419f23a6d206de275fc9e84b95f->enter($__internal_575d9f703ac8ec985fbe8f1642cb1c13e77db419f23a6d206de275fc9e84b95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "feed/index.html.twig"));

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
        
        $__internal_575d9f703ac8ec985fbe8f1642cb1c13e77db419f23a6d206de275fc9e84b95f->leave($__internal_575d9f703ac8ec985fbe8f1642cb1c13e77db419f23a6d206de275fc9e84b95f_prof);

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
", "feed/index.html.twig", "/Users/Sergio/Projects/simfony/old_feedInTime/app/Resources/views/feed/index.html.twig");
    }
}
