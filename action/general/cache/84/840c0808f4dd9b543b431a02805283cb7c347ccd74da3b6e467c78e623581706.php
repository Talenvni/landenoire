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
                echo "                        <a class=\"link--edit\" title=\"Éditer le titre du sujet\"
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
                        <div class=\"d-none d-lg-block\">
                            <img src=\"/web/img/avatar/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "avatar", array()), "html", null, true);
                echo "\" alt=\"\" class=\"rounded border\"
                                 style=\"box-shadow: 0 0 .5rem black;width: 250px;height: 400px;\">
                        </div>
                        <section class=\"container--topic col-lg-9 ";
                // line 24
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "order-first";
                }
                echo "\"
                                 style=\"";
                // line 25
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "border-radius: 1rem 0 1rem 1rem;";
                } else {
                    echo "border-radius: 0 1rem 1rem 1rem;";
                }
                echo "\">
                            <div class=\"container\">
                                <div class=\"row ";
                // line 27
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "justify-content-end";
                } else {
                    echo "justify-content-start";
                }
                echo "\">
                                <span>
                                    <a class=\"card-link\" href=\"/account/character-";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "idUser", array()), "html", null, true);
                echo "\">
                                        ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "pseudo", array()), "html", null, true);
                echo "
                                    </a>
                                </span>
                                </div>
                            </div>
                            <hr class=\"m-0\">
                            <div class=\"container\">
                                <div class=\"row ";
                // line 37
                if ( !(twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "justify-content-start";
                } else {
                    echo "justify-content-end";
                }
                echo "\">
                                    <p>
                                        ";
                // line 39
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "datePub", array()), "medium", "short"), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </div>
                            <div class=\"container mb-3\">
                                ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["message"], "content", array());
                echo "
                            </div>

                            ";
                // line 47
                if (((twig_get_attribute($this->env, $this->source, $context["message"], "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                    // line 48
                    echo "                                <div class=\"container my-3\">
                                    <div class=\"row justify-content-end\">
                                        <a class=\"link--edit\" data-toggle=\"tooltip\" data-placement=\"top\"
                                           title=\"Éditer\"
                                           href=\"/forum/";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array()), "html", null, true);
                    echo "/topics/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "id", array()), "html", null, true);
                    echo "/edit/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", array()), "html", null, true);
                    echo "\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </div>
                            ";
                }
                // line 58
                echo "                        </section>
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
            // line 61
            echo "
                ";
            // line 63
            echo "                <div class=\"container my-5\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <form method=\"post\">
                                ";
            // line 67
            if (((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 68
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "is_closed", array()) == 0)) {
                    // line 69
                    echo "                                        <button name=\"close_subject\" class=\"btn mb-3\">
                                            Clôturer le sujet
                                        </button>
                                    ";
                } else {
                    // line 73
                    echo "                                        <button name=\"close_subject\" class=\"btn mb-3\">
                                            Rouvrir le sujet
                                        </button>
                                    ";
                }
                // line 77
                echo "                                ";
            }
            // line 78
            echo "                            </form>
                            <a href=\"/forum/";
            // line 79
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
        // line 91
        echo "        </section>

        ";
        // line 94
        echo "        ";
        if ((( !(null === ($context["sessionUser"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "is_closed", array()) == 0)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array())))) {
            // line 95
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "characterValide", array()) == 1) || (twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "freeAccess", array()) == 1))) {
                // line 96
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "isBanned", array()) == 0)) {
                    // line 97
                    echo "                    <section class=\"container-fluid p-5 mt-auto box--message\">
                        <form method=\"post\" class=\"container\">
                            <fieldset>
                                <legend class=\"h2\">Nouveau message</legend>
                                <div>
                                    <ul class=\"list-group\">
                                        ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["addMessage"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        if ( !(null === $context["error"])) {
                            // line 104
                            echo "                                            <li class=\"list-unstyled\">
                                                <span class=\"badge badge-warning\">Erreur</span>
                                                ";
                            // line 106
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "
                                            </li>
                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
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
                // line 122
                echo "            ";
            }
            // line 123
            echo "        ";
        }
        // line 124
        echo "        ";
        if ((null === ($context["sessionUser"] ?? null))) {
            // line 125
            echo "            <section class=\"box--message container-fluid p-5\">
                <div class=\"row justify-content-center\">
                    <p class=\"m-auto\">Vous devez être connecté pour poster un nouveau message.</p>
                </div>
            </section>
        ";
        }
        // line 131
        echo "        ";
        if (((null === twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array())) &&  !(null === ($context["sessionUser"] ?? null)))) {
            // line 132
            echo "            <section class=\"box--message container-fluid py-4 my-5\">
                <div class=\"row flex-column align-items-center\">
                    <p class=\"m-auto\">Ce sujet n'existe pas.</p>
                    <a class=\"card-link\" href=\"/forum\">Retour</a>
                </div>
            </section>
        ";
        }
        // line 139
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "is_closed", array()) == 1) &&  !(null === ($context["sessionUser"] ?? null)))) {
            // line 140
            echo "            <section class=\"box--message container-fluid py-4 my-5\">
                <div class=\"row flex-column align-items-center\">
                    <p class=\"m-auto\">Ce sujet est clôt.</p>
                    <a class=\"card-link\" href=\"/forum/";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleTopic"] ?? null), "slug", array()), "html", null, true);
            echo "/topics\">Retour</a>
                </div>
            </section>
        ";
        }
        // line 147
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
        return array (  340 => 147,  333 => 143,  328 => 140,  325 => 139,  316 => 132,  313 => 131,  305 => 125,  302 => 124,  299 => 123,  296 => 122,  281 => 109,  271 => 106,  267 => 104,  262 => 103,  254 => 97,  251 => 96,  248 => 95,  245 => 94,  241 => 91,  226 => 79,  223 => 78,  220 => 77,  214 => 73,  208 => 69,  205 => 68,  203 => 67,  197 => 63,  194 => 61,  178 => 58,  165 => 52,  159 => 48,  157 => 47,  151 => 44,  143 => 39,  134 => 37,  124 => 30,  120 => 29,  111 => 27,  102 => 25,  96 => 24,  90 => 21,  86 => 19,  69 => 18,  65 => 16,  54 => 12,  51 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
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
                        <a class=\"link--edit\" title=\"Éditer le titre du sujet\"
                           href=\"/forum/{{ singleTopic.slug }}/topics/{{ singleTopic.id }}/subject/{{ singleTopic.id }}\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                    {% endif %}
                </div>
                <hr class=\"row\">
                {% for message in showMessage %}
                    <div class=\"content-pagination row align-items-start justify-content-between my-5\">
                        <div class=\"d-none d-lg-block\">
                            <img src=\"/web/img/avatar/{{ message.avatar }}\" alt=\"\" class=\"rounded border\"
                                 style=\"box-shadow: 0 0 .5rem black;width: 250px;height: 400px;\">
                        </div>
                        <section class=\"container--topic col-lg-9 {% if not loop.index % 2 %}order-first{% endif %}\"
                                 style=\"{% if not loop.index % 2 %}border-radius: 1rem 0 1rem 1rem;{% else %}border-radius: 0 1rem 1rem 1rem;{% endif %}\">
                            <div class=\"container\">
                                <div class=\"row {% if not loop.index % 2 %}justify-content-end{% else %}justify-content-start{% endif %}\">
                                <span>
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

                            {% if message.idUser == sessionUser.id or sessionUser.idGroup >= 2 %}
                                <div class=\"container my-3\">
                                    <div class=\"row justify-content-end\">
                                        <a class=\"link--edit\" data-toggle=\"tooltip\" data-placement=\"top\"
                                           title=\"Éditer\"
                                           href=\"/forum/{{ singleTopic.slug }}/topics/{{ singleTopic.id }}/edit/{{ message.id }}\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                    </div>
                                </div>
                            {% endif %}
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
