<?php

/* feed/show.html.twig */
class __TwigTemplate_27b576bd5d012116d8d0e5b145bacc8ddf9422d605cf843ede920392e3982e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "feed/show.html.twig", 1);
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
        $__internal_fd4fb377b79facd5ebb62aaea91f0572782b5bd1fa9a41137485ef857c3a466b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4fb377b79facd5ebb62aaea91f0572782b5bd1fa9a41137485ef857c3a466b->enter($__internal_fd4fb377b79facd5ebb62aaea91f0572782b5bd1fa9a41137485ef857c3a466b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "feed/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4fb377b79facd5ebb62aaea91f0572782b5bd1fa9a41137485ef857c3a466b->leave($__internal_fd4fb377b79facd5ebb62aaea91f0572782b5bd1fa9a41137485ef857c3a466b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_494fad2742a68ed60f687fa6d481a44779bed597029ac11f43d69de9bde66bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494fad2742a68ed60f687fa6d481a44779bed597029ac11f43d69de9bde66bb8->enter($__internal_494fad2742a68ed60f687fa6d481a44779bed597029ac11f43d69de9bde66bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "feed/show.html.twig"));

        // line 4
        echo "    <h1>Feed</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "body", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "source", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "publisher", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "date", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Active_at_frontpage</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "activeatfrontpage", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("feed_edit", array("id" => $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_494fad2742a68ed60f687fa6d481a44779bed597029ac11f43d69de9bde66bb8->leave($__internal_494fad2742a68ed60f687fa6d481a44779bed597029ac11f43d69de9bde66bb8_prof);

    }

    public function getTemplateName()
    {
        return "feed/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  123 => 51,  117 => 48,  111 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Feed</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ feed.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ feed.title }}</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>{{ feed.body }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ feed.image }}</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>{{ feed.source }}</td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td>{{ feed.publisher }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ feed.date }}</td>
            </tr>
            <tr>
                <th>Active_at_frontpage</th>
                <td>{% if feed.activeatfrontpage %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('feed_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('feed_edit', { 'id': feed.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "feed/show.html.twig", "/Users/Sergio/Projects/simfony/feedInTime/app/Resources/views/feed/show.html.twig");
    }
}
