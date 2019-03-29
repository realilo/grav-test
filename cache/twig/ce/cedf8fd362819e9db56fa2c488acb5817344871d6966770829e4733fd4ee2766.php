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

/* partials/comments.html.twig */
class __TwigTemplate_f102ac1ee87122ab6918003613699a99955733a24c73d7c6b1a5ff89be3e3dae extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "enable", [])) {
            // line 2
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []))) {
                // line 3
                echo "<div class=\"comment-holder\">
  <div class=\"comment-thread\">
    <ol class=\"comment-list\">
      ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", [])));
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
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 7
                    echo "      <li class=\"comment byuser bypostauthor thread-";
                    if (($this->getAttribute($context["loop"], "index", []) % 2 == 0)) {
                        echo "even";
                    } else {
                        echo "odd";
                    }
                    echo " depth-1 parent\">
        <article id=\"div-comment-";
                    // line 8
                    echo $this->getAttribute($context["loop"], "index", []);
                    echo "\" class=\"comment-body\">
          <div class=\"comment-meta\" kind=\"m\">
            <div class=\"comment-author\">";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", []));
                    echo "</div>
            <div class=\"comment-metadata\">
              ";
                    // line 12
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", []));
                    echo "
            </div>
          </div>
          <div class=\"comment-content\">
            ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", []));
                    echo "
            <br />
          </div>
        </article>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    </ol>
  </div>
</div>
    ";
            }
            // line 26
            echo "
    <div class=\"comment-replybox-thread\">
    <form class=\"contact-form\" name=\"";
            // line 28
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "name", []);
            echo "\"
          action=\"";
            // line 29
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "action", []))) : ($this->getAttribute(($context["page"] ?? null), "url", [])));
            echo "\"
          method=\"";
            // line 30
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "method", [])), "POST");
            echo "\">
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "
        ";
                // line 33
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 34
                echo "        ";
                if ($this->getAttribute($context["field"], "evaluateDefault", [])) {
                    // line 35
                    echo "            ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute($context["field"], "evaluateDefault", []));
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "        <div>
            ";
                // line 38
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "partials/comments.html.twig", 38)->display($context);
                // line 39
                echo "        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        <div class=\"buttons\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "comments", []), "form", []), "buttons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 44
                echo "            <button class=\"btn\" type=\"";
                echo (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit"));
                echo "\">";
                echo (($this->getAttribute($context["button"], "value", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", []), "Submit")) : ("Submit"));
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>

        ";
            // line 48
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    ";
            // line 51
            if ($this->getAttribute(($context["form"] ?? null), "message", [])) {
                // line 52
                echo "    <div class=\"alert\">";
                echo $this->getAttribute(($context["form"] ?? null), "message", []);
                echo "</div>
    ";
            }
            // line 54
            echo "    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 54,  208 => 52,  206 => 51,  200 => 48,  196 => 46,  185 => 44,  181 => 43,  177 => 41,  162 => 39,  160 => 38,  157 => 37,  154 => 36,  151 => 35,  148 => 34,  146 => 33,  143 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  110 => 26,  104 => 22,  84 => 16,  75 => 12,  70 => 10,  65 => 8,  56 => 7,  39 => 6,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if grav.twig.enable %}
{% if grav.twig.comments|length %}
<div class=\"comment-holder\">
  <div class=\"comment-thread\">
    <ol class=\"comment-list\">
      {% for comment in grav.twig.comments|array_reverse %}
      <li class=\"comment byuser bypostauthor thread-{% if loop.index is even %}even{% else %}odd{% endif %} depth-1 parent\">
        <article id=\"div-comment-{{ loop.index }}\" class=\"comment-body\">
          <div class=\"comment-meta\" kind=\"m\">
            <div class=\"comment-author\">{{comment.author|e}}</div>
            <div class=\"comment-metadata\">
              {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}}
            </div>
          </div>
          <div class=\"comment-content\">
            {{comment.text|e}}
            <br />
          </div>
        </article>
      </li>
      {% endfor %}
    </ol>
  </div>
</div>
    {% endif %}

    <div class=\"comment-replybox-thread\">
    <form class=\"contact-form\" name=\"{{ grav.config.plugins.comments.form.name }}\"
          action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
          method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">
    {% for field in grav.config.plugins.comments.form.fields %}

        {% set value = form.value(field.name) %}
        {% if field.evaluateDefault %}
            {% set value = evaluate(field.evaluateDefault) %}
        {% endif %}
        <div>
            {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
        </div>
    {% endfor %}

        <div class=\"buttons\">
        {% for button in grav.config.plugins.comments.form.buttons %}
            <button class=\"btn\" type=\"{{ button.type|default('submit') }}\">{{ button.value|default('Submit') }}</button>
        {% endfor %}
        </div>

        {{ nonce_field('form', 'form-nonce') }}
    </form>

    {% if form.message %}
    <div class=\"alert\">{{ form.message }}</div>
    {% endif %}
    </div>

{% endif %}
", "partials/comments.html.twig", "/var/www/ventdest.group/user/themes/receptar/templates/partials/comments.html.twig");
    }
}
