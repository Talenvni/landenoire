<?php

/* /account/profilTabInfo.twig */
class __TwigTemplate_4787ac489f1c787686cf419071e9dacba75b4d0153de767411d17e488c265985 extends Twig_Template
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
        echo "<section class=\"container--profil-info container my-5 py-5 rounded\">
    <div class=\"d-flex flex-lg-row flex-column\">
        ";
        // line 5
        echo "        <div class=\"col-lg-4 offset-lg-1 mb-3 mb-lg-0 text-center\">
            ";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "avatar", array()))) {
            // line 7
            echo "                <img src=\"/web/img/avatar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "avatar", array()), "html", null, true);
            echo "\"
                     alt=\"Avatar\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
            ";
        } else {
            // line 10
            echo "                <img src=\"/web/img/avatar/default.png\"
                     alt=\"Avatar\" class=\"img-fluid rounded\">
            ";
        }
        // line 13
        echo "        </div>
        ";
        // line 15
        echo "        <div class=\"profil--info-list col-lg-6 p-4 rounded\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"col-lg-6\">
                        <li><span>Âge :</span>
                            ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()), "html", null, true);
        echo "
                            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()) == 1)) {
            echo "an";
        } elseif ((null === twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()))) {
            // line 22
            echo "                            ";
        } else {
            echo "ans";
        }
        // line 23
        echo "                        </li>
                        <li><span>Sexe :</span> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()), "html", null, true);
        echo "</li>
                        <li><span>Race :</span> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()), "html", null, true);
        echo "</li>
                    </ul>
                    <ul class=\"col-lg-6\">
                        <li>
                            <span>Richesse :</span>
                            ";
        // line 30
        if (($context["showCoin"] ?? null)) {
            // line 31
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "gold", array()), "html", null, true);
            echo " <span class=\"gold\">or.</span>
                                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "silver", array()), "html", null, true);
            echo " <span class=\"silver\">ar.</span>
                                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "copper", array()), "html", null, true);
            echo " <span class=\"copper\">cu.</span>
                            ";
        }
        // line 35
        echo "                        </li>
                        <li><span>Réputation :</span>
                            <span style=\"font-weight: normal;
                                    ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "reputation", array()) < 0)) {
            echo "color: crimson;
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 39
($context["showAccount"] ?? null), "reputation", array()) > 0)) {
            echo "color: forestgreen;
                                                ";
        }
        // line 40
        echo "\">
                                ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "reputation", array()), "html", null, true);
        echo "
                            </span>
                        </li>
                        <li><span>Crédit Avatar :</span>
                            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "creditAvatar", array()), "html", null, true);
        echo "\" target=\"_blank\">
                                Lien direct
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class=\"container row\">
                    <div class=\"d-block\">
                        <a href=\"/codex/align\" target=\"_blank\" class=\"h3\">Alignement</a>
                        <span class=\"h3\">-</span>
                        <span class=\"h3\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"container\">
                    <p class=\"text-justify\">";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignText", array());
        echo "</p>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 67
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showHeading"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["heading"]) {
            // line 68
            echo "        <div class=\"profil--info-block container my-5\">
            <h3>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
            echo "</h3>
            <hr class=\"mb-4\">
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showParagraph"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idHeading", array()) == twig_get_attribute($this->env, $this->source, $context["heading"], "id", array()))) {
                    // line 72
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, $context["paragraph"], "showContent", array()) == 1))) {
                        // line 73
                        echo "                    <div class=\"p-3\">
                        ";
                        // line 74
                        echo twig_get_attribute($this->env, $this->source, $context["paragraph"], "content", array());
                        echo "
                    </div>
                ";
                    }
                    // line 77
                    echo "                ";
                    if (((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, $context["paragraph"], "showContent", array()) == 0))) {
                        // line 78
                        echo "                    <p>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                        echo " ne souhaite pas partager ce contenu.</p>
                ";
                    }
                    // line 80
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
    ";
        // line 85
        echo "    <div class=\"profil--info-block container my-5\">
        <h3>Relation</h3>
        <hr class=\"mb-4\">
        <div class=\"bg-transparent d-lg-flex justify-content-lg-between\" style=\"box-shadow: none;\">
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <h5>Ennemi&middot;s</h5>
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showVote"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
            // line 93
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["vote"], "disliked", array()) == 1)) {
                // line 94
                echo "                            <span class=\"text-danger\">
                                ";
                // line 95
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 96
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vote"], "pseudo", array()), "html", null, true);
                    echo ",
                                ";
                }
                // line 98
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 99
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vote"], "pseudo", array()), "html", null, true);
                    echo ".
                                ";
                }
                // line 101
                echo "                            </span>
                        ";
            }
            // line 103
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                </div>
            </div>
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <h5>Ami&middot;s</h5>
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showVote"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
            // line 110
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["vote"], "liked", array()) == 1)) {
                // line 111
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vote"], "pseudo", array()), "html", null, true);
                echo ".&nbsp;</span>
                        ";
            }
            // line 113
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </div>
            </div>
        </div>
        ";
        // line 117
        if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) != twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) &&  !(null === ($context["sessionUser"] ?? null)))) {
            // line 118
            echo "            <form method=\"post\" class=\"d-flex flex-column flex-lg-row justify-content-around align-items-center\">
                <button name=\"ennemi\" type=\"submit\" class=\"btn mt-4\"
                        ";
            // line 120
            if (((twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "idPoster", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "disliked", array()) == 1))) {
                // line 121
                echo "                            disabled
                        ";
            }
            // line 122
            echo ">
                    Je déprécie ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                </button>
                <button name=\"friend\" type=\"submit\" class=\"btn mt-4\"
                        ";
            // line 126
            if (((twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "idPoster", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "liked", array()) == 1))) {
                // line 127
                echo "                            disabled
                        ";
            }
            // line 128
            echo ">
                    J'apprécie ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 133
        echo "    </div>

    ";
        // line 135
        if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
            // line 136
            echo "        <div class=\"text-center\">
            <a href=\"/account/character-";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
            echo "/parameter\"
               class=\"btn\">Modifier le profil</a>
        </div>
    ";
        }
        // line 141
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/account/profilTabInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 141,  352 => 137,  349 => 136,  347 => 135,  343 => 133,  336 => 129,  333 => 128,  329 => 127,  327 => 126,  321 => 123,  318 => 122,  314 => 121,  312 => 120,  308 => 118,  306 => 117,  301 => 114,  295 => 113,  289 => 111,  286 => 110,  282 => 109,  275 => 104,  261 => 103,  257 => 101,  251 => 99,  248 => 98,  242 => 96,  240 => 95,  237 => 94,  234 => 93,  217 => 92,  208 => 85,  205 => 83,  198 => 81,  191 => 80,  185 => 78,  182 => 77,  176 => 74,  173 => 73,  170 => 72,  165 => 71,  160 => 69,  157 => 68,  152 => 67,  143 => 60,  136 => 56,  122 => 45,  115 => 41,  112 => 40,  107 => 39,  103 => 38,  98 => 35,  93 => 33,  89 => 32,  84 => 31,  82 => 30,  74 => 25,  70 => 24,  67 => 23,  62 => 22,  58 => 21,  54 => 20,  47 => 15,  44 => 13,  39 => 10,  32 => 7,  30 => 6,  27 => 5,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Info Tab #}
<section class=\"container--profil-info container my-5 py-5 rounded\">
    <div class=\"d-flex flex-lg-row flex-column\">
        {# Avatar #}
        <div class=\"col-lg-4 offset-lg-1 mb-3 mb-lg-0 text-center\">
            {% if showAccount.avatar is not null %}
                <img src=\"/web/img/avatar/{{ showAccount.avatar }}\"
                     alt=\"Avatar\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
            {% else %}
                <img src=\"/web/img/avatar/default.png\"
                     alt=\"Avatar\" class=\"img-fluid rounded\">
            {% endif %}
        </div>
        {# Character sheet #}
        <div class=\"profil--info-list col-lg-6 p-4 rounded\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"col-lg-6\">
                        <li><span>Âge :</span>
                            {{ showAccount.age }}
                            {% if showAccount.age == 1 %}an{% elseif showAccount.age is null %}
                            {% else %}ans{% endif %}
                        </li>
                        <li><span>Sexe :</span> {{ showAccount.sexe }}</li>
                        <li><span>Race :</span> {{ showAccount.race }}</li>
                    </ul>
                    <ul class=\"col-lg-6\">
                        <li>
                            <span>Richesse :</span>
                            {% if showCoin %}
                                {{ showAccount.gold }} <span class=\"gold\">or.</span>
                                {{ showAccount.silver }} <span class=\"silver\">ar.</span>
                                {{ showAccount.copper }} <span class=\"copper\">cu.</span>
                            {% endif %}
                        </li>
                        <li><span>Réputation :</span>
                            <span style=\"font-weight: normal;
                                    {% if showAccount.reputation < 0 %}color: crimson;
                            {% elseif showAccount.reputation > 0 %}color: forestgreen;
                                                {% endif %}\">
                                {{ showAccount.reputation }}
                            </span>
                        </li>
                        <li><span>Crédit Avatar :</span>
                            <a href=\"{{ showAccount.creditAvatar }}\" target=\"_blank\">
                                Lien direct
                            </a>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class=\"container row\">
                    <div class=\"d-block\">
                        <a href=\"/codex/align\" target=\"_blank\" class=\"h3\">Alignement</a>
                        <span class=\"h3\">-</span>
                        <span class=\"h3\">{{ showAccount.alignement }}</span>
                    </div>
                </div>
                <div class=\"container\">
                    <p class=\"text-justify\">{{ showAccount.alignText|raw }}</p>
                </div>
            </div>
        </div>
    </div>

    {# Heading #}
    {% for heading in showHeading %}
        <div class=\"profil--info-block container my-5\">
            <h3>{{ heading.name }}</h3>
            <hr class=\"mb-4\">
            {% for paragraph in showParagraph if paragraph.idHeading == heading.id %}
                {% if paragraph.idUser == showAccount.id and paragraph.showContent == 1 %}
                    <div class=\"p-3\">
                        {{ paragraph.content|raw }}
                    </div>
                {% endif %}
                {% if paragraph.idUser == showAccount.id and paragraph.showContent == 0 %}
                    <p>{{ showAccount.pseudo }} ne souhaite pas partager ce contenu.</p>
                {% endif %}
            {% endfor %}
        </div>
    {% endfor %}

    {# Relation #}
    <div class=\"profil--info-block container my-5\">
        <h3>Relation</h3>
        <hr class=\"mb-4\">
        <div class=\"bg-transparent d-lg-flex justify-content-lg-between\" style=\"box-shadow: none;\">
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <h5>Ennemi&middot;s</h5>
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    {% for vote in showVote %}
                        {% if vote.disliked == 1 %}
                            <span class=\"text-danger\">
                                {% if not loop.last %}
                                    {{ vote.pseudo }},
                                {% endif %}
                                {% if loop.last %}
                                    {{ vote.pseudo }}.
                                {% endif %}
                            </span>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <h5>Ami&middot;s</h5>
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    {% for vote in showVote %}
                        {% if vote.liked == 1 %}
                            <span class=\"text-success\">{{ vote.pseudo }}.&nbsp;</span>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
        {% if showAccount.id != sessionUser.id and sessionUser is not null %}
            <form method=\"post\" class=\"d-flex flex-column flex-lg-row justify-content-around align-items-center\">
                <button name=\"ennemi\" type=\"submit\" class=\"btn mt-4\"
                        {% if selectVote.idPoster == sessionUser.id and selectVote.disliked == 1 %}
                            disabled
                        {% endif %}>
                    Je déprécie {{ showAccount.pseudo }}
                </button>
                <button name=\"friend\" type=\"submit\" class=\"btn mt-4\"
                        {% if selectVote.idPoster == sessionUser.id and selectVote.liked == 1 %}
                            disabled
                        {% endif %}>
                    J'apprécie {{ showAccount.pseudo }}
                </button>
            </form>
        {% endif %}
    </div>

    {% if showAccount.id == sessionUser.id or sessionUser.idGroup >= 2 %}
        <div class=\"text-center\">
            <a href=\"/account/character-{{ showAccount.id }}/parameter\"
               class=\"btn\">Modifier le profil</a>
        </div>
    {% endif %}
</section>", "/account/profilTabInfo.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilTabInfo.twig");
    }
}
