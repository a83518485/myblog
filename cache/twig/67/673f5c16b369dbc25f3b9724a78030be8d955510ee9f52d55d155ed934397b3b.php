<?php

/* forms/form.html.twig */
class __TwigTemplate_eabf60668c103686bc899a7a27e83dc8fe581f3bd008a296584ad2753eec2953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form_classes($context, array $blocks = array())
    {
        // line 3
        echo "  class=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "classes", array());
        echo " forms\"
";
    }

    // line 6
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 7
        echo "  <br>
";
    }

    // line 10
    public function block_button_classes($context, array $blocks = array())
    {
        // line 11
        echo "  class=\"";
        echo (($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["button"]) ? $context["button"] : null), "classes", array()), "button")) : ("button"));
        echo " btn btn-big\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  48 => 10,  43 => 7,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'forms/default/form.html.twig' %}
{% block form_classes %}
  class=\"{{ form.classes }} forms\"
{% endblock %}

{% block inner_markup_buttons_start %}
  <br>
{% endblock %}

{% block button_classes %}
  class=\"{{ button.classes|default('button') }} btn btn-big\"
{% endblock %}
";
    }
}
