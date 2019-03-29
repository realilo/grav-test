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

/* comments.html.twig */
class __TwigTemplate_709d0ffd5e895149993f6a397485e4f4e94197307fea8919c348c8d217bcdf16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "comments.html.twig", 1);
        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
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
        if ($this->getAttribute(($context["admin"] ?? null), "route", [])) {
            // line 4
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", [0 => true], "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = [])
    {
        // line 8
        echo "    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_COMMENTS.COMMENTS"), "html", null, true);
        echo "</h1>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        // line 12
        echo "    <style>
        td.comments-actions {
            flex: 0.1;
        }

        .pages-list .row {
            padding-right: 1rem;
        }

        .comment-text {
            line-height: 1.5rem;
            display: inline-block;
        }

        .pages-list .row p.page-route {
            margin: 0px 0 10px 0px;
        }

        th { background: #d9d9d9; }

        .comment { flex: 3 }
        .details { flex: 1.5 }

        .center {
            margin: 0 auto;
            text-align: center;
            display: block;
        }

        .button:active { margin: 0 auto;}
    </style>

    <script>
        \$(function() {
            var currentPage = 0;

            \$(document).on('click tap', '.js__load-more', function(event) {
               \$.getJSON(window.location + '/page:' + (currentPage + 1))
                .success(function(response) {
                    currentPage = parseInt(response.page);

                    response.comments.forEach(function(comment) {
                        \$('.js__comments-container').append('<tr>' +
                                '<td class=\"e author\">' + comment.author + '</td>' +
                                '<td class=\"v comment\">' + comment.text + '</td>' +
                                '<td class=\"v details\"><strong>Page</strong>: ' + comment.pageTitle + '<br>' +
                                '<strong>Date</strong>: ' + comment.date + '</td>' +
                            '</tr>');
                    })

                    var totalRetrieved = response.totalRetrieved * (parseInt(response.page) + 1);

                    \$('.totalRetrieved').html(totalRetrieved);
                    \$('.totalAvailable').html(response.totalAvailable);

                    if (totalRetrieved == response.totalAvailable) {
                        \$('.js__load-more').hide();
                    }
                })
                .error(function() {
                    alert('Unexpected error');
                });
            });
        });
    </script>

    <h1>Comments in the last 7 days</h1>

    <div class=\"admin-block\">
        <table>
            <tbody class=\"js__comments-container\">
                <tr class=\"h\">
                    <th class=\"author\">Author</th>
                    <th class=\"comment\">Comment</th>
                    <th class=\"details\">Details</th>
                </tr>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []), "comments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 89
            echo "                    <tr>
                        <td class=\"author\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", []), "html", null, true);
            echo "</td>
                        <td class=\"comment\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", []), "html", null, true);
            echo "</td>
                        <td class=\"details\"><strong>Page</strong>: ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "pageTitle", []), "html", null, true);
            echo "<br>
                        <strong>Date</strong>: ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", []), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </tbody>
        </table>

        ";
        // line 99
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []), "totalRetrieved", []) < $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []), "totalAvailable", []))) {
            // line 100
            echo "            <button type=\"button\" class=\"button center js__load-more\">
                Load more
            </button>
        ";
        }
        // line 104
        echo "
        <p class=\"center\">Showing <span class=\"totalRetrieved\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []), "totalRetrieved", []), "html", null, true);
        echo "</span> comments of <span class=\"totalAvailable\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "comments", []), "totalAvailable", []), "html", null, true);
        echo "</span></p>
    </div>

    ";
        // line 108
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "pages", [])) {
            // line 109
            echo "        <h1>Recently commented pages</h1>

        <div class=\"admin-block\">
            <table>
                <tbody class=\"js__pages-container\">
                    <tr class=\"h\">
                        <th class=\"page\">Page</th>
                        <th class=\"number-of-comments\">Number of comments</th>
                        <th class=\"last-comment-date\">Last commented on</th>
                    </tr>
                    ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "pages", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 120
                echo "                        <tr>
                            <td class=\"page\">";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", []), "html", null, true);
                echo "</td>
                            <td class=\"number-of-comments\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "commentsCount", []), "html", null, true);
                echo "</td>
                            <td class=\"last-comment-date\">";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "lastCommentDate", []), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        // line 130
        echo "
";
    }

    public function getTemplateName()
    {
        return "comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 130,  227 => 126,  218 => 123,  214 => 122,  210 => 121,  207 => 120,  203 => 119,  191 => 109,  189 => 108,  181 => 105,  178 => 104,  172 => 100,  170 => 99,  165 => 96,  156 => 93,  152 => 92,  148 => 91,  144 => 90,  141 => 89,  137 => 88,  59 => 12,  56 => 11,  49 => 8,  46 => 7,  42 => 1,  39 => 4,  37 => 3,  22 => 1,);
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

{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% block titlebar %}
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_COMMENTS.COMMENTS\"|tu }}</h1>
{% endblock %}

{% block content %}
    <style>
        td.comments-actions {
            flex: 0.1;
        }

        .pages-list .row {
            padding-right: 1rem;
        }

        .comment-text {
            line-height: 1.5rem;
            display: inline-block;
        }

        .pages-list .row p.page-route {
            margin: 0px 0 10px 0px;
        }

        th { background: #d9d9d9; }

        .comment { flex: 3 }
        .details { flex: 1.5 }

        .center {
            margin: 0 auto;
            text-align: center;
            display: block;
        }

        .button:active { margin: 0 auto;}
    </style>

    <script>
        \$(function() {
            var currentPage = 0;

            \$(document).on('click tap', '.js__load-more', function(event) {
               \$.getJSON(window.location + '/page:' + (currentPage + 1))
                .success(function(response) {
                    currentPage = parseInt(response.page);

                    response.comments.forEach(function(comment) {
                        \$('.js__comments-container').append('<tr>' +
                                '<td class=\"e author\">' + comment.author + '</td>' +
                                '<td class=\"v comment\">' + comment.text + '</td>' +
                                '<td class=\"v details\"><strong>Page</strong>: ' + comment.pageTitle + '<br>' +
                                '<strong>Date</strong>: ' + comment.date + '</td>' +
                            '</tr>');
                    })

                    var totalRetrieved = response.totalRetrieved * (parseInt(response.page) + 1);

                    \$('.totalRetrieved').html(totalRetrieved);
                    \$('.totalAvailable').html(response.totalAvailable);

                    if (totalRetrieved == response.totalAvailable) {
                        \$('.js__load-more').hide();
                    }
                })
                .error(function() {
                    alert('Unexpected error');
                });
            });
        });
    </script>

    <h1>Comments in the last 7 days</h1>

    <div class=\"admin-block\">
        <table>
            <tbody class=\"js__comments-container\">
                <tr class=\"h\">
                    <th class=\"author\">Author</th>
                    <th class=\"comment\">Comment</th>
                    <th class=\"details\">Details</th>
                </tr>
                {% for comment in grav.twig.comments.comments %}
                    <tr>
                        <td class=\"author\">{{comment.author}}</td>
                        <td class=\"comment\">{{comment.text}}</td>
                        <td class=\"details\"><strong>Page</strong>: {{comment.pageTitle}}<br>
                        <strong>Date</strong>: {{comment.date}}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        {% if grav.twig.comments.totalRetrieved < grav.twig.comments.totalAvailable %}
            <button type=\"button\" class=\"button center js__load-more\">
                Load more
            </button>
        {% endif %}

        <p class=\"center\">Showing <span class=\"totalRetrieved\">{{grav.twig.comments.totalRetrieved}}</span> comments of <span class=\"totalAvailable\">{{grav.twig.comments.totalAvailable}}</span></p>
    </div>

    {% if grav.twig.pages %}
        <h1>Recently commented pages</h1>

        <div class=\"admin-block\">
            <table>
                <tbody class=\"js__pages-container\">
                    <tr class=\"h\">
                        <th class=\"page\">Page</th>
                        <th class=\"number-of-comments\">Number of comments</th>
                        <th class=\"last-comment-date\">Last commented on</th>
                    </tr>
                    {% for page in grav.twig.pages %}
                        <tr>
                            <td class=\"page\">{{page.title}}</td>
                            <td class=\"number-of-comments\">{{page.commentsCount}}</td>
                            <td class=\"last-comment-date\">{{page.lastCommentDate}}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}

{% endblock %}


", "comments.html.twig", "/var/www/ventdest.group/user/plugins/comments/admin/templates/comments.html.twig");
    }
}
