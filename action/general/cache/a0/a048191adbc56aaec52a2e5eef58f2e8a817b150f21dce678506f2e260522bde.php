<?php

/* base.twig */
class __TwigTemplate_c2b8abe5849fa4a3b14d9ed9eefb69754d86f32a6bcac10bb37fcd7010595127 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"fr-FR\">
<head>
    ";
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta name=\"location\" content=\"france\">
    <meta name=\"keywords\" content=\"forum, role-play, jeu de rôle, lande, noire\">
    <meta name=\"author\" content=\"Valentin Saint-Jean\">
    <meta name=\"description\" content=\"Lande Noire est un forum jeu de rôle Dark Fantasy au tour par tour.\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <meta name=\"msapplication-TileColor\" content=\"#da532c\">
    <meta name=\"msapplication-config\" content=\"/web/icon/browserconfig.xml\">
    ";
        // line 17
        echo "    <link rel=\"apple-touch-icon\" sizes=\"180x180\"
          href=\"/web/icon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\"
          href=\"/web/icon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\"
          href=\"/web/icon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"/web/icon/site.webmanifest\">
    <link rel=\"mask-icon\" href=\"/web/icon/safari-pinned-tab.svg\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"/web/icon/favicon.ico\">
    ";
        // line 27
        echo "    <link type=\"text/plain\" rel=\"author\" href=\"/humans.txt\">
    ";
        // line 29
        echo "    <link rel=\"stylesheet\" href=\"/web/scss/vendor/bootstrap/bootstrap.css\">
    ";
        // line 31
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    ";
        // line 33
        echo "    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.colors.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/style.css\">
    ";
        // line 36
        $this->displayBlock('style', $context, $blocks);
        // line 37
        echo "    ";
        // line 38
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
        ";
        // line 39
        if ((($context["alertMessenger"] ?? null) > 0)) {
            // line 40
            echo "            (";
            echo twig_escape_filter($this->env, ($context["alertMessenger"] ?? null), "html", null, true);
            echo ")
        ";
        }
        // line 41
        echo " &bull; LN</title>
    ";
        // line 43
        echo "    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

";
        // line 48
        if ( !(null === ($context["flashMessage"] ?? null))) {
            // line 49
            echo "    <div id=\"flash-container\" class=\"container-fluid py-2 fixed-bottom animated slideInUp border-top\"
         style=\"z-index: 1040; background: #2d3035;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"text-center\">
                    ";
            // line 54
            echo ($context["flashMessage"] ?? null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 60
        echo "
";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
";
        // line 65
        $this->displayBlock('nav', $context, $blocks);
        // line 143
        echo "
<div class=\"decoration-top\"></div>

";
        // line 147
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "
";
        // line 151
        echo "<span id=\"scrollToTop\" class=\"text-center\" aria-hidden=\"true\">
    <i class=\"fas fa-angle-up fa-2x\"></i>
</span>

";
        // line 156
        $this->displayBlock('footer', $context, $blocks);
        // line 185
        echo "
";
        // line 187
        echo "<script src=\"/web/js/jQuery.min.js\"></script>

";
        // line 190
        echo "<script src=\"/web/js/vendor/popper/popper.min.js\"></script>
<script src=\"/web/js/vendor/bootstrap/bootstrap.min.js\"></script>

";
        // line 194
        echo "<script src=\"/web/js/vendor/wowAnimate/wow.min.js\"></script>
<script src=\"/web/js/vendor/rellaxParallax/rellax.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.colors.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/fr.min.js\"></script>
<script src=\"/web/js/script.js\"></script>
<script src=\"/web/js/pagination.js\"></script>

";
        // line 203
        echo "<script type=\"text/javascript\" id=\"cookiebanner\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/cookie-banner/1.2.2/cookiebanner.min.js\"
        data-effect=\"fade\" data-mask=\"true\" data-linkmsg=\"En savoir plus.\"
        data-message=\"Halte, voyageur ! En poursuivant sur ce site, vous acceptez l'utilisation des cookies.\"
        data-zindex=\"9999\"></script>

";
        // line 210
        echo "<script src=\"/web/js/ajax/tavern.ajax.js\"></script>

";
        // line 213
        echo "<script defer
        src=\"https://use.fontawesome.com/releases/v5.0.8/js/solid.js\"
        integrity=\"sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l\"
        crossorigin=\"anonymous\"></script>
<script defer
        src=\"https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js\"
        integrity=\"sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c\"
        crossorigin=\"anonymous\"></script>

";
        // line 223
        echo "<script>
    // ------------
    // WOW animated
    // ------------
    (function () {
        new WOW().init();
    })(); // End WOW animated
</script>
<script>
    // ---------------
    // Rellax parallax
    // ---------------
    (function () {
        new Rellax('.rellax');
    })(); // End Rellax parallax
</script>
<script>
    // --------------
    // Trumbowyg area
    // --------------
    (function () {
        let iconPath = '/web/scss/vendor/trumbowyg/icons.svg';
        \$('textarea').trumbowyg({
            autogrow: true,
            autogrowEditorOnEnter: true,
            svgPath: iconPath,
            lang: 'fr',
            btnsDef: {
                alignement: {
                    dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ico: 'justifyLeft'
                },
                exposant: {
                    dropdown: ['superscript', 'subscript'],
                    ico: 'superscript'
                },
                liste: {
                    dropdown: ['unorderedList', 'orderedList'],
                    ico: 'unorderedList'
                }
            },
            btns: [
                'formatting',
                ['bold', '|', 'em', '|', 'del'],
                'foreColor',
                'alignement',
                'exposant',
                'liste',
                'link',
                'insertImage',
                'horizontalRule',
                'fullscreen'
            ]
        });
    })(); // End Trumbowyg area
</script>
";
        // line 279
        $this->displayBlock('script', $context, $blocks);
        // line 280
        echo "</body>
</html>
";
    }

    // line 36
    public function block_style($context, array $blocks = array())
    {
    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
    }

    // line 65
    public function block_nav($context, array $blocks = array())
    {
        // line 66
        echo "    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-dark p-0 sticky-top\">
        ";
        // line 68
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\"
                aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        ";
        // line 74
        echo "        <div id=\"navbar\" class=\"collapse navbar-collapse justify-content-center text-center\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item ";
        // line 76
        if ((($context["title"] ?? null) == "Accueil")) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"/home\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown ";
        // line 79
        if ((($context["title"] ?? null) == "Codex")) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Codex
                    </a>
                    <div class=\"dropdown-menu text-lg-left text-center\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-header\">L'Univers</a>
                        <a class=\"dropdown-item\" href=\"/codex/guide\">Guide du débutant</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-header\">Personnages</a>
                        <a class=\"dropdown-item\" href=\"/codex/align\">Alignement</a>
                        <a class=\"dropdown-item\" href=\"/codex/character\">Fiche de personnage</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-header\">Généralités</a>
                        <a class=\"dropdown-item\" href=\"/codex/faq\">F.A.Q</a>
                        <a class=\"dropdown-item\" href=\"/codex/reglement-general\">
                            Règlement général
                        </a>
                    </div>
                </li>
                <li class=\"nav-item ";
        // line 99
        if (((($context["title"] ?? null) == "Actualités") || array_key_exists("singleNews", $context))) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"/news\">Actualités</a>
                </li>
                <li class=\"nav-item ";
        // line 102
        if ((($context["title"] ?? null) == "Forum")) {
            echo "active";
        }
        echo "\">
                    <a class=\"nav-link\" href=\"/forum\">Forum</a>
                </li>
                <span class=\"nav-link disabled d-md-block d-none\" style=\"pointer-events: none;\">—</span>
                ";
        // line 106
        if (twig_test_empty(($context["sessionUser"] ?? null))) {
            // line 107
            echo "                    <li class=\"nav-item ";
            if ((($context["title"] ?? null) == "Connexion")) {
                echo "active";
            }
            echo "\">
                        <a class=\"nav-link\" href=\"/sign-in\">Connexion</a>
                    </li>
                ";
        }
        // line 111
        echo "                ";
        if ( !twig_test_empty(($context["sessionUser"] ?? null))) {
            // line 112
            echo "                    <li class=\"nav-item ";
            if ((($context["title"] ?? null) == "Taverne")) {
                echo "active";
            }
            echo "\">
                        <a id=\"view-link\" class=\"nav-link\" href=\"/tavern\">
                            Taverne
                        </a>
                    </li>
                    <li class=\"nav-item ";
            // line 117
            if ((($context["title"] ?? null) == "Boutique")) {
                echo "active";
            }
            echo "\">
                        <a id=\"view-link\" class=\"nav-link\" href=\"/store\">
                            Boutique
                        </a>
                    </li>
                    <li class=\"nav-item ";
            // line 122
            if ((($context["title"] ?? null) == "Profil")) {
                echo "active";
            }
            echo "\">
                        <a class=\"nav-link text-ln-gold\" href=\"/account/character-";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()), "html", null, true);
            echo "\">
                            ";
            // line 124
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "pseudo", array()), 1, true, ""), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li class=\"nav-item ";
            // line 127
            if ((($context["title"] ?? null) == "Missive privées")) {
                echo "active";
            }
            echo "\">
                        <a class=\"nav-link\" href=\"/messenger\">
                            Missives
                            ";
            // line 130
            if ((($context["alertMessenger"] ?? null) > 0)) {
                // line 131
                echo "                                <small class=\"badge-pill bg-ln-gold-ghost\">";
                echo twig_escape_filter($this->env, ($context["alertMessenger"] ?? null), "html", null, true);
                echo "</small>
                            ";
            }
            // line 133
            echo "                        </a>
                    </li>
                    <li class=\"nav-item ";
            // line 135
            if ((($context["title"] ?? null) == "Connexion")) {
                echo "active";
            }
            echo "\">
                        <a class=\"nav-link\" href=\"/sign-out\">Déconnexion</a>
                    </li>
                ";
        }
        // line 139
        echo "            </ul>
        </div>
    </nav>
";
    }

    // line 147
    public function block_main($context, array $blocks = array())
    {
    }

    // line 156
    public function block_footer($context, array $blocks = array())
    {
        // line 157
        echo "    <footer role=\"contentinfo\" class=\"container-fluid bg-ln-coal py-3 border-top\">
        <div class=\"row my-3\">
            <div class=\"col-lg-12 text-center\">
                <span>
                    <a href=\"/contact\" class=\"text-uppercase h5\">Contact</a>
                </span>
            </div>
        </div>
        <div class=\"row my-3\">
            <div class=\"col-lg-12 text-center text-muted\">
                <span>
                    <ins class=\"legalmark d-inline-block\">&copy;</ins>2018 Lande Noire. Tous droits réservés.
                </span>
                <br>
                <span>Toutes les oeuvres affichées appartiennent à leur propriétaire.</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <a href=\"https://pegi.info/\" target=\"_blank\">
                    <img src=\"/web/img/thumbs/pegi18.jpg\" alt=\"Pegi 18\" title=\"Déconseillé aux moins de 18 ans\">
                </a>
                <img src=\"/web/img/thumbs/violence.jpg\" alt=\"Violence\" title=\"Violence\">
                <img src=\"/web/img/thumbs/bad-language.jpg\" alt=\"Langage grossier\" title=\"Langage grossier\">
            </div>
        </div>
    </footer>
";
    }

    // line 279
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 279,  428 => 157,  425 => 156,  420 => 147,  413 => 139,  404 => 135,  400 => 133,  394 => 131,  392 => 130,  384 => 127,  378 => 124,  374 => 123,  368 => 122,  358 => 117,  347 => 112,  344 => 111,  334 => 107,  332 => 106,  323 => 102,  315 => 99,  290 => 79,  282 => 76,  278 => 74,  271 => 68,  268 => 66,  265 => 65,  260 => 62,  255 => 36,  249 => 280,  247 => 279,  189 => 223,  178 => 213,  174 => 210,  166 => 203,  156 => 194,  151 => 190,  147 => 187,  144 => 185,  142 => 156,  136 => 151,  133 => 149,  131 => 147,  126 => 143,  124 => 65,  121 => 63,  119 => 62,  116 => 60,  107 => 54,  100 => 49,  98 => 48,  92 => 43,  89 => 41,  83 => 40,  81 => 39,  76 => 38,  74 => 37,  72 => 36,  67 => 33,  64 => 31,  61 => 29,  58 => 27,  47 => 17,  34 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr-FR\">
<head>
    {# Meta #}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta name=\"location\" content=\"france\">
    <meta name=\"keywords\" content=\"forum, role-play, jeu de rôle, lande, noire\">
    <meta name=\"author\" content=\"Valentin Saint-Jean\">
    <meta name=\"description\" content=\"Lande Noire est un forum jeu de rôle Dark Fantasy au tour par tour.\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <meta name=\"msapplication-TileColor\" content=\"#da532c\">
    <meta name=\"msapplication-config\" content=\"/web/icon/browserconfig.xml\">
    {# Icon #}
    <link rel=\"apple-touch-icon\" sizes=\"180x180\"
          href=\"/web/icon/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\"
          href=\"/web/icon/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\"
          href=\"/web/icon/favicon-16x16.png\">
    <link rel=\"manifest\" href=\"/web/icon/site.webmanifest\">
    <link rel=\"mask-icon\" href=\"/web/icon/safari-pinned-tab.svg\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"/web/icon/favicon.ico\">
    {# Humans #}
    <link type=\"text/plain\" rel=\"author\" href=\"/humans.txt\">
    {# Bootstrap #}
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/bootstrap/bootstrap.css\">
    {# Animate #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    {# Style #}
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.colors.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/style.css\">
    {% block style %}{% endblock style %}
    {# Title #}
    <title>{{ title }}
        {% if alertMessenger > 0 %}
            ({{ alertMessenger }})
        {% endif %} &bull; LN</title>
    {# Captcha #}
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

{# Flash Message #}
{% if flashMessage is not null %}
    <div id=\"flash-container\" class=\"container-fluid py-2 fixed-bottom animated slideInUp border-top\"
         style=\"z-index: 1040; background: #2d3035;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"text-center\">
                    {{ flashMessage|raw }}
                </div>
            </div>
        </div>
    </div>
{% endif %}

{# Header #}
{% block header %}{% endblock header %}

{# Nav #}
{% block nav %}
    <nav id=\"nav\" class=\"navbar navbar-expand-lg navbar-dark p-0 sticky-top\">
        {# Button #}
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\"
                aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        {# Navbar #}
        <div id=\"navbar\" class=\"collapse navbar-collapse justify-content-center text-center\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item {% if title == 'Accueil' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"/home\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown {% if title == 'Codex' %}active{% endif %}\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Codex
                    </a>
                    <div class=\"dropdown-menu text-lg-left text-center\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-header\">L'Univers</a>
                        <a class=\"dropdown-item\" href=\"/codex/guide\">Guide du débutant</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-header\">Personnages</a>
                        <a class=\"dropdown-item\" href=\"/codex/align\">Alignement</a>
                        <a class=\"dropdown-item\" href=\"/codex/character\">Fiche de personnage</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-header\">Généralités</a>
                        <a class=\"dropdown-item\" href=\"/codex/faq\">F.A.Q</a>
                        <a class=\"dropdown-item\" href=\"/codex/reglement-general\">
                            Règlement général
                        </a>
                    </div>
                </li>
                <li class=\"nav-item {% if title == 'Actualités' or singleNews is defined %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"/news\">Actualités</a>
                </li>
                <li class=\"nav-item {% if title == 'Forum' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"/forum\">Forum</a>
                </li>
                <span class=\"nav-link disabled d-md-block d-none\" style=\"pointer-events: none;\">—</span>
                {% if sessionUser is empty %}
                    <li class=\"nav-item {% if title == 'Connexion' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"/sign-in\">Connexion</a>
                    </li>
                {% endif %}
                {% if sessionUser is not empty %}
                    <li class=\"nav-item {% if title == 'Taverne' %}active{% endif %}\">
                        <a id=\"view-link\" class=\"nav-link\" href=\"/tavern\">
                            Taverne
                        </a>
                    </li>
                    <li class=\"nav-item {% if title == 'Boutique' %}active{% endif %}\">
                        <a id=\"view-link\" class=\"nav-link\" href=\"/store\">
                            Boutique
                        </a>
                    </li>
                    <li class=\"nav-item {% if title == 'Profil' %}active{% endif %}\">
                        <a class=\"nav-link text-ln-gold\" href=\"/account/character-{{ sessionUser.id }}\">
                            {{ sessionUser.pseudo|truncate(1, true, '') }}
                        </a>
                    </li>
                    <li class=\"nav-item {% if title == 'Missive privées' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"/messenger\">
                            Missives
                            {% if alertMessenger > 0 %}
                                <small class=\"badge-pill bg-ln-gold-ghost\">{{ alertMessenger }}</small>
                            {% endif %}
                        </a>
                    </li>
                    <li class=\"nav-item {% if title == 'Connexion' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"/sign-out\">Déconnexion</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </nav>
{% endblock nav %}

<div class=\"decoration-top\"></div>

{# Main #}
{% block main %}
{% endblock main %}

{# Scroll to Top #}
<span id=\"scrollToTop\" class=\"text-center\" aria-hidden=\"true\">
    <i class=\"fas fa-angle-up fa-2x\"></i>
</span>

{# Footer #}
{% block footer %}
    <footer role=\"contentinfo\" class=\"container-fluid bg-ln-coal py-3 border-top\">
        <div class=\"row my-3\">
            <div class=\"col-lg-12 text-center\">
                <span>
                    <a href=\"/contact\" class=\"text-uppercase h5\">Contact</a>
                </span>
            </div>
        </div>
        <div class=\"row my-3\">
            <div class=\"col-lg-12 text-center text-muted\">
                <span>
                    <ins class=\"legalmark d-inline-block\">&copy;</ins>2018 Lande Noire. Tous droits réservés.
                </span>
                <br>
                <span>Toutes les oeuvres affichées appartiennent à leur propriétaire.</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <a href=\"https://pegi.info/\" target=\"_blank\">
                    <img src=\"/web/img/thumbs/pegi18.jpg\" alt=\"Pegi 18\" title=\"Déconseillé aux moins de 18 ans\">
                </a>
                <img src=\"/web/img/thumbs/violence.jpg\" alt=\"Violence\" title=\"Violence\">
                <img src=\"/web/img/thumbs/bad-language.jpg\" alt=\"Langage grossier\" title=\"Langage grossier\">
            </div>
        </div>
    </footer>
{% endblock footer %}

{# jQuery #}
<script src=\"/web/js/jQuery.min.js\"></script>

{# Bootstrap #}
<script src=\"/web/js/vendor/popper/popper.min.js\"></script>
<script src=\"/web/js/vendor/bootstrap/bootstrap.min.js\"></script>

{# Main jQuery #}
<script src=\"/web/js/vendor/wowAnimate/wow.min.js\"></script>
<script src=\"/web/js/vendor/rellaxParallax/rellax.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.colors.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/fr.min.js\"></script>
<script src=\"/web/js/script.js\"></script>
<script src=\"/web/js/pagination.js\"></script>

{# Cookie Accept #}
<script type=\"text/javascript\" id=\"cookiebanner\"
        src=\"https://cdnjs.cloudflare.com/ajax/libs/cookie-banner/1.2.2/cookiebanner.min.js\"
        data-effect=\"fade\" data-mask=\"true\" data-linkmsg=\"En savoir plus.\"
        data-message=\"Halte, voyageur ! En poursuivant sur ce site, vous acceptez l'utilisation des cookies.\"
        data-zindex=\"9999\"></script>

{# Ajax #}
<script src=\"/web/js/ajax/tavern.ajax.js\"></script>

{# FontAwesome #}
<script defer
        src=\"https://use.fontawesome.com/releases/v5.0.8/js/solid.js\"
        integrity=\"sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l\"
        crossorigin=\"anonymous\"></script>
<script defer
        src=\"https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js\"
        integrity=\"sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c\"
        crossorigin=\"anonymous\"></script>

{# Main script #}
<script>
    // ------------
    // WOW animated
    // ------------
    (function () {
        new WOW().init();
    })(); // End WOW animated
</script>
<script>
    // ---------------
    // Rellax parallax
    // ---------------
    (function () {
        new Rellax('.rellax');
    })(); // End Rellax parallax
</script>
<script>
    // --------------
    // Trumbowyg area
    // --------------
    (function () {
        let iconPath = '/web/scss/vendor/trumbowyg/icons.svg';
        \$('textarea').trumbowyg({
            autogrow: true,
            autogrowEditorOnEnter: true,
            svgPath: iconPath,
            lang: 'fr',
            btnsDef: {
                alignement: {
                    dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ico: 'justifyLeft'
                },
                exposant: {
                    dropdown: ['superscript', 'subscript'],
                    ico: 'superscript'
                },
                liste: {
                    dropdown: ['unorderedList', 'orderedList'],
                    ico: 'unorderedList'
                }
            },
            btns: [
                'formatting',
                ['bold', '|', 'em', '|', 'del'],
                'foreColor',
                'alignement',
                'exposant',
                'liste',
                'link',
                'insertImage',
                'horizontalRule',
                'fullscreen'
            ]
        });
    })(); // End Trumbowyg area
</script>
{% block script %}{% endblock script %}
</body>
</html>
", "base.twig", "C:\\wamp64\\www\\landenoire\\view\\base.twig");
    }
}
