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

/* item.html.twig */
class __TwigTemplate_440f3b0bbe01a1c1ba33c002876cbad12cefa77f8c142f80cea8e01dceda3022 extends \Twig\Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "729063616")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}
{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% set singular = true %}
{% set template_body_classes = 'is-singular not-front-page single single-format-standard single-post not-scrolled ' %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
  {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
{% endblock %}
{% endembed %}
", "item.html.twig", "/var/www/ventdest.group/user/themes/receptar/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_440f3b0bbe01a1c1ba33c002876cbad12cefa77f8c142f80cea8e01dceda3022___729063616 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
        // line 4
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        $context["singular"] = true;
        // line 10
        $context["template_body_classes"] = "is-singular not-front-page single single-format-standard single-post not-scrolled ";
        // line 12
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 13
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "slug", []));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "  ";
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 17)->display(array_merge($context, ["truncate" => false, "big_header" => true]));
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
        return array (  123 => 17,  120 => 16,  116 => 1,  113 => 13,  111 => 12,  109 => 10,  107 => 9,  104 => 6,  102 => 5,  100 => 4,  98 => 3,  30 => 1,);
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

{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}
{% if base_url == '/' %}
  {% set base_url = '' %}
{% endif %}

{% set singular = true %}
{% set template_body_classes = 'is-singular not-front-page single single-format-standard single-post not-scrolled ' %}

{% if base_url == base_url_relative %}
  {% set feed_url = base_url~'/'~page.parent.slug %}
{% endif  %}

{% block content %}
  {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
{% endblock %}
{% endembed %}
", "item.html.twig", "/var/www/ventdest.group/user/themes/receptar/templates/item.html.twig");
    }
}
