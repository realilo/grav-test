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

/* partials/header.html.twig */
class __TwigTemplate_606d7a23d9ab36c14da8b5ec90816967d1509aae532d6d66d6a07cf4dc5ff3f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"masthead\" class=\"site-header\" >
  <div class=\"site-branding\">
    <h1 class=\"site-title logo type-text\">
      <a href='";
        // line 4
        echo ($context["base_url_absolute"] ?? null);
        echo "'>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE");
        echo "</a>
    </h1>
    <h2 class=\"site-description\">";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</h2>
  </div>

  <section id=\"secondary\" class=\"secondary\">
   <div class=\"secondary-content\">
      <div class=\"secondary-content-container\">
        <div class=\"site-branding\">
          <h1 class=\"site-title logo type-text\">
            <a href='";
        // line 14
        echo ($context["base_url_absolute"] ?? null);
        echo "'>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE");
        echo "</a>
          </h1>
          <h2 class=\"site-description\">";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</h2>
        </div>
         <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
            <span class=\"screen-reader-text\">Receptar site navigation</span>
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <div class=\"menu\">
              ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 25
        echo "            </div>
         </nav>
         <div class=\"widget-area sidebar\" role=\"complementary\" itemscope=\"\" itemtype=\"http://schema.org/WPSideBar\">
           ";
        // line 28
        $this->displayBlock('sidebar', $context, $blocks);
        // line 31
        echo "         </div>
      </div>
   </div>
   <div class=\"secondary-controls\">
      <button id=\"menu-toggle\" class=\"menu-toggle\" aria-controls=\"secondary\" aria-expanded=\"false\">
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"screen-reader-text\">Menu</span>
      </button>

      ";
        // line 42
        if (($context["singular"] ?? null)) {
            // line 43
            echo "      <nav class=\"navigation post-navigation links-count-2\" role=\"navigation\">
        <h1 class=\"screen-reader-text\">Post navigation</h1>
        <div class=\"nav-links\">
          ";
            // line 46
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 47
                echo "          <div class=\"nav-next nav-link has-post-thumbnail\">
            <a rel=\"next\"  href=\"";
                // line 48
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">";
                // line 50
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NEXT");
                echo " </span>";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "header", []), "title", []);
                echo "
              </span>
            </a>
          </div>
          ";
            }
            // line 55
            echo "
          ";
            // line 56
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 57
                echo "          <div class=\"nav-previous nav-link has-post-thumbnail\">
            <a rel=\"prev\" href=\"";
                // line 58
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">";
                // line 60
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PREVIOUS");
                echo " </span>";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "header", []), "title", []);
                echo "
              </span>
            </a>
          </div>
          ";
            }
            // line 65
            echo "        </div>
      </nav>
    ";
        }
        // line 68
        echo "
      <div class=\"social-links\">
        <ul id=\"menu-social-links\" class=\"social-links-items\">
          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 72
            echo "            <li id=\"menu-item-";
            echo $this->getAttribute($context["loop"], "index", []);
            echo "\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-";
            echo $this->getAttribute($context["loop"], "index", []);
            echo "\">
              <a href=\"";
            // line 73
            echo $this->getAttribute($context["icon"], "url", []);
            echo "\">
                <span class=\"screen-reader-text\">";
            // line 74
            echo $this->getAttribute($context["icon"], "text", []);
            echo "</span>
              </a>
            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
          ";
        // line 79
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 80
            echo "            <li id=\"menu-item-1245\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1245\">
              <a href=\"";
            // line 81
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><span class=\"screen-reader-text\">Atom 1.0</span></a>
            </li>
            <li id=\"menu-item-1246\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1246\">
              <a href=\"";
            // line 84
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><span class=\"screen-reader-text\">RSS</span></a>
            </li>
          ";
        }
        // line 87
        echo "

        </ul>
      </div>
   </div>
</section>

<div id=\"site-header-widgets\" class=\"widget-area site-header-widgets\">
";
        // line 95
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 96
            echo "    ";
            $this->loadTemplate("partials/simplesearch_searchbox_top.html.twig", "partials/header.html.twig", 96)->display($context);
        }
        // line 98
        echo "
</div>

</header>
";
    }

    // line 22
    public function block_navigation($context, array $blocks = [])
    {
        // line 23
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 23)->display($context);
        // line 24
        echo "              ";
    }

    // line 28
    public function block_sidebar($context, array $blocks = [])
    {
        // line 29
        echo "             ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/header.html.twig", 29)->display($context);
        // line 30
        echo "           ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 30,  256 => 29,  253 => 28,  249 => 24,  246 => 23,  243 => 22,  235 => 98,  231 => 96,  229 => 95,  219 => 87,  213 => 84,  207 => 81,  204 => 80,  202 => 79,  199 => 78,  181 => 74,  177 => 73,  170 => 72,  153 => 71,  148 => 68,  143 => 65,  133 => 60,  128 => 58,  125 => 57,  123 => 56,  120 => 55,  110 => 50,  105 => 48,  102 => 47,  100 => 46,  95 => 43,  93 => 42,  80 => 31,  78 => 28,  73 => 25,  71 => 22,  62 => 16,  55 => 14,  44 => 6,  37 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"masthead\" class=\"site-header\" >
  <div class=\"site-branding\">
    <h1 class=\"site-title logo type-text\">
      <a href='{{ base_url_absolute }}'>{{ 'SITE.TITLE'|t }}</a>
    </h1>
    <h2 class=\"site-description\">{{ 'SITE.DESCRIPTION'|t }}</h2>
  </div>

  <section id=\"secondary\" class=\"secondary\">
   <div class=\"secondary-content\">
      <div class=\"secondary-content-container\">
        <div class=\"site-branding\">
          <h1 class=\"site-title logo type-text\">
            <a href='{{ base_url_absolute }}'>{{ 'SITE.TITLE'|t }}</a>
          </h1>
          <h2 class=\"site-description\">{{ 'SITE.DESCRIPTION'|t }}</h2>
        </div>
         <nav id=\"site-navigation\" class=\"main-navigation\" role=\"navigation\" itemscope=\"\" itemtype=\"http://schema.org/SiteNavigationElement\">
            <span class=\"screen-reader-text\">Receptar site navigation</span>
            <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>
            <div class=\"menu\">
              {% block navigation %}
                {% include 'partials/navigation.html.twig' %}
              {% endblock %}
            </div>
         </nav>
         <div class=\"widget-area sidebar\" role=\"complementary\" itemscope=\"\" itemtype=\"http://schema.org/WPSideBar\">
           {% block sidebar %}
             {% include 'partials/sidebar.html.twig' %}
           {% endblock %}
         </div>
      </div>
   </div>
   <div class=\"secondary-controls\">
      <button id=\"menu-toggle\" class=\"menu-toggle\" aria-controls=\"secondary\" aria-expanded=\"false\">
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"hamburger-item\"></span>
      <span class=\"screen-reader-text\">Menu</span>
      </button>

      {% if singular %}
      <nav class=\"navigation post-navigation links-count-2\" role=\"navigation\">
        <h1 class=\"screen-reader-text\">Post navigation</h1>
        <div class=\"nav-links\">
          {% if not page.isFirst %}
          <div class=\"nav-next nav-link has-post-thumbnail\">
            <a rel=\"next\"  href=\"{{ page.nextSibling.url }}\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">{{ 'NEXT'|t }} </span>{{ page.nextSibling.header.title }}
              </span>
            </a>
          </div>
          {% endif %}

          {% if not page.isLast %}
          <div class=\"nav-previous nav-link has-post-thumbnail\">
            <a rel=\"prev\" href=\"{{ page.prevSibling.url }}\">
              <span class=\"post-title\">
                <span class=\"meta-nav\">{{ 'PREVIOUS'|t }} </span>{{ page.prevSibling.header.title }}
              </span>
            </a>
          </div>
          {% endif %}
        </div>
      </nav>
    {% endif %}

      <div class=\"social-links\">
        <ul id=\"menu-social-links\" class=\"social-links-items\">
          {% for icon in site.social %}
            <li id=\"menu-item-{{ loop.index }}\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-{{ loop.index }}\">
              <a href=\"{{ icon.url }}\">
                <span class=\"screen-reader-text\">{{ icon.text }}</span>
              </a>
            </li>
          {% endfor %}

          {% if config.plugins.feed.enabled %}
            <li id=\"menu-item-1245\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1245\">
              <a href=\"{{ feed_url }}.atom\"><span class=\"screen-reader-text\">Atom 1.0</span></a>
            </li>
            <li id=\"menu-item-1246\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-1246\">
              <a href=\"{{ feed_url }}.rss\"><span class=\"screen-reader-text\">RSS</span></a>
            </li>
          {% endif %}


        </ul>
      </div>
   </div>
</section>

<div id=\"site-header-widgets\" class=\"widget-area site-header-widgets\">
{% if config.plugins.simplesearch.enabled %}
    {% include 'partials/simplesearch_searchbox_top.html.twig' %}
{% endif %}

</div>

</header>
", "partials/header.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\themes\\receptar\\templates\\partials\\header.html.twig");
    }
}
