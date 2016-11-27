<?php

/* item.html.twig */
class __TwigTemplate_1376f673b1180030154c6e402b14f1a82144d5506a091b0cdb3ae9194bb0946e extends Twig_Template
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
        // line 1
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "68373683")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}
      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
";
    }
}


/* item.html.twig */
class __TwigTemplate_1376f673b1180030154c6e402b14f1a82144d5506a091b0cdb3ae9194bb0946e_68373683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["base_url"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "url", array());
        // line 3
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 5
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 10
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 15
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", null, 15)->display($context);
            // line 16
            echo "        ";
        }
        // line 17
        echo "\t\t
\t\t\t ";
        // line 18
        $this->loadTemplate("partials/blog_item.html.twig", null, 18)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 19
        echo "\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 19,  114 => 18,  111 => 17,  108 => 16,  105 => 15,  102 => 14,  99 => 13,  95 => 1,  92 => 10,  90 => 9,  87 => 6,  85 => 5,  83 => 3,  81 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}
      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
";
    }
}
