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

/* sidebar/widget.html.twig */
class __TwigTemplate_4a7a8fd276935db7a5e03e6982ad86e62a7ba2189e9cf17f80841ff374ce240a extends \Twig\Template
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
        echo "<div class=\"widget ";
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "css_suffix", [])) {
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", []), "css_suffix", []);
        } else {
            echo "HTML";
        }
        echo "\">
  <h2 class=\"widget-title\">";
        // line 2
        echo $this->getAttribute(($context["module"] ?? null), "title", []);
        echo "</h2>
  ";
        // line 3
        echo $this->getAttribute(($context["module"] ?? null), "content", []);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget {% if module.header.css_suffix %}{{ module.header.css_suffix }}{% else %}HTML{% endif %}\">
  <h2 class=\"widget-title\">{{ module.title }}</h2>
  {{ module.content }}
</div>
", "sidebar/widget.html.twig", "/var/www/ventdest.group/user/themes/receptar/templates/sidebar/widget.html.twig");
    }
}
