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

/* forms/fields/tab/tab.html.twig */
class __TwigTemplate_fdbb8b40ce418f90a6b1aa2a25040d42644165e4c835da2f7ac49af037ad9cd9 extends \Twig\Template
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
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 2
            echo "    <div class=\"form-tab\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 4
                echo "        ";
                if ($this->getAttribute(($context["field"] ?? null), "type", [])) {
                    // line 5
                    if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["childName"]) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ".") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                        // line 6
                        $context["child"] = twig_array_merge($context["child"], ["name" => ($this->getAttribute(($context["field"] ?? null), "name", []) . $context["childName"])]);
                        // line 7
                        echo "            ";
                    }
                    // line 8
                    echo "
            ";
                    // line 9
                    $context["value"] = (($this->getAttribute($context["child"], "name", [])) ? ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", [])));
                    // line 10
                    echo "            ";
                    $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["child"], "type", [])) . "/") . $this->getAttribute($context["child"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "forms/fields/tab/tab.html.twig", 10)->display(array_merge($context, ["field" => $context["child"], "value" => $this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")]));
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/tab/tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  55 => 5,  52 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if field.fields %}
    <div class=\"form-tab\">
    {% for childName, child in field.fields %}
        {% if field.type %}
            {%- if childName starts with '.' -%}
                {% set child = child|merge({ name: field.name ~ childName }) %}
            {% endif %}

            {% set value = child.name ? data.value(child.name) : data.toArray %}
            {% include [\"forms/fields/#{child.type}/#{child.type}.html.twig\", 'forms/fields/text/text.html.twig'] with { field: child, value: data.value(child.name) } %}
        {% endif %}
    {% endfor %}
    </div>
{% endif %}
", "forms/fields/tab/tab.html.twig", "C:\\wamp\\www\\ventdest.group\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\tab\\tab.html.twig");
    }
}
