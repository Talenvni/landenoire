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
                echo "                                <li class=\"col-lg-4 ";
                if ((twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()) == "general")) {
                    echo "active";
                }
                echo "\">
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
            // line 24
            echo "                        <div class=\"text-center my-3\">
                            <div class=\"row pb-4\">
                                <h4 class=\"col-lg-4 m-0\">Article <i class=\"fa fa-arrow-down fa-xs\"></i></h4>
                                <h4 class=\"col-lg-4\">Qualité <i class=\"fa fa-arrow-down fa-xs\"></i></h4>
                                <h4 class=\"col-lg-4\">
                                    Voir l'article <i class=\"fa fa-arrow-down fa-xs\"></i>
                                </h4>
                            </div>
                        </div>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabStore"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 34
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()), "html", null, true);
                echo "\"
                                 class=\"tab-pane fade ";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()) == "general")) {
                    echo "show active";
                }
                echo "\"
                                 role=\"tabpanel\">
                                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articleStore"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 38
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["article"], "slug", array()) == twig_get_attribute($this->env, $this->source, $context["tab"], "slug", array()))) {
                        // line 39
                        echo "                                    <div class=\"text-center my-3\">
                                        <div class=\"row border-bottom pb-3\">
                                            <span class=\"h5 col-lg-4 m-0\">";
                        // line 41
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", array()), "html", null, true);
                        echo "</span>
                                            <span class=\"col-lg-4\" style=\"color: ";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "color", array()), "html", null, true);
                        echo "\">
                                                    ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "qualityName", array()), "html", null, true);
                        echo "
                                                </span>
                                            <span class=\"col-lg-4\">
                                                <a href=\"/store/article-";
                        // line 46
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                        echo "\" class=\"m-0\">
                                                    Voir l'article
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    ";
                    }
                    // line 53
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </div>
                </div>
                ";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                // line 59
                echo "                    <div class=\"container my-4\">
                        <div class=\"row justify-content-center\">
                            <a href=\"/store/new-article\" class=\"btn\">Nouvel article</a>
                        </div>
                    </div>
                ";
            }
            // line 65
            echo "            </section>
        ";
        }
        // line 67
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
        return array (  174 => 67,  170 => 65,  162 => 59,  160 => 58,  156 => 56,  149 => 54,  143 => 53,  133 => 46,  127 => 43,  123 => 42,  119 => 41,  115 => 39,  112 => 38,  108 => 37,  101 => 35,  96 => 34,  92 => 33,  81 => 24,  74 => 18,  64 => 14,  57 => 12,  50 => 11,  46 => 10,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
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
                                <li class=\"col-lg-4 {% if tab.slug == 'general' %}active{% endif %}\">
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
                        {# Title #}
                        <div class=\"text-center my-3\">
                            <div class=\"row pb-4\">
                                <h4 class=\"col-lg-4 m-0\">Article <i class=\"fa fa-arrow-down fa-xs\"></i></h4>
                                <h4 class=\"col-lg-4\">Qualité <i class=\"fa fa-arrow-down fa-xs\"></i></h4>
                                <h4 class=\"col-lg-4\">
                                    Voir l'article <i class=\"fa fa-arrow-down fa-xs\"></i>
                                </h4>
                            </div>
                        </div>
                        {% for tab in tabStore %}
                            <div id=\"{{ tab.slug }}\"
                                 class=\"tab-pane fade {% if tab.slug == 'general' %}show active{% endif %}\"
                                 role=\"tabpanel\">
                                {% for article in articleStore %}
                                    {% if article.slug == tab.slug %}
                                    <div class=\"text-center my-3\">
                                        <div class=\"row border-bottom pb-3\">
                                            <span class=\"h5 col-lg-4 m-0\">{{ article.name }}</span>
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
                                    {% endif %}
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
