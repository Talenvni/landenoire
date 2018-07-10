<?php

/* /store/storeCommonIndex.twig */
class __TwigTemplate_59940fef0c351b07d2f2b8598c73a321c0d6486596f8e2ed7526c12cf80686c2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/store/storeCommonIndex.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <main>
        ";
        // line 5
        if ( !(null === ($context["sessionUser"] ?? null))) {
            // line 6
            echo "            <section class=\"my-5\">
                <div class=\"container\">
                    <div class=\"row text-center\">
                        <ul class=\"chatbox--title nav nav-tabs nav-justified col-lg-12\">
                            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabStore"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 11
                echo "                                <li class=\"col-lg-4\">
                                    <a href=\"#";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()), "html", null, true);
                echo "\" aria-controls=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()), "html", null, true);
                echo "\" role=\"tab\"
                                       data-toggle=\"tab\">
                                        ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "tab", array()), "html", null, true);
                echo "
                                    </a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                        </ul>
                    </div>
                </div>
                <div class=\"box--message chatbox--container container\">
                    <div class=\"tab-content my-3\">
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabStore"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 24
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()), "html", null, true);
                echo "\" class=\"tab-pane\" role=\"tabpanel\">
                                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articleStore"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["article"], "slug", array()) == twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()))) {
                        // line 26
                        echo "                                    <div class=\"text-center my-3\">
                                        <div class=\"row justify-content-between align-items-center\">
                                            <h5 class=\"col-lg-4 m-0\">";
                        // line 28
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", array()), "html", null, true);
                        echo "</h5>
                                            <span class=\"col-lg-4\" style=\"color: ";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "color", array()), "html", null, true);
                        echo "\">
                                                    ";
                        // line 30
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "qualityName", array()), "html", null, true);
                        echo "
                                                </span>
                                            <span class=\"col-lg-4\">
                                                <a href=\"/store/article-";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                        echo "\" class=\"m-0\">
                                                    Voir l'article
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <hr>
                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </div>
                </div>
                ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                // line 46
                echo "                    <div class=\"container my-4\">
                        <div class=\"row justify-content-center\">
                            <a href=\"/store/new-article\" class=\"btn\">Nouvel article</a>
                        </div>
                    </div>
                ";
            }
            // line 52
            echo "            </section>
        ";
        }
        // line 54
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "/store/storeCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  145 => 52,  137 => 46,  135 => 45,  131 => 43,  124 => 41,  109 => 33,  103 => 30,  99 => 29,  95 => 28,  91 => 26,  86 => 25,  81 => 24,  77 => 23,  70 => 18,  60 => 14,  53 => 12,  50 => 11,  46 => 10,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {% if sessionUser is not null %}
            <section class=\"my-5\">
                <div class=\"container\">
                    <div class=\"row text-center\">
                        <ul class=\"chatbox--title nav nav-tabs nav-justified col-lg-12\">
                            {% for tab in tabStore %}
                                <li class=\"col-lg-4\">
                                    <a href=\"#{{ tab.slug }}\" aria-controls=\"{{ tab.slug }}\" role=\"tab\"
                                       data-toggle=\"tab\">
                                        {{ tab.tab }}
                                    </a>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
                <div class=\"box--message chatbox--container container\">
                    <div class=\"tab-content my-3\">
                        {% for tab in tabStore %}
                            <div id=\"{{ tab.slug }}\" class=\"tab-pane\" role=\"tabpanel\">
                                {% for article in articleStore if article.slug == tab.slug %}
                                    <div class=\"text-center my-3\">
                                        <div class=\"row justify-content-between align-items-center\">
                                            <h5 class=\"col-lg-4 m-0\">{{ article.name }}</h5>
                                            <span class=\"col-lg-4\" style=\"color: {{ article.color }}\">
                                                    {{ article.qualityName }}
                                                </span>
                                            <span class=\"col-lg-4\">
                                                <a href=\"/store/article-{{ article.id }}\" class=\"m-0\">
                                                    Voir l'article
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <hr>
                                {% endfor %}
                            </div>
                        {% endfor %}
                    </div>
                </div>
                {% if sessionUser.idGroup >= 2 %}
                    <div class=\"container my-4\">
                        <div class=\"row justify-content-center\">
                            <a href=\"/store/new-article\" class=\"btn\">Nouvel article</a>
                        </div>
                    </div>
                {% endif %}
            </section>
        {% endif %}
    </main>
{% endblock main %}", "/store/storeCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\store\\storeCommonIndex.twig");
    }
}
