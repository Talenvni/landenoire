<?php

/* /account/profilTabPreference.twig */
class __TwigTemplate_3d12138064c07a7c57653c64ad8244d91b69631e5d9161e5b90a8224c3f6fc0a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<section class=\"container--profil-info container my-5 pb-5 rounded\">
    ";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "has_edit", array()) == 0)) {
            // line 5
            echo "        <div class=\"d-flex justify-content-center mt-5\">
            <div class=\"profil--info-list py-4 container rounded\">
                <div class=\"row d-flex justify-content-center text-center\">
                    <h2>Modifier la fiche</h2>
                </div>
                <hr class=\"mt-0 mb-4\">
                <form id=\"traits\" method=\"post\" class=\"form-group\">
                    <div class=\"row my-4\">
                        <div class=\"col-lg-12\">
                            Total des points : <span id=\"total-traits\"></span>
                        </div>
                    </div>
                    <div class=\"row justify-content-between\">
                        <div class=\"col-lg-2\">
                            <label for=\"intellect\" class=\"form-control-label\">
                                Intellect
                            </label>
                            <input name=\"intellect\" type=\"number\" id=\"intellect\" class=\"form-control\"
                                   value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "intellect", array()), "html", null, true);
            echo "\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"physique\" class=\"form-control-label\">
                                Physique
                            </label>
                            <input name=\"physique\" type=\"number\" id=\"physique\" class=\"form-control\"
                                   value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "physique", array()), "html", null, true);
            echo "\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"dexterite\" class=\"form-control-label\">
                                Dextérité
                            </label>
                            <input name=\"dexterite\" type=\"number\" id=\"dexterite\" class=\"form-control\"
                                   value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "dexterite", array()), "html", null, true);
            echo "\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"social\" class=\"form-control-label\">
                                Social
                            </label>
                            <input name=\"social\" type=\"number\" id=\"social\" class=\"form-control\"
                                   value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "social", array()), "html", null, true);
            echo "\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"artisanat\" class=\"form-control-label\">
                                Artisanat
                            </label>
                            <input name=\"artisanat\" type=\"number\" id=\"artisanat\" class=\"form-control\"
                                   value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "artisanat", array()), "html", null, true);
            echo "\" min=\"0\" max=\"40\">
                        </div>
                    </div>

                    <div class=\"row justify-content-between my-4\">
                        <div class=\"col-lg-4\">
                            <label for=\"age\" class=\"form-control-label\">
                                Âge de ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                            </label>
                            <input type=\"date\" name=\"age\" class=\"form-control\" placeholder=\"Âge\"
                                   value=\"";
            // line 61
            if ((null === twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()))) {
                echo "1200-01-01";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "birthday", array()), "html", null, true);
            }
            echo "\">
                        </div>
                        <div class=\"col-lg-4\">
                            <label for=\"sexe\" class=\"form-control-label\">
                                Sexe de ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                            </label>
                            <select name=\"sexe\" id=\"sexe\" class=\"form-control\">
                                <option value=\"neutre\" ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()) == "neutre")) {
                echo "selected
                                        ";
            }
            // line 69
            echo ">Neutre
                                </option>
                                <option value=\"femme\" ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()) == "femme")) {
                echo "selected
                                        ";
            }
            // line 72
            echo ">Femme
                                </option>
                                <option value=\"homme\" ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()) == "homme")) {
                echo "selected
                                        ";
            }
            // line 75
            echo ">Homme
                                </option>
                            </select>
                        </div>
                        <div class=\"col-lg-4\">
                            <label for=\"race\" class=\"form-control-label\">
                                Race de ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                            </label>
                            <select name=\"race\" id=\"race\" class=\"form-control\">
                                <option value=\"humain\" ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "humain")) {
                echo "selected
                                        ";
            }
            // line 85
            echo ">Humain
                                </option>
                                <option value=\"automate\" ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "automate")) {
                echo "selected
                                        ";
            }
            // line 88
            echo ">Automate
                                </option>
                                <option value=\"malemort\" ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "malemort")) {
                echo "selected
                                        ";
            }
            // line 91
            echo ">Malemort
                                </option>
                                <option value=\"ondin\" ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "ondin")) {
                echo "selected
                                        ";
            }
            // line 94
            echo ">Ondin
                                </option>
                            </select>
                        </div>
                    </div>

                    ";
            // line 100
            if (((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "has_edit", array()) == 0))) {
                // line 101
                echo "                        <div class=\"row justify-content-center mt-4\">
                            <button type=\"submit\" class=\"btn\" name=\"sheet_submit\">
                                Accepter
                            </button>
                        </div>
                    ";
            }
            // line 107
            echo "                    <div class=\"row mt-4 justify-content-center\">
                        <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                        <ul class=\"col-lg-9 text-center text-lg-left\">
                            <li class=\"font-italic col-lg-10 text-warning\">
                                Vous ne pouvez modifier cette fiche
                                <span class=\"text-uppercase\">qu'une seul fois</span>.
                            </li>
                            <li class=\"font-italic col-lg-10\">
                                Un total maximum de <strong>40</strong> points dans vos caractéristiques.
                            </li>
                            <li class=\"font-italic col-lg-10\">
                                Date de naissance : en 2018, nous sommes en l'an 1203.
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    ";
        }
        // line 126
        echo "
    <div class=\"d-flex justify-content-center mt-5\">
        <div class=\"profil--info-list py-4 container rounded\">
            <div class=\"row d-flex justify-content-center text-center\">
                <h2>Vendre l'inventaire</h2>
            </div>
            <hr class=\"mt-0 mb-4\">
            <form method=\"post\" class=\"form-group\">
                <div class=\"row justify-content-between\">
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showQuality"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quality"]) {
            // line 136
            echo "                        <div class=\"col-lg-3\">
                            <label for=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array())), "html", null, true);
            echo "\" class=\"form-control-label\">
                                Objets <span style=\"color: ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array()), "html", null, true);
            echo "s</span>
                            </label>
                            <select name=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array())), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array())), "html", null, true);
            echo "\"
                                    class=\"form-control\" size=\"5\">
                                <optgroup label=\"Objets\">
                                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showInventory"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["inventory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["inventory"], "quality", array()) == twig_get_attribute($this->env, $this->source, $context["quality"], "name", array()))) {
                    // line 144
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "id", array()), "html", null, true);
                    echo "\">
                                            ";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "name", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "number", array()), "html", null, true);
                    echo "
                                        </option>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "                                </optgroup>
                            </select>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                </div>

                ";
        // line 154
        if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()))) {
            // line 155
            echo "                    <div class=\"row justify-content-center mt-4\">
                        <button type=\"submit\" class=\"btn\" name=\"inventory_submit\">
                            Vendre
                        </button>
                    </div>
                ";
        }
        // line 161
        echo "                <div class=\"row mt-4 justify-content-center\">
                    <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                    <ul class=\"col-lg-9 text-center text-lg-left\">
                        <li class=\"font-italic col-lg-10\">
                            Permet de vendre ses objets.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Le gain reçu varie uniquement selon la qualité, pas l'objet.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Il n'est possible de vendre qu'un objet par qualité à la fois.
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/account/profilTabPreference.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 161,  304 => 155,  302 => 154,  298 => 152,  289 => 148,  277 => 145,  272 => 144,  267 => 143,  259 => 140,  252 => 138,  248 => 137,  245 => 136,  241 => 135,  230 => 126,  209 => 107,  201 => 101,  199 => 100,  191 => 94,  186 => 93,  182 => 91,  177 => 90,  173 => 88,  168 => 87,  164 => 85,  159 => 84,  153 => 81,  145 => 75,  140 => 74,  136 => 72,  131 => 71,  127 => 69,  122 => 68,  116 => 65,  105 => 61,  99 => 58,  89 => 51,  79 => 44,  69 => 37,  59 => 30,  49 => 23,  29 => 5,  27 => 4,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Preference Tab #}

<section class=\"container--profil-info container my-5 pb-5 rounded\">
    {% if showAccount.has_edit == 0 %}
        <div class=\"d-flex justify-content-center mt-5\">
            <div class=\"profil--info-list py-4 container rounded\">
                <div class=\"row d-flex justify-content-center text-center\">
                    <h2>Modifier la fiche</h2>
                </div>
                <hr class=\"mt-0 mb-4\">
                <form id=\"traits\" method=\"post\" class=\"form-group\">
                    <div class=\"row my-4\">
                        <div class=\"col-lg-12\">
                            Total des points : <span id=\"total-traits\"></span>
                        </div>
                    </div>
                    <div class=\"row justify-content-between\">
                        <div class=\"col-lg-2\">
                            <label for=\"intellect\" class=\"form-control-label\">
                                Intellect
                            </label>
                            <input name=\"intellect\" type=\"number\" id=\"intellect\" class=\"form-control\"
                                   value=\"{{ competence.intellect }}\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"physique\" class=\"form-control-label\">
                                Physique
                            </label>
                            <input name=\"physique\" type=\"number\" id=\"physique\" class=\"form-control\"
                                   value=\"{{ competence.physique }}\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"dexterite\" class=\"form-control-label\">
                                Dextérité
                            </label>
                            <input name=\"dexterite\" type=\"number\" id=\"dexterite\" class=\"form-control\"
                                   value=\"{{ competence.dexterite }}\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"social\" class=\"form-control-label\">
                                Social
                            </label>
                            <input name=\"social\" type=\"number\" id=\"social\" class=\"form-control\"
                                   value=\"{{ competence.social }}\" min=\"0\" max=\"40\">
                        </div>
                        <div class=\"col-lg-2\">
                            <label for=\"artisanat\" class=\"form-control-label\">
                                Artisanat
                            </label>
                            <input name=\"artisanat\" type=\"number\" id=\"artisanat\" class=\"form-control\"
                                   value=\"{{ competence.artisanat }}\" min=\"0\" max=\"40\">
                        </div>
                    </div>

                    <div class=\"row justify-content-between my-4\">
                        <div class=\"col-lg-4\">
                            <label for=\"age\" class=\"form-control-label\">
                                Âge de {{ showAccount.pseudo }}
                            </label>
                            <input type=\"date\" name=\"age\" class=\"form-control\" placeholder=\"Âge\"
                                   value=\"{% if showAccount.age is null %}1200-01-01{% else %}{{ showAccount.birthday }}{% endif %}\">
                        </div>
                        <div class=\"col-lg-4\">
                            <label for=\"sexe\" class=\"form-control-label\">
                                Sexe de {{ showAccount.pseudo }}
                            </label>
                            <select name=\"sexe\" id=\"sexe\" class=\"form-control\">
                                <option value=\"neutre\" {% if showAccount.sexe == 'neutre' %}selected
                                        {% endif %}>Neutre
                                </option>
                                <option value=\"femme\" {% if showAccount.sexe == 'femme' %}selected
                                        {% endif %}>Femme
                                </option>
                                <option value=\"homme\" {% if showAccount.sexe == 'homme' %}selected
                                        {% endif %}>Homme
                                </option>
                            </select>
                        </div>
                        <div class=\"col-lg-4\">
                            <label for=\"race\" class=\"form-control-label\">
                                Race de {{ showAccount.pseudo }}
                            </label>
                            <select name=\"race\" id=\"race\" class=\"form-control\">
                                <option value=\"humain\" {% if showAccount.race == 'humain' %}selected
                                        {% endif %}>Humain
                                </option>
                                <option value=\"automate\" {% if showAccount.race == 'automate' %}selected
                                        {% endif %}>Automate
                                </option>
                                <option value=\"malemort\" {% if showAccount.race == 'malemort' %}selected
                                        {% endif %}>Malemort
                                </option>
                                <option value=\"ondin\" {% if showAccount.race == 'ondin' %}selected
                                        {% endif %}>Ondin
                                </option>
                            </select>
                        </div>
                    </div>

                    {% if sessionUser.id == showAccount.id and showAccount.has_edit == 0 %}
                        <div class=\"row justify-content-center mt-4\">
                            <button type=\"submit\" class=\"btn\" name=\"sheet_submit\">
                                Accepter
                            </button>
                        </div>
                    {% endif %}
                    <div class=\"row mt-4 justify-content-center\">
                        <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                        <ul class=\"col-lg-9 text-center text-lg-left\">
                            <li class=\"font-italic col-lg-10 text-warning\">
                                Vous ne pouvez modifier cette fiche
                                <span class=\"text-uppercase\">qu'une seul fois</span>.
                            </li>
                            <li class=\"font-italic col-lg-10\">
                                Un total maximum de <strong>40</strong> points dans vos caractéristiques.
                            </li>
                            <li class=\"font-italic col-lg-10\">
                                Date de naissance : en 2018, nous sommes en l'an 1203.
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    {% endif %}

    <div class=\"d-flex justify-content-center mt-5\">
        <div class=\"profil--info-list py-4 container rounded\">
            <div class=\"row d-flex justify-content-center text-center\">
                <h2>Vendre l'inventaire</h2>
            </div>
            <hr class=\"mt-0 mb-4\">
            <form method=\"post\" class=\"form-group\">
                <div class=\"row justify-content-between\">
                    {% for quality in showQuality %}
                        <div class=\"col-lg-3\">
                            <label for=\"{{ quality.name|lower }}\" class=\"form-control-label\">
                                Objets <span style=\"color: {{ quality.color }}\">{{ quality.name }}s</span>
                            </label>
                            <select name=\"{{ quality.name|lower }}\" id=\"{{ quality.name|lower }}\"
                                    class=\"form-control\" size=\"5\">
                                <optgroup label=\"Objets\">
                                    {% for inventory in showInventory if inventory.quality == quality.name %}
                                        <option value=\"{{ inventory.id }}\">
                                            {{ inventory.name }} x {{ inventory.number }}
                                        </option>
                                    {% endfor %}
                                </optgroup>
                            </select>
                        </div>
                    {% endfor %}
                </div>

                {% if sessionUser.id == showAccount.id %}
                    <div class=\"row justify-content-center mt-4\">
                        <button type=\"submit\" class=\"btn\" name=\"inventory_submit\">
                            Vendre
                        </button>
                    </div>
                {% endif %}
                <div class=\"row mt-4 justify-content-center\">
                    <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                    <ul class=\"col-lg-9 text-center text-lg-left\">
                        <li class=\"font-italic col-lg-10\">
                            Permet de vendre ses objets.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Le gain reçu varie uniquement selon la qualité, pas l'objet.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Il n'est possible de vendre qu'un objet par qualité à la fois.
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>", "/account/profilTabPreference.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilTabPreference.twig");
    }
}
