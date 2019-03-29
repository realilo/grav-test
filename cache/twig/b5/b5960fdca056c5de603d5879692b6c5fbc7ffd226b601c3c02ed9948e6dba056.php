<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_998f6da0d74f9808be4f8d799336937973554f1357a119336419f5aee3ba24b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'slider' => [$this, 'block_slider'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>
<body id=\"top\" class=\"";
        // line 44
        if (($context["template_body_classes"] ?? null)) {
            echo ($context["template_body_classes"] ?? null);
        } else {
            echo "fl-builder blog has-featured-posts is-not-singular";
        }
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
  <div id=\"page\" class=\"hfeed site\">
    <div class=\"site-inner\">
      ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "      ";
        $this->displayBlock('slider', $context, $blocks);
        // line 51
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
      ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "  </div>
</div>

</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />
  <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'/>
  <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
  <meta name=\"google-translate-customization\" content=\"";
        // line 14
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", []);
        echo "\">
  ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

  ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

  ";
        // line 38
        if (($context["singular"] ?? null)) {
            // line 39
            echo "  <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url(";
            if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))) {
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "url", []);
            } else {
                echo ($context["theme_url"] ?? null);
                echo "/images/";
                echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", []);
            }
            echo ")}</style>
  ";
        }
        // line 41
        echo "
  ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slick.css"], "method");
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://genericons/genericons.css"], "method");
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/starter.css"], "method");
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/colors.css"], "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/jetpack.css"], "method");
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/lightbox.css"], "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 24
        echo "    ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 25
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie.css"], "method");
            // line 26
            echo "  ";
        }
        // line 27
        echo "  ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/slick.min.js"], "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/scripts-global.js"], "method");
        // line 34
        echo "
  ";
    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        // line 48
        echo "        ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "      ";
    }

    // line 50
    public function block_slider($context, array $blocks = [])
    {
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        // line 52
        echo "      <div id=\"content\" class=\"site-content\">
        <div id=\"primary\" class=\"content-area\">
          ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "        </div>
      </div>
      ";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        // line 60
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "      ";
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
        return array (  262 => 61,  259 => 60,  256 => 59,  251 => 54,  245 => 55,  243 => 54,  239 => 52,  236 => 51,  231 => 50,  227 => 49,  224 => 48,  221 => 47,  216 => 34,  213 => 33,  210 => 32,  207 => 31,  204 => 30,  200 => 27,  197 => 26,  194 => 25,  191 => 24,  188 => 23,  185 => 22,  182 => 21,  179 => 20,  176 => 19,  173 => 18,  170 => 17,  167 => 16,  164 => 15,  159 => 41,  147 => 39,  145 => 38,  139 => 36,  137 => 30,  131 => 28,  129 => 15,  125 => 14,  118 => 10,  115 => 9,  113 => 8,  105 => 7,  102 => 6,  99 => 5,  90 => 62,  88 => 59,  85 => 58,  82 => 51,  79 => 50,  77 => 47,  66 => 44,  63 => 43,  61 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
  <link rel='stylesheet' id='receptar-google-fonts-css' href='//fonts.googleapis.com/css?family=Roboto%7CRoboto+Condensed%3A400%2C300%7CAlegreya%3A400%2C700&#038;subset&#038;ver=44d4db587900ff753163772c910c3b34' type='text/css' media='all'/>
  <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
  <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
  {% block stylesheets %}
    {% do assets.addCss('theme://css/slick.css') %}
    {% do assets.addCss('theme://genericons/genericons.css') %}
    {% do assets.addCss('theme://css/starter.css') %}
    {% do assets.addCss('theme://css/style.css') %}
    {% do assets.addCss('theme://css/colors.css') %}
    {% do assets.addCss('theme://css/jetpack.css') %}
    {% do assets.addCss('theme://css/lightbox.css') %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
    {% do assets.addCss('theme://css/ie.css') %}
  {% endif %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
    {% do assets.add('jquery',101) %}
    {% do assets.add('theme://js/slick.min.js') %}
    {% do assets.add('theme://js/scripts-global.js') %}

  {% endblock %}
  {{ assets.js() }}

  {% if singular %}
  <style id='receptar-stylesheet-inline-css' type='text/css'>.entry-media{background-image:url({% if page.media.images|first %}{{ page.media.images|first.url }}{% else %}{{ theme_url }}/images/{{ site.global_featured_image }}{% endif %})}</style>
  {% endif %}

  {% endblock head %}
</head>
<body id=\"top\" class=\"{% if template_body_classes %}{{ template_body_classes }}{% else %}fl-builder blog has-featured-posts is-not-singular{% endif %}{{ page.header.body_classes }}\">
  <div id=\"page\" class=\"hfeed site\">
    <div class=\"site-inner\">
      {% block header %}
        {% include 'partials/header.html.twig' %}
      {% endblock %}
      {% block slider %}{% endblock %}
      {% block body %}
      <div id=\"content\" class=\"site-content\">
        <div id=\"primary\" class=\"content-area\">
          {% block content %}{% endblock %}
        </div>
      </div>
      {% endblock %}

      {% block footer %}
        {% include 'partials/footer.html.twig' %}
      {% endblock %}
  </div>
</div>

</body>
</html>
", "partials/base.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\partials\\base.html.twig");
    }
}
