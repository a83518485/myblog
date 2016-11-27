<?php

/* partials/pagination.html.twig */
class __TwigTemplate_8de47b9514bf92b3ca4e511257c7fa4e25525506d118db8d47e850c685ad2a5e extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            if (((isset($context["base_url"]) ? $context["base_url"] : null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"units-row\">
    <div class=\"unit-100\">
        <ul class=\"pagination\">
            ";
            // line 8
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 9
                echo "                ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array())), array("//" => "/"));
                // line 10
                echo "                <li><a rel=\"prev\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&laquo;</a></li>
            ";
            } else {
                // line 12
                echo "                <li><span>&laquo;</span></li>
            ";
            }
            // line 14
            echo "
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 16
                echo "
                ";
                // line 17
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 18
                    echo "                    <li><span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span></li>
                ";
                } elseif ($this->getAttribute(                // line 19
$context["paginate"], "isInDelta", array())) {
                    // line 20
                    echo "                    ";
                    $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 21
                    echo "                    <li><a href=\"";
                    echo (isset($context["url"]) ? $context["url"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
                ";
                } elseif ($this->getAttribute(                // line 22
$context["paginate"], "isDeltaBorder", array())) {
                    // line 23
                    echo "                    <li class=\"gap\"><span>&hellip;</span></li>
                ";
                }
                // line 25
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 28
                echo "                ";
                $context["url"] = twig_replace_filter((((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array())) . $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array())), array("//" => "/"));
                // line 29
                echo "                <li><a rel=\"next\" href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\">&raquo;</a></li>
            ";
            } else {
                // line 31
                echo "                <li><span>&raquo;</span></li>
            ";
            }
            // line 33
            echo "        </ul>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  101 => 31,  95 => 29,  92 => 28,  89 => 27,  82 => 25,  78 => 23,  76 => 22,  69 => 21,  66 => 20,  64 => 19,  59 => 18,  57 => 17,  54 => 16,  50 => 15,  47 => 14,  43 => 12,  37 => 10,  34 => 9,  32 => 8,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"units-row\">
    <div class=\"unit-100\">
        <ul class=\"pagination\">
            {% if pagination.hasPrev %}
                {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
                <li><a rel=\"prev\" href=\"{{ url }}\">&laquo;</a></li>
            {% else %}
                <li><span>&laquo;</span></li>
            {% endif %}

            {% for paginate in pagination %}

                {% if paginate.isCurrent %}
                    <li><span>{{ paginate.number }}</span></li>
                {% elseif paginate.isInDelta %}
                    {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
                    <li><a href=\"{{ url }}\">{{ paginate.number }}</a></li>
                {% elseif paginate.isDeltaBorder %}
                    <li class=\"gap\"><span>&hellip;</span></li>
                {% endif %}

            {% endfor %}
            {% if pagination.hasNext %}
                {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
                <li><a rel=\"next\" href=\"{{ url }}\">&raquo;</a></li>
            {% else %}
                <li><span>&raquo;</span></li>
            {% endif %}
        </ul>
    </div>
</div>
{% endif %}
";
    }
}
