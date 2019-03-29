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

/* form.html.twig */
class __TwigTemplate_b4e82823fa29dd59b3b2bb7857a8cff5651d413f4c33c26833c00295c6e1b870 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 4
        $context["template_body_classes"] = "is-singular logged-in not-front-page page page-id-2 page-template-default customize-support not-scrolled";
        // line 5
        $context["singular"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        // line 7
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
   <article class=\"page type-page status-publish hentry\">
      <div class=\"entry-media\">
         <figure class=\"post-thumbnail\" itemprop=\"image\">
           <a href=\"";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">
             ";
        // line 12
        if (($context["banner"] ?? null)) {
            // line 13
            echo "               ";
            echo $this->getAttribute($this->getAttribute(($context["banner"] ?? null), "cropZoom", [0 => 480, 1 => 640], "method"), "html", [0 => "", 1 => "", 2 => "attachment-thumbnail size-thumbnail wp-post-image"], "method");
            echo "
             ";
        } else {
            // line 15
            echo "               <img class=\"attachment-thumbnail size-thumbnail wp-post-image\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "global_featured_image", []);
            echo "\">
             ";
        }
        // line 17
        echo "           </a>
         </figure>
      </div>
      <div class=\"entry-inner\">
         <header class=\"entry-header\">
            <h1 class=\"entry-title\">";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h1>
         </header>
         <div class=\"entry-content contact-form\" itemprop=\"description\">
           ";
        // line 25
        echo ($context["content"] ?? null);
        echo "
           ";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "enabled", [])) {
            // line 27
            echo "           ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 27)->display($context);
            // line 28
            echo "           ";
        }
        // line 29
        echo "         </div>
      </div>
   </article>
</main>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  97 => 28,  94 => 27,  92 => 26,  88 => 25,  82 => 22,  75 => 17,  67 => 15,  61 => 13,  59 => 12,  55 => 11,  49 => 7,  46 => 6,  42 => 1,  40 => 5,  38 => 4,  36 => 3,  22 => 1,);
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

{% set banner = page.media.images|first %}
{% set template_body_classes = 'is-singular logged-in not-front-page page page-id-2 page-template-default customize-support not-scrolled' %}
{% set singular = true %}
{% block content %}
<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
   <article class=\"page type-page status-publish hentry\">
      <div class=\"entry-media\">
         <figure class=\"post-thumbnail\" itemprop=\"image\">
           <a href=\"{{ page.url }}\">
             {% if banner %}
               {{ banner.cropZoom(480,640).html('','', 'attachment-thumbnail size-thumbnail wp-post-image') }}
             {% else %}
               <img class=\"attachment-thumbnail size-thumbnail wp-post-image\" src=\"{{ theme_url }}/images/{{ site.global_featured_image }}\">
             {% endif %}
           </a>
         </figure>
      </div>
      <div class=\"entry-inner\">
         <header class=\"entry-header\">
            <h1 class=\"entry-title\">{{ page.header.title }}</h1>
         </header>
         <div class=\"entry-content contact-form\" itemprop=\"description\">
           {{ content }}
           {% if config.plugins.form.enabled %}
           {% include \"forms/form.html.twig\" %}
           {% endif  %}
         </div>
      </div>
   </article>
</main>
{% endblock %}
", "form.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\form.html.twig");
    }
}
