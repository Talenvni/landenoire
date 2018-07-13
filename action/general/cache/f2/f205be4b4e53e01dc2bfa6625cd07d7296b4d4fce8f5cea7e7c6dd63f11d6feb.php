<?php

/* /store/singleStoreCommonIndex.twig */
class __TwigTemplate_47a503d6382c98170a085f9bb4680e59ab1cfb5d5b040df61c90afefd156120f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/store/singleStoreCommonIndex.twig", 1);
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
            // line 7
            echo "            <section class=\"container--profil-info container my-5 py-5 rounded\">
                <h1 class=\"text-center mb-5 text-ln-gold\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", array()), "html", null, true);
            echo "</h1>
                <div class=\"d-flex flex-lg-row flex-column\">
                    ";
            // line 11
            echo "                    <div class=\"col-lg-4 offset-lg-1 mb-3 mb-lg-0 text-center\">
                        ";
            // line 12
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "img", array()))) {
                // line 13
                echo "                            <div class=\"row flex-column align-items-center\">
                                <img src=\"/web/img/store/";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "img", array()), "html", null, true);
                echo "\"
                                     alt=\"Article\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
                            </div>
                        ";
            } else {
                // line 18
                echo "                            <div class=\"row flex-column align-items-center\">
                                <img src=\"/web/img/avatar/default.png\"
                                     alt=\"Avatar\" class=\"img-fluid rounded\">
                            </div>
                        ";
            }
            // line 23
            echo "                    </div>
                    ";
            // line 25
            echo "                    <div class=\"profil--info-list col-lg-6 p-4 rounded\">
                        <div class=\"container-fluid\">
                            <div class=\"container\">
                                <div class=\"row flex-column\" style=\"min-height: 45vh;\">
                                    <div>
                                        <h3>Description</h3>
                                        ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", array());
            echo "
                                    </div>
                                    <div class=\"mt-auto row text-center\">
                                        <div class=\"col-lg-6\">
                                            Type : <span style=\"color: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "color", array()), "html", null, true);
            echo "\">
                                                ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "qualityName", array()), "html", null, true);
            echo "
                                            </span>
                                        </div>
                                        <div class=\"col-lg-6\">
                                            Prix :
                                            ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "gold", array()), "html", null, true);
            echo " <span class=\"gold\">or.</span>
                                            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "silver", array()), "html", null, true);
            echo " <span class=\"silver\">ar.</span>
                                            ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "copper", array()), "html", null, true);
            echo " <span class=\"copper\">cu.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row justify-content-around mt-5\">
                    <a href=\"/store\" class=\"btn\">Retour</a>
                    <form method=\"post\">
                        <button class=\"btn\" name=\"buy_store\">Acheter</button>
                    </form>
                    <a href=\"/store/edit-";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn\">Éditer</a>
                </div>
            </section>

            ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                // line 62
                echo "                <section class=\"container--profil-info container my-5 py-5 rounded\">
                    <h1 class=\"text-center mb-4 text-ln-gold\">Offrir l'objet</h1>
                    <form method=\"post\" class=\"form-group\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-4\">
                                <label for=\"offert\" class=\"form-control-label\">
                                    Utilisateur à offrir
                                </label>
                                <select name=\"offert\" id=\"offert\" class=\"form-control\" size=\"5\">
                                    <optgroup label=\"Utilisateurs\">
                                        ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offert"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 73
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        ";
                // line 79
                if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                    // line 80
                    echo "                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"offert_submit\">
                                    Offrir
                                </button>
                            </div>
                        ";
                }
                // line 86
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
            // line 97
            echo "        ";
        }
        // line 98
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "/store/singleStoreCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 98,  192 => 97,  179 => 86,  171 => 80,  169 => 79,  163 => 75,  152 => 73,  148 => 72,  136 => 62,  134 => 61,  127 => 57,  110 => 43,  106 => 42,  102 => 41,  94 => 36,  90 => 35,  83 => 31,  75 => 25,  72 => 23,  65 => 18,  58 => 14,  55 => 13,  53 => 12,  50 => 11,  45 => 8,  42 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {% if sessionUser is not null %}
            {# Info Tab #}
            <section class=\"container--profil-info container my-5 py-5 rounded\">
                <h1 class=\"text-center mb-5 text-ln-gold\">{{ article.name }}</h1>
                <div class=\"d-flex flex-lg-row flex-column\">
                    {# Avatar #}
                    <div class=\"col-lg-4 offset-lg-1 mb-3 mb-lg-0 text-center\">
                        {% if article.img is not null %}
                            <div class=\"row flex-column align-items-center\">
                                <img src=\"/web/img/store/{{ article.img }}\"
                                     alt=\"Article\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
                            </div>
                        {% else %}
                            <div class=\"row flex-column align-items-center\">
                                <img src=\"/web/img/avatar/default.png\"
                                     alt=\"Avatar\" class=\"img-fluid rounded\">
                            </div>
                        {% endif %}
                    </div>
                    {# Info #}
                    <div class=\"profil--info-list col-lg-6 p-4 rounded\">
                        <div class=\"container-fluid\">
                            <div class=\"container\">
                                <div class=\"row flex-column\" style=\"min-height: 45vh;\">
                                    <div>
                                        <h3>Description</h3>
                                        {{ article.description|raw }}
                                    </div>
                                    <div class=\"mt-auto row text-center\">
                                        <div class=\"col-lg-6\">
                                            Type : <span style=\"color: {{ article.color }}\">
                                                {{ article.qualityName }}
                                            </span>
                                        </div>
                                        <div class=\"col-lg-6\">
                                            Prix :
                                            {{ coin.gold }} <span class=\"gold\">or.</span>
                                            {{ coin.silver }} <span class=\"silver\">ar.</span>
                                            {{ coin.copper }} <span class=\"copper\">cu.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row justify-content-around mt-5\">
                    <a href=\"/store\" class=\"btn\">Retour</a>
                    <form method=\"post\">
                        <button class=\"btn\" name=\"buy_store\">Acheter</button>
                    </form>
                    <a href=\"/store/edit-{{ article.id }}\" class=\"btn\">Éditer</a>
                </div>
            </section>

            {% if sessionUser.idGroup >= 2 %}
                <section class=\"container--profil-info container my-5 py-5 rounded\">
                    <h1 class=\"text-center mb-4 text-ln-gold\">Offrir l'objet</h1>
                    <form method=\"post\" class=\"form-group\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-4\">
                                <label for=\"offert\" class=\"form-control-label\">
                                    Utilisateur à offrir
                                </label>
                                <select name=\"offert\" id=\"offert\" class=\"form-control\" size=\"5\">
                                    <optgroup label=\"Utilisateurs\">
                                        {% for user in offert %}
                                            <option value=\"{{ user.id }}\">{{ user.pseudo }}</option>
                                        {% endfor %}
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        {% if sessionUser.idGroup >= 2 %}
                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"offert_submit\">
                                    Offrir
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
{% endblock main %}", "/store/singleStoreCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\store\\singleStoreCommonIndex.twig");
    }
}
