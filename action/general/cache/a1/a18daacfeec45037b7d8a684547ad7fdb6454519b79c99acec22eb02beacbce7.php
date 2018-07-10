<?php

/* /store/newArticleCommonEdit.twig */
class __TwigTemplate_eed15d3cc32d383d19b43d16a5f13c2dc06445d3aedc519d0c9c659932e3be2b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/store/newArticleCommonEdit.twig", 1);
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
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                // line 7
                echo "                <section class=\"container--profil-info container my-5 py-5 rounded\">
                    <h2 class=\"text-center mb-5\">Nouvel article</h2>
                    <form method=\"post\" class=\"form-group\" enctype=\"multipart/form-data\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <ul class=\"list-group\">
                                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 14
                    echo "                                        <li class=\"list-unstyled\">
                                            <span class=\"badge badge-warning\">Erreur</span>
                                            ";
                    // line 16
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                                </ul>
                            </div>
                        </div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-lg-4\">
                                <label for=\"article-name\" class=\"form-control-label\">
                                    Nom de l'Article
                                </label>
                                <input type=\"text\" id=\"article-name\" name=\"article_name\" class=\"form-control\"
                                       placeholder=\"Nom\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"article-coin\" class=\"form-control-label\">
                                    Prix de l'Article (en cuivre)
                                </label>
                                <input type=\"text\" id=\"article-coin\" name=\"article_coin\" class=\"form-control\"
                                       placeholder=\"Prix\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"article-img\" class=\"form-control-label\">
                                    Image de l'Article
                                </label>
                                <input type=\"file\" id=\"article-img\" name=\"article_img\" class=\"form-control\">
                            </div>
                        </div>

                        <div class=\"row justify-content-between my-5\">
                            <div class=\"col-lg-4\">
                                <label for=\"article-quality\" class=\"form-control-label\">
                                    Qualité de l'article
                                </label>
                                <select name=\"article_quality\" id=\"article-quality\" class=\"form-control\"
                                        size=\"5\">
                                    <optgroup label=\"Qualités\">
                                        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["qualityAll"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["quality"]) {
                    // line 54
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quality'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                                    </optgroup>
                                </select>
                            </div>

                            <div class=\"col-lg-4\">
                                <label for=\"article-tab\" class=\"form-control-label\">
                                    Onglet de l'article
                                </label>
                                <select name=\"article_tab\" id=\"article-tab\" class=\"form-control\"
                                        size=\"5\">
                                    <optgroup label=\"Onglets\">
                                        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tabAll"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 68
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "tab", array()), "html", null, true);
                    echo "
                                            </option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-12\">
                                <label for=\"article-description\" hidden></label>
                                <textarea name=\"article_description\" id=\"article-description\"
                                          cols=\"30\"
                                          rows=\"10\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                    // line 86
                    echo "                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"new_submit\">
                                    Créer
                                </button>
                            </div>
                        ";
                }
                // line 92
                echo "                    </form>
                </section>
            ";
            }
            // line 95
            echo "        ";
        }
        // line 96
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "/store/newArticleCommonEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 96,  180 => 95,  175 => 92,  167 => 86,  165 => 85,  150 => 72,  141 => 69,  136 => 68,  132 => 67,  119 => 56,  108 => 54,  104 => 53,  68 => 19,  59 => 16,  55 => 14,  51 => 13,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {% if sessionUser is not null %}
            {% if sessionUser.idGroup >= 2 %}
                <section class=\"container--profil-info container my-5 py-5 rounded\">
                    <h2 class=\"text-center mb-5\">Nouvel article</h2>
                    <form method=\"post\" class=\"form-group\" enctype=\"multipart/form-data\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <ul class=\"list-group\">
                                    {% for error in new %}
                                        <li class=\"list-unstyled\">
                                            <span class=\"badge badge-warning\">Erreur</span>
                                            {{ error }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                        <div class=\"row justify-content-between\">
                            <div class=\"col-lg-4\">
                                <label for=\"article-name\" class=\"form-control-label\">
                                    Nom de l'Article
                                </label>
                                <input type=\"text\" id=\"article-name\" name=\"article_name\" class=\"form-control\"
                                       placeholder=\"Nom\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"article-coin\" class=\"form-control-label\">
                                    Prix de l'Article (en cuivre)
                                </label>
                                <input type=\"text\" id=\"article-coin\" name=\"article_coin\" class=\"form-control\"
                                       placeholder=\"Prix\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"article-img\" class=\"form-control-label\">
                                    Image de l'Article
                                </label>
                                <input type=\"file\" id=\"article-img\" name=\"article_img\" class=\"form-control\">
                            </div>
                        </div>

                        <div class=\"row justify-content-between my-5\">
                            <div class=\"col-lg-4\">
                                <label for=\"article-quality\" class=\"form-control-label\">
                                    Qualité de l'article
                                </label>
                                <select name=\"article_quality\" id=\"article-quality\" class=\"form-control\"
                                        size=\"5\">
                                    <optgroup label=\"Qualités\">
                                        {% for quality in qualityAll %}
                                            <option value=\"{{ quality.id }}\">{{ quality.name }}</option>
                                        {% endfor %}
                                    </optgroup>
                                </select>
                            </div>

                            <div class=\"col-lg-4\">
                                <label for=\"article-tab\" class=\"form-control-label\">
                                    Onglet de l'article
                                </label>
                                <select name=\"article_tab\" id=\"article-tab\" class=\"form-control\"
                                        size=\"5\">
                                    <optgroup label=\"Onglets\">
                                        {% for tab in tabAll %}
                                            <option value=\"{{ tab.id }}\">
                                                {{ tab.tab }}
                                            </option>
                                        {% endfor %}
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-12\">
                                <label for=\"article-description\" hidden></label>
                                <textarea name=\"article_description\" id=\"article-description\"
                                          cols=\"30\"
                                          rows=\"10\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        {% if sessionUser.idGroup >= 2 %}
                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"new_submit\">
                                    Créer
                                </button>
                            </div>
                        {% endif %}
                    </form>
                </section>
            {% endif %}
        {% endif %}
    </main>
{% endblock main %}", "/store/newArticleCommonEdit.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\edit\\store\\newArticleCommonEdit.twig");
    }
}
