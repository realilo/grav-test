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

/* error.html.twig */
class __TwigTemplate_86a514bd273f0178e4f50f69dd0a3bd9a0a1e343b4aadc026df7f01a8c266ba6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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
        // line 2
        $context["template_body_classes"] = "error404 is-not-singular not-front-page not-scrolled";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section id=\"error-404\" class=\"error-404\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">Error ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h1>
    </header>
    <p>";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</p>
  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  50 => 7,  45 => 4,  42 => 3,  38 => 1,  36 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set template_body_classes = 'error404 is-not-singular not-front-page not-scrolled' %}
{% block content %}
<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section id=\"error-404\" class=\"error-404\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">Error {{ page.header.http_response_code }}</h1>
    </header>
    <p>{{ page.content }}</p>
  </section>
</main>
{% endblock %}
", "error.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\error.html.twig");
    }
}
