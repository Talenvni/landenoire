<?php

/* /404.twig */
class __TwigTemplate_ca2ed04164bf710838ae2c06ae212752cc7e5f0e3413832133eccc944c3db2c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/404.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'script' => array($this, 'block_script'),
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

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "    <main role=\"main\">
        ";
        // line 7
        echo "        <section class=\"container d-flex flex-column align-items-center justify-content-around my-5 px-5 px-lg-0\">
            <div class=\"row\">
                <div class=\"text--white\">
                    <p class=\"h1 error--title\">Erreur 404</p>
                    <p>Un cataclysme a ravagé Lande Noire et a détruit cette page.<br>
                        Vous voilà désormais pris au piège
                        dans l'antre de Shana. C'est ballot.</p>
                    <p>Vous pouvez tenter de revenir <a href=\"/home\" class=\"nav-link d-inline p-0\">sur vos
                            pas</a> ou bien de <span id=\"shana-game\"
                                                     class=\"nav-link d-inline p-0 cursor-pointer\">
                            deviner le nombre
                        </span>
                        de Shana. </p>
                </div>
            </div>
            <div id=\"shana-block\" class=\"row my-3\">
                <div class=\"d-flex flex-column\">
                    <div class=\"text--white\">
                        <blockquote class=\"blockquote\">
                            <p class=\"lead\">Bienvenue, aventurier !</p>
                            <p class=\"h6\">
                                Devine combien de voyageurs j'ai massacré aujourd'hui et je te laisserai partir !
                                <br>
                                Tu as droit à 6 essais.
                            </p>
                            <span class=\"blockquote-footer text-right\">Shana</span>
                        </blockquote>
                    </div>
                    <label for=\"shana-numb\" hidden></label>
                    <input type=\"number\" id=\"shana-numb\" class=\"m-auto btn btn-lg text-left\"
                           placeholder=\"Deviner\"
                           min=\"0\" max=\"100\"
                           style=\"cursor: help; -webkit-appearance: none;
                       -moz-appearance: textfield;\" required>
                    <p id=\"shana-answer\" class=\"text--white mt-4 m-0\"></p>
                </div>
            </div>

        </section>
    </main>
";
    }

    // line 49
    public function block_script($context, array $blocks = array())
    {
        // line 50
        echo "    <script>
        /*** 404 Game ***/
        \$('#shana-block').hide();
        \$('#shana-game').on('click', function () {
            \$('#shana-block').fadeIn('slow');
        });

        let chance = 6;
        let shanaGuess = Math.floor((Math.random() * 100) + 1);
        \$('#shana-numb').on('change', function () {
            let playerGuess = parseInt(\$(this).val());
            if (playerGuess) {
                if (playerGuess !== shanaGuess) {
                    if (chance > 1) {
                        if (playerGuess < shanaGuess) {
                            chance--;
                            \$('#shana-answer').html('J\\'en ai dévorés plus que ça.<br>Il te reste ' + (chance) + ' essais !')
                        }
                        else if (playerGuess > shanaGuess) {
                            chance--;
                            \$('#shana-answer').html('J\\'en ai dévorés moins que ça.<br>Il te reste ' + (chance) + ' essais !')
                        }
                    }
                    else if (chance === 1) {
                        chance--;
                        \$('#shana-answer').html('Il te reste ' + (chance + 1) + ' essai !')
                    }
                    else {
                        \$('#shana-numb').attr('hidden', true);
                        \$('#shana-answer').html('Dommage pour toi,<br>' + 'Tu as épuisé toutes tes chances !')
                            .after(\$('<p>', {'class': 'text-warning', text: 'Vous êtes mort.'}));
                    }
                }
                else if (playerGuess === shanaGuess && chance !== 0) {
                    \$('#shana-numb').attr('hidden', true);
                    \$('#shana-answer').html('Tu as trouvé...<br>' + 'Pars avant que je ne change d\\'avis !')
                        .after(\$('<p>', {'class': 'text-warning', text: 'Vous vous enfuyez.'}));
                }
            }
            else if (isNaN(playerGuess)) {
                \$('#shana-answer').html('Comptes-tu deviner un nombre avec autre chose...<br> qu\\'un nombre, crétin ?')
            }

        }); // End Game
    </script>
";
    }

    public function getTemplateName()
    {
        return "/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 50,  83 => 49,  39 => 7,  36 => 5,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{# Page 404 #}
{% block main %}
    <main role=\"main\">
        {# Error 404#}
        <section class=\"container d-flex flex-column align-items-center justify-content-around my-5 px-5 px-lg-0\">
            <div class=\"row\">
                <div class=\"text--white\">
                    <p class=\"h1 error--title\">Erreur 404</p>
                    <p>Un cataclysme a ravagé Lande Noire et a détruit cette page.<br>
                        Vous voilà désormais pris au piège
                        dans l'antre de Shana. C'est ballot.</p>
                    <p>Vous pouvez tenter de revenir <a href=\"/home\" class=\"nav-link d-inline p-0\">sur vos
                            pas</a> ou bien de <span id=\"shana-game\"
                                                     class=\"nav-link d-inline p-0 cursor-pointer\">
                            deviner le nombre
                        </span>
                        de Shana. </p>
                </div>
            </div>
            <div id=\"shana-block\" class=\"row my-3\">
                <div class=\"d-flex flex-column\">
                    <div class=\"text--white\">
                        <blockquote class=\"blockquote\">
                            <p class=\"lead\">Bienvenue, aventurier !</p>
                            <p class=\"h6\">
                                Devine combien de voyageurs j'ai massacré aujourd'hui et je te laisserai partir !
                                <br>
                                Tu as droit à 6 essais.
                            </p>
                            <span class=\"blockquote-footer text-right\">Shana</span>
                        </blockquote>
                    </div>
                    <label for=\"shana-numb\" hidden></label>
                    <input type=\"number\" id=\"shana-numb\" class=\"m-auto btn btn-lg text-left\"
                           placeholder=\"Deviner\"
                           min=\"0\" max=\"100\"
                           style=\"cursor: help; -webkit-appearance: none;
                       -moz-appearance: textfield;\" required>
                    <p id=\"shana-answer\" class=\"text--white mt-4 m-0\"></p>
                </div>
            </div>

        </section>
    </main>
{% endblock main %}

{% block script %}
    <script>
        /*** 404 Game ***/
        \$('#shana-block').hide();
        \$('#shana-game').on('click', function () {
            \$('#shana-block').fadeIn('slow');
        });

        let chance = 6;
        let shanaGuess = Math.floor((Math.random() * 100) + 1);
        \$('#shana-numb').on('change', function () {
            let playerGuess = parseInt(\$(this).val());
            if (playerGuess) {
                if (playerGuess !== shanaGuess) {
                    if (chance > 1) {
                        if (playerGuess < shanaGuess) {
                            chance--;
                            \$('#shana-answer').html('J\\'en ai dévorés plus que ça.<br>Il te reste ' + (chance) + ' essais !')
                        }
                        else if (playerGuess > shanaGuess) {
                            chance--;
                            \$('#shana-answer').html('J\\'en ai dévorés moins que ça.<br>Il te reste ' + (chance) + ' essais !')
                        }
                    }
                    else if (chance === 1) {
                        chance--;
                        \$('#shana-answer').html('Il te reste ' + (chance + 1) + ' essai !')
                    }
                    else {
                        \$('#shana-numb').attr('hidden', true);
                        \$('#shana-answer').html('Dommage pour toi,<br>' + 'Tu as épuisé toutes tes chances !')
                            .after(\$('<p>', {'class': 'text-warning', text: 'Vous êtes mort.'}));
                    }
                }
                else if (playerGuess === shanaGuess && chance !== 0) {
                    \$('#shana-numb').attr('hidden', true);
                    \$('#shana-answer').html('Tu as trouvé...<br>' + 'Pars avant que je ne change d\\'avis !')
                        .after(\$('<p>', {'class': 'text-warning', text: 'Vous vous enfuyez.'}));
                }
            }
            else if (isNaN(playerGuess)) {
                \$('#shana-answer').html('Comptes-tu deviner un nombre avec autre chose...<br> qu\\'un nombre, crétin ?')
            }

        }); // End Game
    </script>
{% endblock script %}", "/404.twig", "C:\\wamp64\\www\\landenoire\\view\\redirect\\404.twig");
    }
}
