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

/* partials/slider.html.twig */
class __TwigTemplate_30eaaeba5885f34d437d846f35bb7e87a4105d1c6ae5fea260de5d918673204e extends \Twig\Template
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
        echo "<div id=\"site-banner\" class=\"site-banner enable-slider\">
  <div class=\"site-banner-inner\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "slider", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "      <article data-id=\"post-";
            echo $this->getAttribute($context["loop"], "index", []);
            echo "\" class=\"post-";
            echo $this->getAttribute($context["loop"], "index", []);
            echo " post type-post status-publish format-standard has-post-thumbnail hentry tag-no-excerpt is-featured\" itemscope itemprop=\"blogPost\" itemtype=\"http://schema.org/BlogPosting\">
            ";
            // line 5
            if ($this->getAttribute($context["slide"], "image", [])) {
                // line 6
                echo "              <div class=\"site-banner-media\">
                <figure class=\"site-banner-thumbnail\" title=\"";
                // line 7
                echo $this->getAttribute($context["slide"], "title", []);
                echo "\" itemprop=\"image\">
                  <img width=\"1920\" height=\"640\" src=\"";
                // line 8
                echo ($context["theme_url"] ?? null);
                echo "/images/slideshow/";
                echo $this->getAttribute($context["slide"], "image", []);
                echo "\" class=\"attachment-receptar-banner size-receptar-banner wp-post-image\" alt=\"";
                echo $this->getAttribute($context["slide"], "title", []);
                echo "\"/>
                </figure>
              </div>
            ";
            }
            // line 12
            echo "            ";
            if ($this->getAttribute($context["slide"], "title", [])) {
                // line 13
                echo "              <div class=\"site-banner-header\">
                <h1 class=\"entry-title\" itemprop=\"name\">
                  <a href=\"";
                // line 15
                echo $this->getAttribute($context["slide"], "url", []);
                echo "\" class=\"highlight\" rel=\"bookmark\">";
                echo $this->getAttribute($context["slide"], "title", []);
                echo "</a>
                </h1>
              </div>
            ";
            }
            // line 19
            echo "      </article>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 21,  94 => 19,  85 => 15,  81 => 13,  78 => 12,  67 => 8,  63 => 7,  60 => 6,  58 => 5,  51 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"site-banner\" class=\"site-banner enable-slider\">
  <div class=\"site-banner-inner\">
      {% for slide in site.slider %}
      <article data-id=\"post-{{ loop.index }}\" class=\"post-{{ loop.index }} post type-post status-publish format-standard has-post-thumbnail hentry tag-no-excerpt is-featured\" itemscope itemprop=\"blogPost\" itemtype=\"http://schema.org/BlogPosting\">
            {% if slide.image %}
              <div class=\"site-banner-media\">
                <figure class=\"site-banner-thumbnail\" title=\"{{ slide.title }}\" itemprop=\"image\">
                  <img width=\"1920\" height=\"640\" src=\"{{ theme_url }}/images/slideshow/{{ slide.image }}\" class=\"attachment-receptar-banner size-receptar-banner wp-post-image\" alt=\"{{ slide.title }}\"/>
                </figure>
              </div>
            {% endif %}
            {% if slide.title %}
              <div class=\"site-banner-header\">
                <h1 class=\"entry-title\" itemprop=\"name\">
                  <a href=\"{{ slide.url }}\" class=\"highlight\" rel=\"bookmark\">{{ slide.title }}</a>
                </h1>
              </div>
            {% endif %}
      </article>
    {% endfor %}
  </div>
</div>
", "partials/slider.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\partials\\slider.html.twig");
    }
}
