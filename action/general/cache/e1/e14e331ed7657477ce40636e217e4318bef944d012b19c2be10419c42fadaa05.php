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
            echo "                <div class=\"row flex-column align-items-center\">
                    <img src=\"/web/img/avatar/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "avatar", array()), "html", null, true);
            echo "\"
                         alt=\"Avatar\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
                    <div class=\"d-flex justify-content-center bg-ln-gold rounded\" style=\"width: 250px;\">
                        <span class=\"text-ln-coal\">Niveau ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "level", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            ";
        } else {
            // line 15
            echo "                <div class=\"row flex-column align-items-center\">
                    <img src=\"/web/img/avatar/default.png\"
                         alt=\"Avatar\" class=\"img-fluid rounded\">
                    <div class=\"d-flex justify-content-center bg-ln-gold rounded\" style=\"width: 250px;\">
                        <span class=\"text-ln-coal\">Niveau ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "level", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            ";
        }
        // line 23
        echo "        </div>
        ";
        // line 25
        echo "        <div class=\"profil--info-list col-lg-6 p-4 rounded\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"col-lg-6\">
                        <li><span>Âge :</span>
                            ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()), "html", null, true);
        echo "
                            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()) == 1)) {
            echo "an";
        } elseif ((null === twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()))) {
            // line 32
            echo "                            ";
        } else {
            echo "ans";
        }
        // line 33
        echo "                        </li>
                        <li><span>Sexe :</span> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()), "html", null, true);
        echo "</li>
                        <li><span>Race :</span> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()), "html", null, true);
        echo "</li>
                    </ul>
                    <ul class=\"col-lg-6\">
                        <li>
                            <span>Richesse :</span>
                                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "gold", array()), "html", null, true);
        echo " <span class=\"gold\">or.</span>
                                ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "silver", array()), "html", null, true);
        echo " <span class=\"silver\">ar.</span>
                                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "copper", array()), "html", null, true);
        echo " <span class=\"copper\">cu.</span>
                        </li>
                        <li><span>Réputation :</span>
                            <span style=\"font-weight: normal;
                                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "reputation", array()) < 0)) {
            echo "color: crimson;
                            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 47
($context["showAccount"] ?? null), "reputation", array()) > 0)) {
            echo "color: forestgreen;
                                                ";
        }
        // line 48
        echo "\">
                                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "reputation", array()), "html", null, true);
        echo "
                            </span>
                        </li>
                        <li><span>Crédit Avatar :</span>
                            <a href=\"";
        // line 53
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
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"container\">
                    ";
        // line 68
        echo twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignText", array());
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 75
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showHeading"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["heading"]) {
            // line 76
            echo "        <div class=\"profil--info-block container my-5\">
            <h3>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
            echo "</h3>
            <hr class=\"mb-4\">
            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showParagraph"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idHeading", array()) == twig_get_attribute($this->env, $this->source, $context["heading"], "id", array()))) {
                    // line 80
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()))) {
                        // line 81
                        echo "                    <div class=\"p-3\">
                        ";
                        // line 82
                        echo twig_get_attribute($this->env, $this->source, $context["paragraph"], "content", array());
                        echo "
                    </div>
                ";
                    }
                    // line 85
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
    ";
        // line 90
        echo "    <div class=\"profil--info-block container my-5\">
        <h3>Inventaire</h3>
        <hr class=\"mb-4\">
        <div class=\"bg-transparent d-lg-flex justify-content-lg-between\" style=\"box-shadow: none;\">
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showInventory"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["inventory"]) {
            // line 97
            echo "                        <span style=\"color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "color", array()), "html", null, true);
            echo "\">
                            ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "name", array()), "html", null, true);
            echo "
                        </span> x ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "number", array()), "html", null, true);
            echo "
                        ";
            // line 100
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                // line 101
                echo "                        ,
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                </div>
            </div>
        </div>
    </div>

    ";
        // line 110
        echo "    <div class=\"profil--info-block container my-5\">
        <h3>Relation</h3>
        <hr class=\"mb-4\">
        <div class=\"bg-transparent d-lg-flex justify-content-lg-between\" style=\"box-shadow: none;\">
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <h5>Ennemi&middot;s</h5>
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    ";
        // line 117
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
            // line 118
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["vote"], "disliked", array()) == 1)) {
                // line 119
                echo "                            <span class=\"text-danger\">
                                ";
                // line 120
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 121
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vote"], "pseudo", array()), "html", null, true);
                    echo ",
                                ";
                }
                // line 123
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 124
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vote"], "pseudo", array()), "html", null, true);
                    echo ".
                                ";
                }
                // line 126
                echo "                            </span>
                        ";
            }
            // line 128
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
        // line 129
        echo "                </div>
            </div>
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <h5>Ami&middot;s</h5>
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showVote"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
            // line 135
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["vote"], "liked", array()) == 1)) {
                // line 136
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vote"], "pseudo", array()), "html", null, true);
                echo ".&nbsp;</span>
                        ";
            }
            // line 138
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                </div>
            </div>
        </div>
        ";
        // line 142
        if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) != twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) &&  !(null === ($context["sessionUser"] ?? null)))) {
            // line 143
            echo "            <form method=\"post\" class=\"d-flex flex-column flex-lg-row justify-content-around align-items-center\">
                <button name=\"ennemi\" type=\"submit\" class=\"btn mt-4\"
                        ";
            // line 145
            if (((twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "idPoster", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "disliked", array()) == 1))) {
                // line 146
                echo "                disabled
                        ";
            }
            // line 147
            echo ">
                    Je déprécie ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                </button>
                <button name=\"friend\" type=\"submit\" class=\"btn mt-4\"
                        ";
            // line 151
            if (((twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "idPoster", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) && (twig_get_attribute($this->env, $this->source, ($context["selectVote"] ?? null), "liked", array()) == 1))) {
                // line 152
                echo "                disabled
                        ";
            }
            // line 153
            echo ">
                    J'apprécie ";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 158
        echo "    </div>

    ";
        // line 160
        if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
            // line 161
            echo "        <div class=\"text-center\">
            <a href=\"/account/character-";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
            echo "/parameter\"
               class=\"btn\">Modifier le profil</a>
        </div>
    ";
        }
        // line 166
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
        return array (  426 => 166,  419 => 162,  416 => 161,  414 => 160,  410 => 158,  403 => 154,  400 => 153,  396 => 152,  394 => 151,  388 => 148,  385 => 147,  381 => 146,  379 => 145,  375 => 143,  373 => 142,  368 => 139,  362 => 138,  356 => 136,  353 => 135,  349 => 134,  342 => 129,  328 => 128,  324 => 126,  318 => 124,  315 => 123,  309 => 121,  307 => 120,  304 => 119,  301 => 118,  284 => 117,  275 => 110,  268 => 104,  254 => 103,  250 => 101,  248 => 100,  244 => 99,  240 => 98,  235 => 97,  218 => 96,  210 => 90,  207 => 88,  200 => 86,  193 => 85,  187 => 82,  184 => 81,  181 => 80,  176 => 79,  171 => 77,  168 => 76,  163 => 75,  154 => 68,  147 => 64,  133 => 53,  126 => 49,  123 => 48,  118 => 47,  114 => 46,  107 => 42,  103 => 41,  99 => 40,  91 => 35,  87 => 34,  84 => 33,  79 => 32,  75 => 31,  71 => 30,  64 => 25,  61 => 23,  54 => 19,  48 => 15,  41 => 11,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Info Tab #}
<section class=\"container--profil-info container my-5 py-5 rounded\">
    <div class=\"d-flex flex-lg-row flex-column\">
        {# Avatar #}
        <div class=\"col-lg-4 offset-lg-1 mb-3 mb-lg-0 text-center\">
            {% if showAccount.avatar is not null %}
                <div class=\"row flex-column align-items-center\">
                    <img src=\"/web/img/avatar/{{ showAccount.avatar }}\"
                         alt=\"Avatar\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
                    <div class=\"d-flex justify-content-center bg-ln-gold rounded\" style=\"width: 250px;\">
                        <span class=\"text-ln-coal\">Niveau {{ showAccount.level }}</span>
                    </div>
                </div>
            {% else %}
                <div class=\"row flex-column align-items-center\">
                    <img src=\"/web/img/avatar/default.png\"
                         alt=\"Avatar\" class=\"img-fluid rounded\">
                    <div class=\"d-flex justify-content-center bg-ln-gold rounded\" style=\"width: 250px;\">
                        <span class=\"text-ln-coal\">Niveau {{ showAccount.level }}</span>
                    </div>
                </div>
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
                                {{ coin.gold }} <span class=\"gold\">or.</span>
                                {{ coin.silver }} <span class=\"silver\">ar.</span>
                                {{ coin.copper }} <span class=\"copper\">cu.</span>
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
                    {{ showAccount.alignText|raw }}
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
                {% if paragraph.idUser == showAccount.id %}
                    <div class=\"p-3\">
                        {{ paragraph.content|raw }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endfor %}

    {# Relation #}
    <div class=\"profil--info-block container my-5\">
        <h3>Inventaire</h3>
        <hr class=\"mb-4\">
        <div class=\"bg-transparent d-lg-flex justify-content-lg-between\" style=\"box-shadow: none;\">
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    {% for inventory in showInventory %}
                        <span style=\"color: {{ inventory.color }}\">
                            {{ inventory.name }}
                        </span> x {{ inventory.number }}
                        {% if not loop.last %}
                        ,
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

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
