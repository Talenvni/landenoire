<?php

/* /account/profilTabParameter.twig */
class __TwigTemplate_328c968001326b37ea0e060caef3b26b895246f1249958e5d1dc99512fb95b94 extends Twig_Template
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
        if (((($context["profilTab"] ?? null) == "parameter") && (($context["checkProfil"] ?? null) == false))) {
            // line 3
            echo "    <section class=\"container--profil-info container my-5 py-5 rounded\">
        ";
            // line 5
            echo "        <div class=\"d-flex justify-content-center\">
            <div class=\"profil--info-list py-4 container rounded\">
                <div class=\"row justify-content-center\">
                    <h2>Avatar</h2>
                </div>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row\">
                    <ul class=\"list-group\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["editInfo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                if ( !(null === ($context["infoSubmit"] ?? null))) {
                    // line 14
                    echo "                            <li class=\"list-unstyled\">
                                <span class=\"badge badge-warning\">Erreur</span>
                                ";
                    // line 16
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    </ul>
                </div>
                <form method=\"post\" class=\"form-group\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <label for=\"avatar\" class=\"form-control-label\">Nouvel Avatar</label>
                            <input id=\"avatar\" name=\"avatar\" type=\"file\" class=\"form-control\"
                                   style=\"overflow: hidden;\">
                        </div>
                        <div class=\"col-lg-6\">
                            <label for=\"creditAvatar\" class=\"form-control-label\">Crédit Avatar</label>
                            <input id=\"creditAvatar\" name=\"creditAvatar\"
                                   type=\"url\" class=\"form-control\"
                                   value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "creditAvatar", array()), "html", null, true);
            echo "\"
                                   placeholder=\"Insérer l'URL vers l'image originel\">
                        </div>
                    </div>
                    ";
            // line 36
            if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 37
                echo "                        <div class=\"row justify-content-center mt-4\">
                            <button type=\"submit\" class=\"btn\" name=\"infoSubmit\">
                                Éditer l'Avatar
                            </button>
                        </div>
                    ";
            }
            // line 43
            echo "                    <div class=\"row mt-4 justify-content-center\">
                        <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                        <ul class=\"col-lg-9 text-center text-lg-left\">
                            <li class=\"font-italic col-lg-10\">
                                Les images doivent être de type
                                <span lang=\"en\" translate=\"no\">digital painting</span>
                                et aux dimensions <span>250x400.</span>
                            </li>
                            <li class=\"font-italic col-lg-10\">
                                Si vous ne détenez pas les droits sur l'image,
                                nous vous demandons d'insérer l'URL renvoyant à l'image de
                                son auteur.
                            </li>
                            <li class=\"font-italic text-warning col-lg-10\">
                                Tout abus ou changement non justifié sera sanctionné. En cas de
                                question ou de problème, veuillez contacter l'administration.
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>

        ";
            // line 67
            echo "        <div class=\"d-flex justify-content-center mt-5\">
            <div class=\"profil--info-list py-4 container rounded\">
                <div class=\"row justify-content-center\">
                    <h2>Alignement</h2>
                </div>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row\">
                    <ul class=\"list-group\">
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["editInfo"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                if ( !(null === ($context["alignSubmit"] ?? null))) {
                    // line 76
                    echo "                            <li class=\"list-unstyled\">
                                <span class=\"badge badge-warning\">Erreur</span>
                                ";
                    // line 78
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </ul>
                </div>
                <form method=\"post\" class=\"form-group\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-3\">
                            <label for=\"align\" class=\"form-control-label\">
                                Alignement de ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "
                            </label>
                            <select name=\"align\" id=\"align\" class=\"form-control\">
                                <optgroup label=\"Bon\">
                                    <option value=\"bon loyal\"
                                            ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Bon loyal")) {
                echo "selected
                                            ";
            }
            // line 93
            echo ">
                                        Loyal
                                    </option>
                                    <option value=\"bon neutre\"
                                            ";
            // line 97
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Bon neutre")) {
                echo "selected
                                            ";
            }
            // line 98
            echo ">
                                        Neutre
                                    </option>
                                    <option value=\"bon chaotique\"
                                            ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Bon chaotique")) {
                echo "selected
                                            ";
            }
            // line 103
            echo ">
                                        Chaotique
                                    </option>
                                </optgroup>

                                <optgroup label=\"Neutre\">
                                    <option value=\"neutre loyal\"
                                            ";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Neutre loyal")) {
                echo "selected
                                            ";
            }
            // line 111
            echo ">
                                        Loyal
                                    </option>
                                    <option value=\"neutre\"
                                            ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Neutre")) {
                echo "selected
                                            ";
            }
            // line 116
            echo ">
                                        Neutre
                                    </option>
                                    <option value=\"neutre chaotique\"
                                            ";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Neutre chaotique")) {
                echo "selected
                                            ";
            }
            // line 121
            echo ">
                                        Chaotique
                                    </option>
                                </optgroup>

                                <optgroup label=\"Mauvais\">
                                    <option value=\"mauvais loyal\"
                                            ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Mauvais loyal")) {
                echo "selected
                                            ";
            }
            // line 129
            echo ">
                                        Loyal
                                    </option>
                                    <option value=\"mauvais neutre\"
                                            ";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Mauvais neutre")) {
                echo "selected
                                            ";
            }
            // line 134
            echo ">
                                        Neutre
                                    </option>
                                    <option value=\"mauvais chaotique\"
                                            ";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "alignement", array()) == "Mauvais chaotique")) {
                echo "selected
                                            ";
            }
            // line 139
            echo ">
                                        Chaotique
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    ";
            // line 146
            if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 147
                echo "                        <div class=\"row justify-content-center mt-4\">
                            <button type=\"submit\" class=\"btn\" name=\"alignSubmit\">
                                Éditer l'alignement
                            </button>
                        </div>
                    ";
            }
            // line 153
            echo "                    <div class=\"row mt-4 d-flex justify-content-center\">
                        <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                        <ul class=\"col-lg-9 text-center text-lg-left\">
                            <li class=\"font-italic col-lg-10\">
                                L'alignement de votre personnage détermine sa philosophie.
                                Pour en apprendre davantage sur les alignements, consultez la
                                <a href=\"/codex/align\">page des alignements</a>.
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>

        ";
            // line 168
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                // line 169
                echo "            <div class=\"d-flex justify-content-center mt-5\">
                <div class=\"profil--info-list py-4 container rounded\">
                    <div class=\"row justify-content-center\">
                        <h2>Édition par administration</h2>
                    </div>
                    <hr class=\"mt-0 mb-4\">
                    <form method=\"post\" class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <label for=\"age\" class=\"form-control-label\">
                                    Âge de ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "
                                </label>
                                <input type=\"date\" name=\"age\" class=\"form-control\" placeholder=\"Âge\"
                                       value=\"";
                // line 182
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
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "
                                </label>
                                <select name=\"sexe\" id=\"sexe\" class=\"form-control\">
                                    <option value=\"neutre\" ";
                // line 190
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()) == "neutre")) {
                    echo "selected
                                            ";
                }
                // line 191
                echo ">Neutre
                                    </option>
                                    <option value=\"femme\" ";
                // line 193
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()) == "femme")) {
                    echo "selected
                                            ";
                }
                // line 194
                echo ">Femme
                                    </option>
                                    <option value=\"homme\" ";
                // line 196
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "sexe", array()) == "homme")) {
                    echo "selected
                                            ";
                }
                // line 197
                echo ">Homme
                                    </option>
                                </select>
                            </div>

                            <div class=\"col-lg-4\">
                                <label for=\"race\" class=\"form-control-label\">
                                    Race de ";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "
                                </label>
                                <select name=\"race\" id=\"race\" class=\"form-control\">
                                    <option value=\"humain\" ";
                // line 207
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "humain")) {
                    echo "selected
                                            ";
                }
                // line 208
                echo ">Humain
                                    </option>
                                    <option value=\"automate\" ";
                // line 210
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "automate")) {
                    echo "selected
                                            ";
                }
                // line 211
                echo ">Automate
                                    </option>
                                    <option value=\"malemort\" ";
                // line 213
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "malemort")) {
                    echo "selected
                                            ";
                }
                // line 214
                echo ">Malemort
                                    </option>
                                    <option value=\"ondin\" ";
                // line 216
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "race", array()) == "ondin")) {
                    echo "selected
                                            ";
                }
                // line 217
                echo ">Ondin
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class=\"row mt-5\">
                            <div class=\"col-lg-4\">
                                <label for=\"coin\">Monnaie de ";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "</label>
                                <input name=\"coin\" id=\"coin\" type=\"number\" class=\"form-control\"
                                       value=\"";
                // line 226
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "coin", array()), "html", null, true);
                echo "\" placeholder=\"Monnaie\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"exp\" class=\"form-control-label\">
                                    Expérience de ";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "
                                </label>
                                <input type=\"number\" id=\"exp\" name=\"exp\" class=\"form-control\"
                                       value=\"";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "experience", array()), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"reput\">Réputation de ";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "</label>
                                <input name=\"reputation\" id=\"reput\" type=\"number\" class=\"form-control\"
                                       value=\"";
                // line 238
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "reputation", array()), "html", null, true);
                echo "\" placeholder=\"Réputation\">
                            </div>
                        </div>
                        <div class=\"form-check mt-5 mx-auto text-center\">
                            <input name=\"character_valide\" id=\"validate\" type=\"checkbox\"
                                   class=\"form-check-input\"
                                   ";
                // line 244
                if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "characterValide", array()) == 1)) {
                    echo "checked";
                }
                echo ">
                            <label for=\"validate\" class=\"form-check-label\">
                                Valider la fiche de personnage
                            </label>
                        </div>
                        ";
                // line 249
                if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                    // line 250
                    echo "                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"infoAdminSubmit\">
                                    Éditer
                                </button>
                            </div>
                        ";
                }
                // line 256
                echo "                        <div class=\"row mt-4 d-flex justify-content-center\">
                            <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                            <ul class=\"col-lg-9 text-center text-lg-left\">
                                <li class=\"font-italic col-lg-10\">
                                    L'âge augmente chaque année automatiquement.
                                </li>
                                <li class=\"font-italic col-lg-10 text-warning\">
                                    Aucun changement abusif de la richesse ou de la réputation.
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        ";
            }
            // line 271
            echo "
        ";
            // line 273
            echo "        <form method=\"post\" class=\"form-group\">
            ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showHeading"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["heading"]) {
                // line 275
                echo "                <div class=\"container my-5\">
                    <h3>";
                // line 276
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
                echo "</h3>
                    <hr class=\"mb-4\">
                    <div class=\"paragraph-3\">
                        ";
                // line 279
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["showParagraph"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idHeading", array()) == twig_get_attribute($this->env, $this->source, $context["heading"], "id", array()))) {
                        // line 280
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["paragraph"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()))) {
                            // line 281
                            echo "                                <label for=\"edit";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
                            echo "\" hidden></label>
                                <textarea name=\"edit";
                            // line 282
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
                            echo "\" id=\"edit";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
                            echo "\"
                                          cols=\"30\"
                                          rows=\"10\" class=\"form-control\">";
                            // line 284
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "content", array()), "html", null, true);
                            echo "</textarea>
                            ";
                        }
                        // line 286
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 291
                echo "                <div class=\"row justify-content-center mt-4\">
                    <button type=\"submit\" class=\"btn\" name=\"headingSubmit\">
                        Éditer les champs
                    </button>
                </div>
            ";
            }
            // line 297
            echo "            <div class=\"container text-center mt-4\">
                <div class=\"display-info text-ln-gold\">
                    <span>Pourquoi ne puis-je pas modifier tous les champs ?</span>
                    <small class=\"content-info text-center\">
                        Certains champs comme la race, le sexe, l'âge ou encore la réputation et la richesse
                        ne peuvent être modifiés par l'utilisateur pour des raisons d'abus et de tricherie.
                        <br>
                        Si vous rencontrez des problèmes avec ces informations, merci de contacter la
                        modération.
                    </small>
                </div>
            </div>
        </form>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "/account/profilTabParameter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 297,  548 => 291,  545 => 290,  537 => 287,  530 => 286,  525 => 284,  518 => 282,  513 => 281,  510 => 280,  505 => 279,  499 => 276,  496 => 275,  492 => 274,  489 => 273,  486 => 271,  469 => 256,  461 => 250,  459 => 249,  449 => 244,  440 => 238,  435 => 236,  429 => 233,  423 => 230,  416 => 226,  411 => 224,  402 => 217,  397 => 216,  393 => 214,  388 => 213,  384 => 211,  379 => 210,  375 => 208,  370 => 207,  364 => 204,  355 => 197,  350 => 196,  346 => 194,  341 => 193,  337 => 191,  332 => 190,  326 => 187,  314 => 182,  308 => 179,  296 => 169,  293 => 168,  277 => 153,  269 => 147,  267 => 146,  258 => 139,  253 => 138,  247 => 134,  242 => 133,  236 => 129,  231 => 128,  222 => 121,  217 => 120,  211 => 116,  206 => 115,  200 => 111,  195 => 110,  186 => 103,  181 => 102,  175 => 98,  170 => 97,  164 => 93,  159 => 92,  151 => 87,  143 => 81,  133 => 78,  129 => 76,  124 => 75,  114 => 67,  89 => 43,  81 => 37,  79 => 36,  72 => 32,  57 => 19,  47 => 16,  43 => 14,  38 => 13,  28 => 5,  25 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Parameters Tab #}
{% if profilTab == 'parameter' and checkProfil == false %}
    <section class=\"container--profil-info container my-5 py-5 rounded\">
        {# Avatar #}
        <div class=\"d-flex justify-content-center\">
            <div class=\"profil--info-list py-4 container rounded\">
                <div class=\"row justify-content-center\">
                    <h2>Avatar</h2>
                </div>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row\">
                    <ul class=\"list-group\">
                        {% for error in editInfo if infoSubmit is not null %}
                            <li class=\"list-unstyled\">
                                <span class=\"badge badge-warning\">Erreur</span>
                                {{ error }}
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                <form method=\"post\" class=\"form-group\" enctype=\"multipart/form-data\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <label for=\"avatar\" class=\"form-control-label\">Nouvel Avatar</label>
                            <input id=\"avatar\" name=\"avatar\" type=\"file\" class=\"form-control\"
                                   style=\"overflow: hidden;\">
                        </div>
                        <div class=\"col-lg-6\">
                            <label for=\"creditAvatar\" class=\"form-control-label\">Crédit Avatar</label>
                            <input id=\"creditAvatar\" name=\"creditAvatar\"
                                   type=\"url\" class=\"form-control\"
                                   value=\"{{ showAccount.creditAvatar }}\"
                                   placeholder=\"Insérer l'URL vers l'image originel\">
                        </div>
                    </div>
                    {% if showAccount.id == sessionUser.id or sessionUser.idGroup >= 2 %}
                        <div class=\"row justify-content-center mt-4\">
                            <button type=\"submit\" class=\"btn\" name=\"infoSubmit\">
                                Éditer l'Avatar
                            </button>
                        </div>
                    {% endif %}
                    <div class=\"row mt-4 justify-content-center\">
                        <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                        <ul class=\"col-lg-9 text-center text-lg-left\">
                            <li class=\"font-italic col-lg-10\">
                                Les images doivent être de type
                                <span lang=\"en\" translate=\"no\">digital painting</span>
                                et aux dimensions <span>250x400.</span>
                            </li>
                            <li class=\"font-italic col-lg-10\">
                                Si vous ne détenez pas les droits sur l'image,
                                nous vous demandons d'insérer l'URL renvoyant à l'image de
                                son auteur.
                            </li>
                            <li class=\"font-italic text-warning col-lg-10\">
                                Tout abus ou changement non justifié sera sanctionné. En cas de
                                question ou de problème, veuillez contacter l'administration.
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>

        {# Alignement #}
        <div class=\"d-flex justify-content-center mt-5\">
            <div class=\"profil--info-list py-4 container rounded\">
                <div class=\"row justify-content-center\">
                    <h2>Alignement</h2>
                </div>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row\">
                    <ul class=\"list-group\">
                        {% for error in editInfo if alignSubmit is not null %}
                            <li class=\"list-unstyled\">
                                <span class=\"badge badge-warning\">Erreur</span>
                                {{ error }}
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                <form method=\"post\" class=\"form-group\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-3\">
                            <label for=\"align\" class=\"form-control-label\">
                                Alignement de {{ showAccount.pseudo }}
                            </label>
                            <select name=\"align\" id=\"align\" class=\"form-control\">
                                <optgroup label=\"Bon\">
                                    <option value=\"bon loyal\"
                                            {% if showAccount.alignement == 'Bon loyal' %}selected
                                            {% endif %}>
                                        Loyal
                                    </option>
                                    <option value=\"bon neutre\"
                                            {% if showAccount.alignement == 'Bon neutre' %}selected
                                            {% endif %}>
                                        Neutre
                                    </option>
                                    <option value=\"bon chaotique\"
                                            {% if showAccount.alignement == 'Bon chaotique' %}selected
                                            {% endif %}>
                                        Chaotique
                                    </option>
                                </optgroup>

                                <optgroup label=\"Neutre\">
                                    <option value=\"neutre loyal\"
                                            {% if showAccount.alignement == 'Neutre loyal' %}selected
                                            {% endif %}>
                                        Loyal
                                    </option>
                                    <option value=\"neutre\"
                                            {% if showAccount.alignement == 'Neutre' %}selected
                                            {% endif %}>
                                        Neutre
                                    </option>
                                    <option value=\"neutre chaotique\"
                                            {% if showAccount.alignement == 'Neutre chaotique' %}selected
                                            {% endif %}>
                                        Chaotique
                                    </option>
                                </optgroup>

                                <optgroup label=\"Mauvais\">
                                    <option value=\"mauvais loyal\"
                                            {% if showAccount.alignement == 'Mauvais loyal' %}selected
                                            {% endif %}>
                                        Loyal
                                    </option>
                                    <option value=\"mauvais neutre\"
                                            {% if showAccount.alignement == 'Mauvais neutre' %}selected
                                            {% endif %}>
                                        Neutre
                                    </option>
                                    <option value=\"mauvais chaotique\"
                                            {% if showAccount.alignement == 'Mauvais chaotique' %}selected
                                            {% endif %}>
                                        Chaotique
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    {% if showAccount.id == sessionUser.id or sessionUser.idGroup >= 2 %}
                        <div class=\"row justify-content-center mt-4\">
                            <button type=\"submit\" class=\"btn\" name=\"alignSubmit\">
                                Éditer l'alignement
                            </button>
                        </div>
                    {% endif %}
                    <div class=\"row mt-4 d-flex justify-content-center\">
                        <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                        <ul class=\"col-lg-9 text-center text-lg-left\">
                            <li class=\"font-italic col-lg-10\">
                                L'alignement de votre personnage détermine sa philosophie.
                                Pour en apprendre davantage sur les alignements, consultez la
                                <a href=\"/codex/align\">page des alignements</a>.
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>

        {# Admin edit #}
        {% if sessionUser.idGroup >= 2 %}
            <div class=\"d-flex justify-content-center mt-5\">
                <div class=\"profil--info-list py-4 container rounded\">
                    <div class=\"row justify-content-center\">
                        <h2>Édition par administration</h2>
                    </div>
                    <hr class=\"mt-0 mb-4\">
                    <form method=\"post\" class=\"form-group\">
                        <div class=\"row\">
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
                        <div class=\"row mt-5\">
                            <div class=\"col-lg-4\">
                                <label for=\"coin\">Monnaie de {{ showAccount.pseudo }}</label>
                                <input name=\"coin\" id=\"coin\" type=\"number\" class=\"form-control\"
                                       value=\"{{ showAccount.coin }}\" placeholder=\"Monnaie\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"exp\" class=\"form-control-label\">
                                    Expérience de {{ showAccount.pseudo }}
                                </label>
                                <input type=\"number\" id=\"exp\" name=\"exp\" class=\"form-control\"
                                       value=\"{{ showAccount.experience }}\">
                            </div>
                            <div class=\"col-lg-4\">
                                <label for=\"reput\">Réputation de {{ showAccount.pseudo }}</label>
                                <input name=\"reputation\" id=\"reput\" type=\"number\" class=\"form-control\"
                                       value=\"{{ showAccount.reputation }}\" placeholder=\"Réputation\">
                            </div>
                        </div>
                        <div class=\"form-check mt-5 mx-auto text-center\">
                            <input name=\"character_valide\" id=\"validate\" type=\"checkbox\"
                                   class=\"form-check-input\"
                                   {% if showAccount.characterValide == 1 %}checked{% endif %}>
                            <label for=\"validate\" class=\"form-check-label\">
                                Valider la fiche de personnage
                            </label>
                        </div>
                        {% if sessionUser.idGroup >= 2 %}
                            <div class=\"row justify-content-center mt-4\">
                                <button type=\"submit\" class=\"btn\" name=\"infoAdminSubmit\">
                                    Éditer
                                </button>
                            </div>
                        {% endif %}
                        <div class=\"row mt-4 d-flex justify-content-center\">
                            <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                            <ul class=\"col-lg-9 text-center text-lg-left\">
                                <li class=\"font-italic col-lg-10\">
                                    L'âge augmente chaque année automatiquement.
                                </li>
                                <li class=\"font-italic col-lg-10 text-warning\">
                                    Aucun changement abusif de la richesse ou de la réputation.
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        {% endif %}

        {# showHeading and Paragraph #}
        <form method=\"post\" class=\"form-group\">
            {% for heading in showHeading %}
                <div class=\"container my-5\">
                    <h3>{{ heading.name }}</h3>
                    <hr class=\"mb-4\">
                    <div class=\"paragraph-3\">
                        {% for paragraph in showParagraph if paragraph.idHeading == heading.id %}
                            {% if paragraph.idUser == showAccount.id %}
                                <label for=\"edit{{ heading.name }}\" hidden></label>
                                <textarea name=\"edit{{ heading.name }}\" id=\"edit{{ heading.name }}\"
                                          cols=\"30\"
                                          rows=\"10\" class=\"form-control\">{{ paragraph.content }}</textarea>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% endfor %}
            {% if showAccount.id == sessionUser.id or sessionUser.idGroup >= 2 %}
                <div class=\"row justify-content-center mt-4\">
                    <button type=\"submit\" class=\"btn\" name=\"headingSubmit\">
                        Éditer les champs
                    </button>
                </div>
            {% endif %}
            <div class=\"container text-center mt-4\">
                <div class=\"display-info text-ln-gold\">
                    <span>Pourquoi ne puis-je pas modifier tous les champs ?</span>
                    <small class=\"content-info text-center\">
                        Certains champs comme la race, le sexe, l'âge ou encore la réputation et la richesse
                        ne peuvent être modifiés par l'utilisateur pour des raisons d'abus et de tricherie.
                        <br>
                        Si vous rencontrez des problèmes avec ces informations, merci de contacter la
                        modération.
                    </small>
                </div>
            </div>
        </form>
    </section>
{% endif %}", "/account/profilTabParameter.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilTabParameter.twig");
    }
}
