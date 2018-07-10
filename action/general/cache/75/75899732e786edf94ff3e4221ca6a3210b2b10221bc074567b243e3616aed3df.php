<?php

/* /store/storeCommonEdit.twig */
class __TwigTemplate_67d93b637f479ca70a9503115901e70d957cecd6d1a9e63a4118965e66dbbd5d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/store/storeCommonEdit.twig", 1);
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
                    <h2 class=\"text-center mb-5\">Éditer ";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", array()), "html", null, true);
                echo "</h2>
                    <form method=\"post\" class=\"form-group\" enctype=\"multipart/form-data\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <ul class=\"list-group\">
                                    ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["edit"] ?? null));
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
                                       placeholder=\"Nom\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", array()), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"article-coin\" class=\"form-control-label\">
                                    Prix de l'Article (en cuivre)
                                </label>
                                <input type=\"text\" id=\"article-coin\" name=\"article_coin\" class=\"form-control\"
                                       placeholder=\"Prix\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "coin", array()), "html", null, true);
                echo "\">
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
                    echo "\"
                                                    ";
                    // line 55
                    if ((twig_get_attribute($this->env, $this->source, $context["quality"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "idQuality", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quality'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
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
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tabAll"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 69
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "id", array()), "html", null, true);
                    echo "\"
                                                    ";
                    // line 70
                    if ((twig_get_attribute($this->env, $this->source, $context["tab"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "idTab", array()))) {
                        echo "selected";
                    }
                    echo ">
                                                ";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "tab", array()), "html", null, true);
                    echo "
                                            </option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-12\">
                                <label for=\"article-description\" hidden></label>
                                <textarea name=\"article_description\" id=\"article-description\"
                                          cols=\"30\"
                                          rows=\"10\" class=\"form-control\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", array()), "html", null, true);
                echo "</textarea>
                            </div>
                        </div>
                        ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                    // line 88
                    echo "                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"edit_submit\">
                                    Éditer
                                </button>
                            </div>
                        ";
                }
                // line 94
                echo "                        <div class=\"row mt-4 justify-content-center\">
                            <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                            <ul class=\"col-lg-9 text-center text-lg-left list-unstyled\">
                                <li class=\"font-italic col-lg-10\">
                                    Offrir l'article si l'utilisateur l'a gagné uniquement.
                                </li>
                            </ul>
                        </div>
                    </form>
                </section>
            ";
            }
            // line 105
            echo "        ";
        }
        // line 106
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "/store/storeCommonEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 106,  212 => 105,  199 => 94,  191 => 88,  189 => 87,  183 => 84,  171 => 74,  162 => 71,  156 => 70,  151 => 69,  147 => 68,  134 => 57,  122 => 55,  117 => 54,  113 => 53,  92 => 35,  82 => 28,  71 => 19,  62 => 16,  58 => 14,  54 => 13,  46 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {% if sessionUser is not null %}
            {% if sessionUser.idGroup >= 2 %}
                <section class=\"container--profil-info container my-5 py-5 rounded\">
                    <h2 class=\"text-center mb-5\">Éditer {{ article.name }}</h2>
                    <form method=\"post\" class=\"form-group\" enctype=\"multipart/form-data\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <ul class=\"list-group\">
                                    {% for error in edit %}
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
                                       placeholder=\"Nom\" value=\"{{ article.name }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"article-coin\" class=\"form-control-label\">
                                    Prix de l'Article (en cuivre)
                                </label>
                                <input type=\"text\" id=\"article-coin\" name=\"article_coin\" class=\"form-control\"
                                       placeholder=\"Prix\" value=\"{{ article.coin }}\">
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
                                            <option value=\"{{ quality.id }}\"
                                                    {% if quality.id == article.idQuality %}selected{% endif %}>{{ quality.name }}</option>
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
                                            <option value=\"{{ tab.id }}\"
                                                    {% if tab.id == article.idTab %}selected{% endif %}>
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
                                          rows=\"10\" class=\"form-control\">{{ article.description }}</textarea>
                            </div>
                        </div>
                        {% if sessionUser.idGroup >= 2 %}
                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"edit_submit\">
                                    Éditer
                                </button>
                            </div>
                        {% endif %}
                        <div class=\"row mt-4 justify-content-center\">
                            <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                            <ul class=\"col-lg-9 text-center text-lg-left list-unstyled\">
                                <li class=\"font-italic col-lg-10\">
                                    Offrir l'article si l'utilisateur l'a gagné uniquement.
                                </li>
                            </ul>
                        </div>
                    </form>
                </section>
            {% endif %}
        {% endif %}
    </main>
{% endblock main %}", "/store/storeCommonEdit.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\edit\\store\\storeCommonEdit.twig");
    }
}
