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

/* partials/sidebar.html.twig */
class __TwigTemplate_440d395ff4cbd89a8275e94079296a425aea151f7eb897ea5acad0c927cd7951 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "sidebar"], "order" => ["by" => "default", "dir" => "asc"]]], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            echo "  ";
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 3
                echo "    ";
                $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", [])) . ".html.twig"), "partials/sidebar.html.twig", 3)->display($context);
                // line 4
                echo "  ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 8
            echo "<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">";
            // line 9
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SEARCH");
            echo "</h2>
    ";
            // line 10
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 10)->display($context);
            // line 11
            echo "</aside>
";
        }
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 15
            echo "<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RANDOM_ARTICLE");
            echo "</h2>
    <a class=\"button\" href=\"";
            // line 17
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
";
        }
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 22
            echo "<aside class=\"widget widget_tag_cloud\">
  <h2 class=\"widget-title\">";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("POPULAR_TAGS");
            echo "</h2>
    ";
            // line 24
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 24)->display(array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 25
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  116 => 24,  112 => 23,  109 => 22,  107 => 21,  104 => 20,  98 => 17,  94 => 16,  91 => 15,  89 => 14,  86 => 13,  82 => 11,  80 => 10,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  53 => 4,  50 => 3,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
  {% if module.template %}
    {% include 'sidebar/' ~ module.template ~ '.html.twig' %}
  {% endif %}
{% endfor %}

{% if config.plugins.simplesearch.enabled %}
<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">{{ 'SEARCH'|t }}</h2>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</aside>
{% endif %}

{% if config.plugins.random.enabled %}
<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">{{ 'RANDOM_ARTICLE'|t }}</h2>
    <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_tag_cloud\">
  <h2 class=\"widget-title\">{{ 'POPULAR_TAGS'|t }}</h2>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</aside>
{% endif %}
", "partials/sidebar.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\partials\\sidebar.html.twig");
    }
}
