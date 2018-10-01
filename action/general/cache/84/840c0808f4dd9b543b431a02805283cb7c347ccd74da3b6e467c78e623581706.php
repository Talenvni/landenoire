<?php

/* /forum/messageCommonIndex.twig */
class __TwigTemplate_71135a2e26e524172d5569acc5992a20d7a5e7945ff2f6668b9aa86f99405880 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/forum/messageCommonIndex.twig", 1);
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
        echo "    <main class=\"d-flex flex-column justify-content-center align-items-center\">
        <section class=\"container container-pagination p-0 m-0\">
            ";
        // line 7
        echo "            ";
        if (( !(null === ($context["singleTopic"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array())))) {
            // line 8
            echo "                <div class=\"row align-items-center justify-content-between mt-5\">
                    <h3 class=\"topic--title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "subject", array()), "html", null, true);
            echo "</h3>
                    ";
            // line 10
            if (((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 11
                echo "                        <a title=\"Éditer le titre du sujet\"
                           href=\"/forum/";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array()), "html", null, true);
                echo "/topics/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "id", array()), "html", null, true);
                echo "/subject/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "id", array()), "html", null, true);
                echo "\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                    ";
            }
            // line 16
            echo "                </div>
                <hr class=\"row\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showMessage"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "                    <div class=\"content-pagination row align-items-start justify-content-between my-5\">
                        <div class=\"avatar--message d-none d-lg-block\">
                            <img src=\"/web/img/avatar/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "avatar", array()), "html", null, true);
                echo "\" alt=\"\" class=\"rounded border\"
                                 style=\"box-shadow: 0 0 .5rem black;width: 250px;height: 400px;\">
                            <div class=\"avatar-info--message rounded border\">
                                <h5 class=\"text-center text-ln-gold\">Infos</h5>
                                <span class=\"text-ln-gold d-block\">Âge :</span>
                                ";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, $context["message"], "age", array()) > 1)) {
                    // line 27
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "age", array()), "html", null, true);
                    echo " ans
                                ";
                } else {
                    // line 29
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "age", array()), "html", null, true);
                    echo " an
                                ";
                }
                // line 31
                echo "                                <span class=\"text-ln-gold d-block\">Sexe :</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sexe", array()), "html", null, true);
                echo "
                                <span class=\"text-ln-gold d-block\">Race :</span> ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "race", array()), "html", null, true);
                echo "
                                <hr>
                                <span class=\"text-ln-gold d-block\">Richesse :</span>
                                ";
                // line 35
                $context["coin"] = call_user_func_array($this->env->getFunction('coinTransform')->getCallable(), array(twig_get_attribute($this->env, $this->source, $context["message"], "coin", array())));
                // line 36
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "gold", array()), "html", null, true);
                echo " <span class=\"gold\">or.</span>
                                ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "silver", array()), "html", null, true);
                echo " <span class=\"silver\">ar.</span>
                                ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["coin"] ?? null), "copper", array()), "html", null, true);
                echo " <span class=\"copper\">cu.</span>
                                <span class=\"text-ln-gold d-block\">Réputation :</span>
                                ";
                // line 40
                $context["reput"] = ((twig_get_attribute($this->env, $this->source, $context["message"], "reputation", array()) + ($context["voteLike"] ?? null)) - ($context["voteDislike"] ?? null));
                // line 41
                echo "                                <span style=\"font-weight: normal;
                                        ";
                // line 42
                if ((($context["reput"] ?? null) < 0)) {
                    echo "color: #DA3B01;
                                ";
                } elseif ((                // line 43
($context["reput"] ?? null) >= 0)) {
                    echo "color: #647C64;
                                                ";
                }
                // line 44
                echo "\">

                                ";
                // line 47
                echo "                                    ";
                if (((($context["reput"] ?? null) >= 0) && (($context["reput"] ?? null) < 100))) {
                    // line 48
                    echo "                                        ";
                    $context["grade"] = "anodin";
                    // line 49
                    echo "                                    ";
                }
                // line 50
                echo "                                    ";
                if (((($context["reput"] ?? null) >= 100) && (($context["reput"] ?? null) < 200))) {
                    // line 51
                    echo "                                        ";
                    $context["grade"] = "familier";
                    // line 52
                    echo "                                    ";
                }
                // line 53
                echo "                                    ";
                if (((($context["reput"] ?? null) >= 200) && (($context["reput"] ?? null) < 300))) {
                    // line 54
                    echo "                                        ";
                    $context["grade"] = "célèbre";
                    // line 55
                    echo "                                    ";
                }
                // line 56
                echo "                                    ";
                if (((($context["reput"] ?? null) >= 300) && (($context["reput"] ?? null) < 400))) {
                    // line 57
                    echo "                                        ";
                    $context["grade"] = "héroïque";
                    // line 58
                    echo "                                    ";
                }
                // line 59
                echo "                                    ";
                if ((($context["reput"] ?? null) >= 400)) {
                    // line 60
                    echo "                                        ";
                    $context["grade"] = "légendaire";
                    // line 61
                    echo "                                    ";
                }
                // line 62
                echo "
                                    ";
                // line 64
                echo "                                    ";
                if (((($context["reput"] ?? null) < 0) && (($context["reput"] ?? null) >  -100))) {
                    // line 65
                    echo "                                        ";
                    $context["grade"] = "méprisable";
                    // line 66
                    echo "                                    ";
                }
                // line 67
                echo "                                    ";
                if (((($context["reput"] ?? null) <=  -100) && (($context["reput"] ?? null) >  -200))) {
                    // line 68
                    echo "                                        ";
                    $context["grade"] = "exécrable";
                    // line 69
                    echo "                                    ";
                }
                // line 70
                echo "                                    ";
                if (((($context["reput"] ?? null) <=  -200) && (($context["reput"] ?? null) >  -300))) {
                    // line 71
                    echo "                                        ";
                    $context["grade"] = "effrayant";
                    // line 72
                    echo "                                    ";
                }
                // line 73
                echo "                                    ";
                if (((($context["reput"] ?? null) <=  -300) && (($context["reput"] ?? null) >  -400))) {
                    // line 74
                    echo "                                        ";
                    $context["grade"] = "monstrueux";
                    // line 75
                    echo "                                    ";
                }
                // line 76
                echo "                                    ";
                if ((($context["reput"] ?? null) <=  -400)) {
                    // line 77
                    echo "                                        ";
                    $context["grade"] = "démoniaque";
                    // line 78
                    echo "                                    ";
                }
                // line 79
                echo "
                                    ";
                // line 80
                echo twig_escape_filter($this->env, ($context["grade"] ?? null), "html", null, true);
                echo "
                            </span>
                                <span class=\"text-ln-gold d-block\">Alignement :</span> ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "alignement", array()), "html", null, true);
                echo "
                            </div>
                        </div>
                        <section class=\"container--topic col-lg-9 ";
                // line 85
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "order-first";
                }
                echo "\"
                                 style=\"";
                // line 86
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "border-radius: 1rem 0 1rem 1rem;";
                } else {
                    echo "border-radius: 0 1rem 1rem 1rem;";
                }
                echo "\">
                            <div class=\"container\">
                                <div class=\"row ";
                // line 88
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "justify-content-end";
                } else {
                    echo "justify-content-start";
                }
                echo "\">
                                <span style=\"font-size: 1.3rem;\">
                                    <a class=\"card-link\" href=\"/account/character-";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "idUser", array()), "html", null, true);
                echo "\">
                                        ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "pseudo", array()), "html", null, true);
                echo "
                                    </a>
                                </span>
                                </div>
                            </div>
                            <hr class=\"m-0\">
                            <div class=\"container\">
                                <div class=\"row ";
                // line 98
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "justify-content-start";
                } else {
                    echo "justify-content-end";
                }
                echo "\">
                                    <p>
                                        ";
                // line 100
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "datePub", array()), "medium", "short"), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </div>
                            <div class=\"container mb-3\">
                                ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["message"], "content", array());
                echo "
                            </div>

                            ";
                // line 109
                echo "                            <div class=\"container my-3\">
                                <div class=\"row justify-content-end\">
                                    ";
                // line 111
                if ((($context["sessionUser"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["message"], "idUser", array()) != twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                    // line 112
                    echo "                                        <form method=\"post\" class=\"wow fadeIn\">
                                            <input type=\"hidden\" name=\"vote_author\"
                                                   value=\"";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "idUser", array()), "html", null, true);
                    echo "\">
                                            <input type=\"hidden\" name=\"vote_message\"
                                                   value=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", array()), "html", null, true);
                    echo "\">
                                            <button class=\"btn py-1\" name=\"button_like\"
                                                    title=\"Apprécier le message de ";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "pseudo", array()), "html", null, true);
                    echo "\"
                                                    ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["showUpvote"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
                        if ((twig_get_attribute($this->env, $this->source,                         // line 120
$context["vote"], "idMessage", array()) == twig_get_attribute($this->env, $this->source, $context["message"], "id", array()))) {
                            // line 121
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["vote"], "is_liked", array()) && (twig_get_attribute($this->env, $this->source, $context["vote"], "idPoster", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                                // line 122
                                echo "                                                    disabled
                                                ";
                            }
                            // line 124
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo ">
                                                <i class=\"fa fa-thumbs-up fa-xs\"></i>
                                            </button>
                                            <button class=\"btn py-1\" name=\"button_dislike\"
                                                    title=\"Déprécier le message de ";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "pseudo", array()), "html", null, true);
                    echo "\"
                                                    ";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["showUpvote"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
                        if ((twig_get_attribute($this->env, $this->source,                         // line 130
$context["vote"], "idMessage", array()) == twig_get_attribute($this->env, $this->source, $context["message"], "id", array()))) {
                            // line 131
                            echo "                                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["vote"], "is_disliked", array()) && (twig_get_attribute($this->env, $this->source, $context["vote"], "idPoster", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                                // line 132
                                echo "                                                    disabled
                                                ";
                            }
                            // line 134
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo ">
                                                <i class=\"fa fa-thumbs-down fa-xs\"></i>
                                            </button>
                                        </form>
                                    ";
                }
                // line 139
                echo "

                                    ";
                // line 141
                if (((twig_get_attribute($this->env, $this->source, $context["message"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                    // line 142
                    echo "                                        <a class=\"btn mx-1 py-1 wow fadeIn\" data-toggle=\"tooltip\"
                                           data-placement=\"top\"
                                           title=\"Éditer\"
                                           href=\"/forum/";
                    // line 145
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array()), "html", null, true);
                    echo "/topics/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "id", array()), "html", null, true);
                    echo "/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", array()), "html", null, true);
                    echo "\">
                                            <i class=\"fas fa-edit fa-xs\"></i>
                                        </a>
                                    ";
                }
                // line 149
                echo "                                </div>
                            </div>

                        </section>
                    </div>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "
                ";
            // line 157
            echo "                <div class=\"container my-5\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <form method=\"post\">
                                ";
            // line 161
            if (((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 162
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "is_closed", array()) == 0)) {
                    // line 163
                    echo "                                        <button name=\"close_subject\" class=\"btn mb-3\">
                                            Clôturer le sujet
                                        </button>
                                    ";
                } else {
                    // line 167
                    echo "                                        <button name=\"close_subject\" class=\"btn mb-3\">
                                            Rouvrir le sujet
                                        </button>
                                    ";
                }
                // line 171
                echo "                                ";
            }
            // line 172
            echo "                            </form>
                            <a href=\"/forum/";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array()), "html", null, true);
            echo "/topics\" class=\"btn\">
                                Retour
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <nav aria-label=\"...\" style=\"background: transparent;\">
                                <ul class=\"pagination justify-content-end pagination-sm\"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 185
        echo "        </section>

        ";
        // line 188
        echo "        ";
        if ((( !(null === ($context["sessionUser"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "is_closed", array()) == 0)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array())))) {
            // line 189
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "characterValide", array()) == 1) || (twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "freeAccess", array()) == 1))) {
                // line 190
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "isBanned", array()) == 0)) {
                    // line 191
                    echo "                    <section class=\"container-fluid p-5 mt-auto box--message\">
                        <form method=\"post\" class=\"container\">
                            <fieldset>
                                <legend class=\"h2\">Nouveau message</legend>
                                <div>
                                    <ul class=\"list-group\">
                                        ";
                    // line 197
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["addMessage"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        if ( !(null === $context["error"])) {
                            // line 198
                            echo "                                            <li class=\"list-unstyled\">
                                                <span class=\"badge badge-warning\">Erreur</span>
                                                ";
                            // line 200
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "
                                            </li>
                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "                                    </ul>
                                </div>
                                <div>
                            <textarea name=\"messageContent\" id=\"messageContent\" cols=\"30\"
                                      rows=\"10\" placeholder=\"Votre message\" class=\"col-lg-12\"></textarea>
                                </div>
                                <div class=\"mt-2 text-center\">
                                    <button type=\"submit\" class=\"btn\">Envoyer</button>
                                </div>
                            </fieldset>
                        </form>
                    </section>
                ";
                }
                // line 216
                echo "            ";
            }
            // line 217
            echo "        ";
        }
        // line 218
        echo "        ";
        if ((null === ($context["sessionUser"] ?? null))) {
            // line 219
            echo "            <section class=\"box--message container-fluid p-5\">
                <div class=\"row justify-content-center\">
                    <p class=\"m-auto\">Vous devez être connecté pour poster un nouveau message.</p>
                </div>
            </section>
        ";
        }
        // line 225
        echo "        ";
        if (((null === twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array())) &&  !(null === ($context["sessionUser"] ?? null)))) {
            // line 226
            echo "            <section class=\"box--message container-fluid py-4 my-5\">
                <div class=\"row flex-column align-items-center\">
                    <p class=\"m-auto\">Ce sujet n'existe pas.</p>
                    <a class=\"card-link\" href=\"/forum\">Retour</a>
                </div>
            </section>
        ";
        }
        // line 233
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "is_closed", array()) == 1) &&  !(null === ($context["sessionUser"] ?? null)))) {
            // line 234
            echo "            <section class=\"box--message container-fluid py-4 my-5\">
                <div class=\"row flex-column align-items-center\">
                    <p class=\"m-auto\">Ce sujet est clôt.</p>
                    <a class=\"card-link\" href=\"/forum/";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array()), "html", null, true);
            echo "/topics\">Retour</a>
                </div>
            </section>
        ";
        }
        // line 241
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "/forum/messageCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 241,  584 => 237,  579 => 234,  576 => 233,  567 => 226,  564 => 225,  556 => 219,  553 => 218,  550 => 217,  547 => 216,  532 => 203,  522 => 200,  518 => 198,  513 => 197,  505 => 191,  502 => 190,  499 => 189,  496 => 188,  492 => 185,  477 => 173,  474 => 172,  471 => 171,  465 => 167,  459 => 163,  456 => 162,  454 => 161,  448 => 157,  445 => 155,  426 => 149,  415 => 145,  410 => 142,  408 => 141,  404 => 139,  391 => 134,  387 => 132,  384 => 131,  382 => 130,  378 => 129,  374 => 128,  362 => 124,  358 => 122,  355 => 121,  353 => 120,  349 => 119,  345 => 118,  340 => 116,  335 => 114,  331 => 112,  329 => 111,  325 => 109,  319 => 105,  311 => 100,  302 => 98,  292 => 91,  288 => 90,  279 => 88,  270 => 86,  264 => 85,  258 => 82,  253 => 80,  250 => 79,  247 => 78,  244 => 77,  241 => 76,  238 => 75,  235 => 74,  232 => 73,  229 => 72,  226 => 71,  223 => 70,  220 => 69,  217 => 68,  214 => 67,  211 => 66,  208 => 65,  205 => 64,  202 => 62,  199 => 61,  196 => 60,  193 => 59,  190 => 58,  187 => 57,  184 => 56,  181 => 55,  178 => 54,  175 => 53,  172 => 52,  169 => 51,  166 => 50,  163 => 49,  160 => 48,  157 => 47,  153 => 44,  148 => 43,  144 => 42,  141 => 41,  139 => 40,  134 => 38,  130 => 37,  125 => 36,  123 => 35,  117 => 32,  112 => 31,  106 => 29,  100 => 27,  98 => 26,  90 => 21,  86 => 19,  69 => 18,  65 => 16,  54 => 12,  51 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main class=\"d-flex flex-column justify-content-center align-items-center\">
        <section class=\"container container-pagination p-0 m-0\">
            {# Subcategory and topics list #}
            {% if singleTopic is not null and singleTopic.slug is not null %}
                <div class=\"row align-items-center justify-content-between mt-5\">
                    <h3 class=\"topic--title\">{{ singleTopic.subject }}</h3>
                    {% if singleTopic.idUser == sessionUser.id or sessionUser.idGroup >= 2 %}
                        <a title=\"Éditer le titre du sujet\"
                           href=\"/forum/{{ singleTopic.slug }}/topics/{{ singleTopic.id }}/subject/{{ singleTopic.id }}\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                    {% endif %}
                </div>
                <hr class=\"row\">
                {% for message in showMessage %}
                    <div class=\"content-pagination row align-items-start justify-content-between my-5\">
                        <div class=\"avatar--message d-none d-lg-block\">
                            <img src=\"/web/img/avatar/{{ message.avatar }}\" alt=\"\" class=\"rounded border\"
                                 style=\"box-shadow: 0 0 .5rem black;width: 250px;height: 400px;\">
                            <div class=\"avatar-info--message rounded border\">
                                <h5 class=\"text-center text-ln-gold\">Infos</h5>
                                <span class=\"text-ln-gold d-block\">Âge :</span>
                                {% if message.age > 1 %}
                                    {{ message.age }} ans
                                {% else %}
                                    {{ message.age }} an
                                {% endif %}
                                <span class=\"text-ln-gold d-block\">Sexe :</span> {{ message.sexe }}
                                <span class=\"text-ln-gold d-block\">Race :</span> {{ message.race }}
                                <hr>
                                <span class=\"text-ln-gold d-block\">Richesse :</span>
                                {% set coin = coinTransform(message.coin) %}
                                {{ coin.gold }} <span class=\"gold\">or.</span>
                                {{ coin.silver }} <span class=\"silver\">ar.</span>
                                {{ coin.copper }} <span class=\"copper\">cu.</span>
                                <span class=\"text-ln-gold d-block\">Réputation :</span>
                                {% set reput = (message.reputation + voteLike) - voteDislike %}
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
                                <span class=\"text-ln-gold d-block\">Alignement :</span> {{ message.alignement }}
                            </div>
                        </div>
                        <section class=\"container--topic col-lg-9 {% if not loop.index % 2 %}order-first{% endif %}\"
                                 style=\"{% if not loop.index % 2 %}border-radius: 1rem 0 1rem 1rem;{% else %}border-radius: 0 1rem 1rem 1rem;{% endif %}\">
                            <div class=\"container\">
                                <div class=\"row {% if not loop.index % 2 %}justify-content-end{% else %}justify-content-start{% endif %}\">
                                <span style=\"font-size: 1.3rem;\">
                                    <a class=\"card-link\" href=\"/account/character-{{ message.idUser }}\">
                                        {{ message.pseudo }}
                                    </a>
                                </span>
                                </div>
                            </div>
                            <hr class=\"m-0\">
                            <div class=\"container\">
                                <div class=\"row {% if not loop.index % 2 %}justify-content-start{% else %}justify-content-end{% endif %}\">
                                    <p>
                                        {{ message.datePub|localizeddate('medium', 'short') }}
                                    </p>
                                </div>
                            </div>
                            <div class=\"container mb-3\">
                                {{ message.content|raw }}
                            </div>

                            {# Options #}
                            <div class=\"container my-3\">
                                <div class=\"row justify-content-end\">
                                    {% if sessionUser and message.idUser != sessionUser.id %}
                                        <form method=\"post\" class=\"wow fadeIn\">
                                            <input type=\"hidden\" name=\"vote_author\"
                                                   value=\"{{ message.idUser }}\">
                                            <input type=\"hidden\" name=\"vote_message\"
                                                   value=\"{{ message.id }}\">
                                            <button class=\"btn py-1\" name=\"button_like\"
                                                    title=\"Apprécier le message de {{ message.pseudo }}\"
                                                    {% for vote in showUpvote
                                                        if vote.idMessage == message.id %}
                                                {% if vote.is_liked and vote.idPoster == sessionUser.id %}
                                                    disabled
                                                {% endif %}
                                                    {% endfor %}>
                                                <i class=\"fa fa-thumbs-up fa-xs\"></i>
                                            </button>
                                            <button class=\"btn py-1\" name=\"button_dislike\"
                                                    title=\"Déprécier le message de {{ message.pseudo }}\"
                                                    {% for vote in showUpvote
                                                        if vote.idMessage == message.id %}
                                                {% if vote.is_disliked and vote.idPoster == sessionUser.id %}
                                                    disabled
                                                {% endif %}
                                                    {% endfor %}>
                                                <i class=\"fa fa-thumbs-down fa-xs\"></i>
                                            </button>
                                        </form>
                                    {% endif %}


                                    {% if message.idUser == sessionUser.id or sessionUser.idGroup >= 2 %}
                                        <a class=\"btn mx-1 py-1 wow fadeIn\" data-toggle=\"tooltip\"
                                           data-placement=\"top\"
                                           title=\"Éditer\"
                                           href=\"/forum/{{ singleTopic.slug }}/topics/{{ singleTopic.id }}/edit/{{ message.id }}\">
                                            <i class=\"fas fa-edit fa-xs\"></i>
                                        </a>
                                    {% endif %}
                                </div>
                            </div>

                        </section>
                    </div>
                {% endfor %}

                {# Buttons #}
                <div class=\"container my-5\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <form method=\"post\">
                                {% if singleTopic.idUser == sessionUser.id or sessionUser.idGroup >= 2 %}
                                    {% if singleTopic.is_closed == 0 %}
                                        <button name=\"close_subject\" class=\"btn mb-3\">
                                            Clôturer le sujet
                                        </button>
                                    {% else %}
                                        <button name=\"close_subject\" class=\"btn mb-3\">
                                            Rouvrir le sujet
                                        </button>
                                    {% endif %}
                                {% endif %}
                            </form>
                            <a href=\"/forum/{{ singleTopic.slug }}/topics\" class=\"btn\">
                                Retour
                            </a>
                        </div>
                        <div class=\"col-6\">
                            <nav aria-label=\"...\" style=\"background: transparent;\">
                                <ul class=\"pagination justify-content-end pagination-sm\"></ul>
                            </nav>
                        </div>
                    </div>
                </div>
            {% endif %}
        </section>

        {# Create new message #}
        {% if sessionUser is not null and singleTopic.is_closed == 0 and singleTopic.slug is not null %}
            {% if valideAccount.characterValide == 1 or singleTopic.freeAccess == 1 %}
                {% if valideAccount.isBanned == 0 %}
                    <section class=\"container-fluid p-5 mt-auto box--message\">
                        <form method=\"post\" class=\"container\">
                            <fieldset>
                                <legend class=\"h2\">Nouveau message</legend>
                                <div>
                                    <ul class=\"list-group\">
                                        {% for error in addMessage if error is not null %}
                                            <li class=\"list-unstyled\">
                                                <span class=\"badge badge-warning\">Erreur</span>
                                                {{ error }}
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                                <div>
                            <textarea name=\"messageContent\" id=\"messageContent\" cols=\"30\"
                                      rows=\"10\" placeholder=\"Votre message\" class=\"col-lg-12\"></textarea>
                                </div>
                                <div class=\"mt-2 text-center\">
                                    <button type=\"submit\" class=\"btn\">Envoyer</button>
                                </div>
                            </fieldset>
                        </form>
                    </section>
                {% endif %}
            {% endif %}
        {% endif %}
        {% if sessionUser is null %}
            <section class=\"box--message container-fluid p-5\">
                <div class=\"row justify-content-center\">
                    <p class=\"m-auto\">Vous devez être connecté pour poster un nouveau message.</p>
                </div>
            </section>
        {% endif %}
        {% if singleTopic.slug is null and sessionUser is not null %}
            <section class=\"box--message container-fluid py-4 my-5\">
                <div class=\"row flex-column align-items-center\">
                    <p class=\"m-auto\">Ce sujet n'existe pas.</p>
                    <a class=\"card-link\" href=\"/forum\">Retour</a>
                </div>
            </section>
        {% endif %}
        {% if singleTopic.is_closed == 1 and sessionUser is not null %}
            <section class=\"box--message container-fluid py-4 my-5\">
                <div class=\"row flex-column align-items-center\">
                    <p class=\"m-auto\">Ce sujet est clôt.</p>
                    <a class=\"card-link\" href=\"/forum/{{ singleTopic.slug }}/topics\">Retour</a>
                </div>
            </section>
        {% endif %}
    </main>
{% endblock main %}", "/forum/messageCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\forum\\messageCommonIndex.twig");
    }
}
