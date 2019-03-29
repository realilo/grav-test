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

/* blog.html.twig */
class __TwigTemplate_efdf8b8e502b2f4216f98e87e6861452231625188b5543bca805db93f44f3eab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1327865183")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% block slider %}
      {% include 'partials/slider.html.twig' %}
    {% endblock %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {{ page.content }}

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          {% for child in collection %}
            {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
          {% endfor %}
        </div>

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}

    {% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_efdf8b8e502b2f4216f98e87e6861452231625188b5543bca805db93f44f3eab___1327865183 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = [
            'slider' => [$this, 'block_slider'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 8
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 9
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 11
        if ((($context["base_url"] ?? null) == "/")) {
            // line 12
            $context["base_url"] = "";
        }
        // line 15
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 16
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_slider($context, array $blocks = [])
    {
        // line 4
        echo "      ";
        $this->loadTemplate("partials/slider.html.twig", "blog.html.twig", 4)->display($context);
        // line 5
        echo "    ";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        // line 20
        echo "
    ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "            ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 25)->display(array_merge($context, ["page" => $context["child"], "truncate" => true]));
            // line 26
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

        ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 30
            echo "        ";
            $this->loadTemplate("pagination.html.twig", "blog.html.twig", 30)->display(array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 31
            echo "        ";
        }
        // line 32
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 32,  200 => 31,  197 => 30,  195 => 29,  191 => 27,  177 => 26,  174 => 25,  157 => 24,  151 => 21,  148 => 20,  145 => 19,  141 => 5,  138 => 4,  135 => 3,  131 => 1,  128 => 16,  126 => 15,  123 => 12,  121 => 11,  119 => 9,  117 => 8,  115 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

    {% block slider %}
      {% include 'partials/slider.html.twig' %}
    {% endblock %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {{ page.content }}

        <div id=\"posts\" class=\"posts posts-list clearfix\">
          {% for child in collection %}
            {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
          {% endfor %}
        </div>

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}

    {% endblock %}

{% endembed %}
", "blog.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\blog.html.twig");
    }
}
