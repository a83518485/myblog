<?php

/* partials/base.html.twig */
class __TwigTemplate_87a93fc9d8719e0465489e5e615a02dd522958c16a66f840cbd268834c02c65d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>
    <body>

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"";
        // line 33
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">";
        // line 36
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</span>
                    </div>
                     ";
        // line 38
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "                </header>
            </div>
        </div>

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-10\">
                        <img class=\"img-intro\" src=\"";
        // line 47
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "intro_avatar", array())));
        echo "\" alt=\"\">
                    </div>
                    <div class=\"unit-90\">
                        <p class=\"p-intro\">";
        // line 50
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "intro", array());
        echo "</p>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp\">
                            <a href=\"";
        // line 69
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "footer", array());
        echo "</a>
                        </p>
                    </div>
                    <div class=\"unit-50\">
                        <ul class=\"social list-flat right\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "link", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </ul>
                    </div>
                    <p class=\"text-centered foot-cp\">
                        <a href=\"";
        // line 80
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "url2", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "footer2", array());
        echo "</a>
                    </p>
                </div>
            </div>
        </footer>

    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 13
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/kube.min.js"), "method");
        // line 14
        echo "        ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/kube.min.css"), "method");
        // line 18
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 19
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.min.css"), "method");
        // line 20
        echo "        ";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "            <div class=\"content\">
                <div class=\"container\">
                    ";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                </div>
            </div>
        ";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 59,  219 => 60,  217 => 59,  213 => 57,  210 => 56,  206 => 20,  203 => 19,  200 => 18,  197 => 17,  194 => 16,  190 => 14,  187 => 13,  184 => 12,  181 => 11,  171 => 21,  169 => 16,  164 => 15,  162 => 11,  157 => 9,  154 => 8,  152 => 7,  144 => 6,  141 => 5,  138 => 4,  123 => 80,  118 => 77,  107 => 75,  103 => 74,  93 => 69,  85 => 63,  83 => 56,  74 => 50,  68 => 47,  58 => 39,  56 => 38,  51 => 36,  43 => 33,  34 => 26,  32 => 4,  27 => 2,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/kube.min.js') %}
        {% endblock %}
        {{ assets.js() }}
        {% block stylesheets %}
            {% do assets.addCss('theme://css/kube.min.css') %}
            {% do assets.addCss('theme://css/font-awesome.min.css') %}
            {% do assets.addCss('theme://css/custom.min.css') %}
        {% endblock %}
        {{ assets.css() }}

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">
        {% endblock head%}
    </head>
    <body>

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"{{ base_url_absolute }}\">{{ site.title }}</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">{{ site.title }}</span>
                    </div>
                     {% include 'partials/navigation.html.twig' %}
                </header>
            </div>
        </div>

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-10\">
                        <img class=\"img-intro\" src=\"{{ url('theme://img/' ~ site.intro_avatar ) }}\" alt=\"\">
                    </div>
                    <div class=\"unit-90\">
                        <p class=\"p-intro\">{{ site.intro }}</p>
                    </div>
                </div>
            </div>
        </div>

        {% block body %}
            <div class=\"content\">
                <div class=\"container\">
                    {% block content %}{% endblock %}
                </div>
            </div>
        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp\">
                            <a href=\"{{ site.author.url }}\">{{ site.author.footer }}</a>
                        </p>
                    </div>
                    <div class=\"unit-50\">
                        <ul class=\"social list-flat right\">
                        {% for item in site.social %}
                            <li><a href=\"{{ item.link }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
                        {% endfor %}
                        </ul>
                    </div>
                    <p class=\"text-centered foot-cp\">
                        <a href=\"{{ site.author.url2}}\">{{ site.author.footer2 }}</a>
                    </p>
                </div>
            </div>
        </footer>

    </body>
</html>
";
    }
}
