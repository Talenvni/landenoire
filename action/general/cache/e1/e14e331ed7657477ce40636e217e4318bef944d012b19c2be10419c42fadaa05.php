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
                    <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "creditAvatar", array()), "html", null, true);
            echo "\" target=\"_blank\" title=\"Accéder à l'auteur\">
                        <img src=\"/web/img/avatar/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "avatar", array()), "html", null, true);
            echo "\"
                             alt=\"Avatar\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
                    </a>
                    <div class=\"d-flex justify-content-center bg-ln-gold rounded\" style=\"width: 250px;\">
                        <span class=\"text-ln-coal\">Niveau ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "level", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            ";
        } else {
            // line 17
            echo "                <div class=\"row flex-column align-items-center\">
                    <img src=\"/web/img/avatar/default.png\"
                         alt=\"Avatar\" class=\"img-fluid rounded\">
                    <div class=\"d-flex justify-content-center bg-ln-gold rounded\" style=\"width: 250px;\">
                        <span class=\"text-ln-coal\">Niveau ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "level", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
            ";
        }
        // line 25
        echo "        </div>
        ";
        // line 27
        echo "        <div class=\"profil--info-list col-lg-6 p-4 rounded\">
            <div class=\"container\">
                <div>
                    <h3>Informations</h3>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"col-lg-6\">
                        <li><span>Âge :</span>
                            ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()), "html", null, true);
        echo "
                            ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()) == 1)) {
            echo "an";
        } elseif ((null === twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "age", array()))) {
            // line 39
            echo "                            ";
        } else {
            echo "ans";
        }
        // line 40
        echo "                        </li>
                        <li><span>Sexe :</span> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()), "html", null, true);
        echo "</li>
                        <li><span>Race :</span> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()), "html", null, true);
        echo "</li>
                    </ul>
                    <ul class=\"col-lg-6\">
                        <li>
                            <span>Richesse :</span>
                            ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "gold", array()), "html", null, true);
        echo " <span class=\"gold\">or.</span>
                            ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "silver", array()), "html", null, true);
        echo " <span class=\"silver\">ar.</span>
                            ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "copper", array()), "html", null, true);
        echo " <span class=\"copper\">cu.</span>
                        </li>
                        <li><span>Réputation :</span>
                            ";
        // line 52
        $context["reput"] = ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "reputation", array()) + ($context["voteLike"] ?? null)) - ($context["voteDislike"] ?? null));
        // line 53
        echo "                            <span style=\"font-weight: normal;
                                    ";
        // line 54
        if ((($context["reput"] ?? null) < 0)) {
            echo "color: #DA3B01;
                            ";
        } elseif ((        // line 55
($context["reput"] ?? null) >= 0)) {
            echo "color: #647C64;
                                                ";
        }
        // line 56
        echo "\">

                                ";
        // line 59
        echo "                                ";
        if (((($context["reput"] ?? null) >= 0) && (($context["reput"] ?? null) < 100))) {
            // line 60
            echo "                                    ";
            $context["grade"] = "anodin";
            // line 61
            echo "                                ";
        }
        // line 62
        echo "                                ";
        if (((($context["reput"] ?? null) >= 100) && (($context["reput"] ?? null) < 200))) {
            // line 63
            echo "                                    ";
            $context["grade"] = "familier";
            // line 64
            echo "                                ";
        }
        // line 65
        echo "                                ";
        if (((($context["reput"] ?? null) >= 200) && (($context["reput"] ?? null) < 300))) {
            // line 66
            echo "                                    ";
            $context["grade"] = "célèbre";
            // line 67
            echo "                                ";
        }
        // line 68
        echo "                                ";
        if (((($context["reput"] ?? null) >= 300) && (($context["reput"] ?? null) < 400))) {
            // line 69
            echo "                                    ";
            $context["grade"] = "héroïque";
            // line 70
            echo "                                ";
        }
        // line 71
        echo "                                ";
        if ((($context["reput"] ?? null) >= 400)) {
            // line 72
            echo "                                    ";
            $context["grade"] = "légendaire";
            // line 73
            echo "                                ";
        }
        // line 74
        echo "
                                ";
        // line 76
        echo "                                ";
        if (((($context["reput"] ?? null) < 0) && (($context["reput"] ?? null) >  -100))) {
            // line 77
            echo "                                    ";
            $context["grade"] = "méprisable";
            // line 78
            echo "                                ";
        }
        // line 79
        echo "                                ";
        if (((($context["reput"] ?? null) <=  -100) && (($context["reput"] ?? null) >  -200))) {
            // line 80
            echo "                                    ";
            $context["grade"] = "exécrable";
            // line 81
            echo "                                ";
        }
        // line 82
        echo "                                ";
        if (((($context["reput"] ?? null) <=  -200) && (($context["reput"] ?? null) >  -300))) {
            // line 83
            echo "                                    ";
            $context["grade"] = "effrayant";
            // line 84
            echo "                                ";
        }
        // line 85
        echo "                                ";
        if (((($context["reput"] ?? null) <=  -300) && (($context["reput"] ?? null) >  -400))) {
            // line 86
            echo "                                    ";
            $context["grade"] = "monstrueux";
            // line 87
            echo "                                ";
        }
        // line 88
        echo "                                ";
        if ((($context["reput"] ?? null) <=  -400)) {
            // line 89
            echo "                                    ";
            $context["grade"] = "démoniaque";
            // line 90
            echo "                                ";
        }
        // line 91
        echo "
                                ";
        // line 92
        echo twig_escape_filter($this->env, ($context["grade"] ?? null), "html", null, true);
        echo "
                            </span>
                        </li>
                        <li><span>Alignement :</span> ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()), "html", null, true);
        echo "</li>
                    </ul>
                </div>
                <hr>
                <div class=\"container row\">
                    <div>
                        <h3>Caractéristiques</h3>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            ";
        // line 107
        $context["bonusLevel"] = (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "level", array()) - 1);
        // line 108
        echo "                            <div><span class=\"font-weight-bold\">Intellect :</span>
                                ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "ondin")) {
            // line 110
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "intellect", array()) + ($context["bonusLevel"] ?? null)) + 10), "html", null, true);
            echo "%
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 111
($context["showAccount"] ?? null), "race", array()) == "malemort")) {
            // line 112
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "intellect", array()) + ($context["bonusLevel"] ?? null)) + 5), "html", null, true);
            echo "%
                                ";
        } else {
            // line 114
            echo "                                    ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "intellect", array()) + ($context["bonusLevel"] ?? null)), "html", null, true);
            echo "%
                                ";
        }
        // line 116
        echo "                            </div>
                            <div><span class=\"font-weight-bold\">Physique :</span>
                                ";
        // line 118
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "automate")) {
            // line 119
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "physique", array()) + ($context["bonusLevel"] ?? null)) + 10), "html", null, true);
            echo "%
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 120
($context["showAccount"] ?? null), "race", array()) == "humain")) {
            // line 121
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "physique", array()) + ($context["bonusLevel"] ?? null)) + 5), "html", null, true);
            echo "%
                                ";
        } else {
            // line 123
            echo "                                    ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "physique", array()) + ($context["bonusLevel"] ?? null)), "html", null, true);
            echo "%
                                ";
        }
        // line 125
        echo "                            </div>
                            <div><span class=\"font-weight-bold\">Dextérité :</span>
                                ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "malemort")) {
            // line 128
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "dexterite", array()) + ($context["bonusLevel"] ?? null)) + 10), "html", null, true);
            echo "%
                                ";
        } else {
            // line 130
            echo "                                    ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "dexterite", array()) + ($context["bonusLevel"] ?? null)), "html", null, true);
            echo "%
                                ";
        }
        // line 132
        echo "                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div><span class=\"font-weight-bold\">Social :</span>
                                ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "ondin")) {
            // line 137
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "social", array()) + ($context["bonusLevel"] ?? null)) + 5), "html", null, true);
            echo "%
                                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 138
($context["showAccount"] ?? null), "race", array()) == "humain")) {
            // line 139
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "social", array()) + ($context["bonusLevel"] ?? null)) + 10), "html", null, true);
            echo "%
                                ";
        } else {
            // line 141
            echo "                                    ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "social", array()) + ($context["bonusLevel"] ?? null)), "html", null, true);
            echo "%
                                ";
        }
        // line 143
        echo "                            </div>
                            <div><span class=\"font-weight-bold\">Artisanat :</span>
                                ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "automate")) {
            // line 146
            echo "                                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "artisanat", array()) + ($context["bonusLevel"] ?? null)) + 5), "html", null, true);
            echo "%
                                ";
        } else {
            // line 148
            echo "                                    ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["competence"] ?? null), "artisanat", array()) + ($context["bonusLevel"] ?? null)), "html", null, true);
            echo "%
                                ";
        }
        // line 150
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 153
        if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "has_edit", array()) == 0) && (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array())))) {
            // line 154
            echo "                        <div class=\"row justify-content-end\">
                            <a href=\"/account/character-";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
            echo "/preference\">
                                Modifier sa fiche de personnage
                            </a>
                        </div>
                    ";
        }
        // line 160
        echo "                </div>
            </div>
        </div>
    </div>

    ";
        // line 166
        echo "    <div class=\"profil--info-block container my-5\">
        <h3 class=\"text-center\">Inventaire</h3>
        <hr class=\"mb-4\" style=\"width: 25%\">
        <div class=\"bg-transparent row justify-content-center\" style=\"box-shadow: none;\">
            <div class=\"col-lg-5\" style=\"background: none; box-shadow: none;\">
                <div class=\"p-3\" style=\"overflow-y: auto;\">
                    ";
        // line 172
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
            // line 173
            echo "                        <span style=\"color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "color", array()), "html", null, true);
            echo "\">
                            ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "name", array()), "html", null, true);
            echo "
                        </span> x ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "number", array()), "html", null, true);
            echo "
                        ";
            // line 176
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                // line 177
                echo "                            ,
                        ";
            }
            // line 179
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
        // line 180
        echo "                </div>
            </div>
        </div>
    </div>

    ";
        // line 186
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showHeading"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["heading"]) {
            // line 187
            echo "        <div class=\"profil--info-block container my-5\">
            <h3>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
            echo "</h3>
            <hr class=\"mb-4\">
            ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showParagraph"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idHeading", array()) == twig_get_attribute($this->env, $this->source, $context["heading"], "id", array()))) {
                    // line 191
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()))) {
                        // line 192
                        echo "                    <div class=\"p-3\">
                        ";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["paragraph"], "content", array());
                        echo "
                    </div>
                ";
                    }
                    // line 196
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "
    ";
        // line 200
        if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
            // line 201
            echo "        <div class=\"text-center\">
            <a href=\"/account/character-";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
            echo "/parameter\"
               class=\"btn\">Modifier le profil</a>
        </div>
    ";
        }
        // line 206
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
        return array (  521 => 206,  514 => 202,  511 => 201,  509 => 200,  506 => 199,  499 => 197,  492 => 196,  486 => 193,  483 => 192,  480 => 191,  475 => 190,  470 => 188,  467 => 187,  462 => 186,  455 => 180,  441 => 179,  437 => 177,  435 => 176,  431 => 175,  427 => 174,  422 => 173,  405 => 172,  397 => 166,  390 => 160,  382 => 155,  379 => 154,  377 => 153,  372 => 150,  366 => 148,  360 => 146,  358 => 145,  354 => 143,  348 => 141,  342 => 139,  340 => 138,  335 => 137,  333 => 136,  327 => 132,  321 => 130,  315 => 128,  313 => 127,  309 => 125,  303 => 123,  297 => 121,  295 => 120,  290 => 119,  288 => 118,  284 => 116,  278 => 114,  272 => 112,  270 => 111,  265 => 110,  263 => 109,  260 => 108,  258 => 107,  243 => 95,  237 => 92,  234 => 91,  231 => 90,  228 => 89,  225 => 88,  222 => 87,  219 => 86,  216 => 85,  213 => 84,  210 => 83,  207 => 82,  204 => 81,  201 => 80,  198 => 79,  195 => 78,  192 => 77,  189 => 76,  186 => 74,  183 => 73,  180 => 72,  177 => 71,  174 => 70,  171 => 69,  168 => 68,  165 => 67,  162 => 66,  159 => 65,  156 => 64,  153 => 63,  150 => 62,  147 => 61,  144 => 60,  141 => 59,  137 => 56,  132 => 55,  128 => 54,  125 => 53,  123 => 52,  117 => 49,  113 => 48,  109 => 47,  101 => 42,  97 => 41,  94 => 40,  89 => 39,  85 => 38,  81 => 37,  69 => 27,  66 => 25,  59 => 21,  53 => 17,  46 => 13,  39 => 9,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  23 => 2,);
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
                    <a href=\"{{ showAccount.creditAvatar }}\" target=\"_blank\" title=\"Accéder à l'auteur\">
                        <img src=\"/web/img/avatar/{{ showAccount.avatar }}\"
                             alt=\"Avatar\" class=\"img-fluid rounded\" width=\"250px\" height=\"400px\">
                    </a>
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
                <div>
                    <h3>Informations</h3>
                </div>
            </div>
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
                            {% set reput = (showAccount.reputation + voteLike) - voteDislike %}
                            <span style=\"font-weight: normal;
                                    {% if reput < 0 %}color: #DA3B01;
                            {% elseif reput >= 0 %}color: #647C64;
                                                {% endif %}\">

                                {# Positif #}
                                {% if reput >= 0 and reput < 100 %}
                                    {% set grade = 'anodin' %}
                                {% endif %}
                                {% if reput >= 100 and reput < 200 %}
                                    {% set grade = 'familier' %}
                                {% endif %}
                                {% if reput >= 200 and reput < 300 %}
                                    {% set grade = 'célèbre' %}
                                {% endif %}
                                {% if reput >= 300 and reput < 400 %}
                                    {% set grade = 'héroïque' %}
                                {% endif %}
                                {% if reput >= 400 %}
                                    {% set grade = 'légendaire' %}
                                {% endif %}

                                {# Negatif #}
                                {% if reput < 0 and reput > -100 %}
                                    {% set grade = 'méprisable' %}
                                {% endif %}
                                {% if reput <= -100 and reput > -200 %}
                                    {% set grade = 'exécrable' %}
                                {% endif %}
                                {% if reput <= -200 and reput > -300 %}
                                    {% set grade = 'effrayant' %}
                                {% endif %}
                                {% if reput <= -300 and reput > -400 %}
                                    {% set grade = 'monstrueux' %}
                                {% endif %}
                                {% if reput <= -400 %}
                                    {% set grade = 'démoniaque' %}
                                {% endif %}

                                {{ grade }}
                            </span>
                        </li>
                        <li><span>Alignement :</span> {{ showAccount.alignement }}</li>
                    </ul>
                </div>
                <hr>
                <div class=\"container row\">
                    <div>
                        <h3>Caractéristiques</h3>
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            {% set bonusLevel = showAccount.level - 1 %}
                            <div><span class=\"font-weight-bold\">Intellect :</span>
                                {% if showAccount.race == 'ondin' %}
                                    {{ competence.intellect + bonusLevel + 10 }}%
                                {% elseif showAccount.race == 'malemort' %}
                                    {{ competence.intellect + bonusLevel + 5 }}%
                                {% else %}
                                    {{ competence.intellect + bonusLevel }}%
                                {% endif %}
                            </div>
                            <div><span class=\"font-weight-bold\">Physique :</span>
                                {% if showAccount.race == 'automate' %}
                                    {{ competence.physique + bonusLevel + 10 }}%
                                {% elseif showAccount.race == 'humain' %}
                                    {{ competence.physique + bonusLevel + 5 }}%
                                {% else %}
                                    {{ competence.physique + bonusLevel }}%
                                {% endif %}
                            </div>
                            <div><span class=\"font-weight-bold\">Dextérité :</span>
                                {% if showAccount.race == 'malemort' %}
                                    {{ competence.dexterite + bonusLevel + 10 }}%
                                {% else %}
                                    {{ competence.dexterite + bonusLevel }}%
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div><span class=\"font-weight-bold\">Social :</span>
                                {% if showAccount.race == 'ondin' %}
                                    {{ competence.social + bonusLevel + 5 }}%
                                {% elseif showAccount.race == 'humain' %}
                                    {{ competence.social + bonusLevel + 10 }}%
                                {% else %}
                                    {{ competence.social + bonusLevel }}%
                                {% endif %}
                            </div>
                            <div><span class=\"font-weight-bold\">Artisanat :</span>
                                {% if showAccount.race == 'automate' %}
                                    {{ competence.artisanat + bonusLevel + 5 }}%
                                {% else %}
                                    {{ competence.artisanat + bonusLevel }}%
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% if showAccount.has_edit == 0 and sessionUser.id == showAccount.id %}
                        <div class=\"row justify-content-end\">
                            <a href=\"/account/character-{{ showAccount.id }}/preference\">
                                Modifier sa fiche de personnage
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    {# Inventaire #}
    <div class=\"profil--info-block container my-5\">
        <h3 class=\"text-center\">Inventaire</h3>
        <hr class=\"mb-4\" style=\"width: 25%\">
        <div class=\"bg-transparent row justify-content-center\" style=\"box-shadow: none;\">
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

    {% if showAccount.id == sessionUser.id or sessionUser.idGroup >= 2 %}
        <div class=\"text-center\">
            <a href=\"/account/character-{{ showAccount.id }}/parameter\"
               class=\"btn\">Modifier le profil</a>
        </div>
    {% endif %}
</section>", "/account/profilTabInfo.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilTabInfo.twig");
    }
}
