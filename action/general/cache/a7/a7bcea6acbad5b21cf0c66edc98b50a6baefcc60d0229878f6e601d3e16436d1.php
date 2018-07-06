<?php

/* admin.twig */
class __TwigTemplate_8fa2fe1a2dfa79dd602bb63b1a4c5c34ccba1e90010abc1d6a4b4c3dedf845b3 extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    ";
        // line 31
        echo "    <link rel=\"stylesheet\" href=\"/web/scss/vendor/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.colors.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/adminCSS/admin4b.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css\">
    ";
        // line 36
        $this->displayBlock('style', $context, $blocks);
        // line 37
        echo "    ";
        // line 38
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " &bull; LN</title>
    ";
        // line 40
        echo "    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

";
        // line 45
        if ( !(null === ($context["flashMessage"] ?? null))) {
            // line 46
            echo "    <div id=\"flash-container\" class=\"container-fluid py-2 fixed-bottom animated slideInUp border-top\"
         style=\"z-index: 1040; background: #2d3035;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"text-center\">
                    ";
            // line 51
            echo ($context["flashMessage"] ?? null);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 57
        echo "
";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "
<div class=\"app\">
    <div class=\"app-body\">
        ";
        // line 64
        echo "        ";
        $this->displayBlock('nav', $context, $blocks);
        // line 142
        echo "        <main class=\"app-content\">
            <nav class=\"navbar navbar-expand navbar-light bg-light\">
                <button type=\"button\" class=\"btn btn-sidebar\" data-toggle=\"sidebar\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <div class=\"navbar-brand\">Lande Noire</div>
            </nav>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Get started</li>
                </ol>
            </nav>

            ";
        // line 156
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 157
        echo "        </main>
    </div>
</div>

";
        // line 162
        echo "<script src=\"/web/js/jQuery.min.js\"></script>

";
        // line 165
        echo "<script src=\"/web/js/vendor/trumbowyg/trumbowyg.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.colors.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/fr.min.js\"></script>
<script src=\"/web/js/vendor/adminJS/admin4b.min.js\"></script>
<script src=\"https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js\"></script>
<script src=\"/web/js/script.js\"></script>

";
        // line 173
        echo "
";
        // line 175
        echo "<script defer
        src=\"https://use.fontawesome.com/releases/v5.0.8/js/solid.js\"
        integrity=\"sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l\"
        crossorigin=\"anonymous\"></script>
<script defer
        src=\"https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js\"
        integrity=\"sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c\"
        crossorigin=\"anonymous\"></script>

";
        // line 185
        echo "
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
<script>
    // --------------
    // Data Table
    // --------------
    \$(document).ready(function () {
        \$('.listUsers').DataTable({
            \"language\": {
                \"lengthMenu\": \"Afficher _MENU_ par page\",
                \"zeroRecords\": \"Aucun champ trouvé\",
                \"info\": \"\",
                \"infoEmpty\": \"Aucune donnée disponible\",
                \"infoFiltered\": \"(filtered from _MAX_ total records)\",
                \"search\": \"Rechercher : \",
                \"paginate\": {
                    \"first\": \"Début\",
                    \"last\": \"Fin\",
                    \"next\": \"Suivant\",
                    \"previous\": \"Précédent\"
                }
            }
        });
    }); // End Data Table
</script>
";
        // line 249
        $this->displayBlock('script', $context, $blocks);
        // line 250
        echo "</body>
</html>
";
    }

    // line 36
    public function block_style($context, array $blocks = array())
    {
    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
    }

    // line 64
    public function block_nav($context, array $blocks = array())
    {
        // line 65
        echo "            <div class=\"app-sidebar sidebar-slide-left d-flex flex-column justify-content-between\">
                <div>
                    <div class=\"text-right\">
                        <button type=\"button\" class=\"btn btn-sidebar\" data-dismiss=\"sidebar\">
                            <span class=\"x\"></span>
                        </button>
                    </div>
                    <div class=\"sidebar-header\">
                        <img src=\"/web/img/avatar/";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "avatar", array()), "html", null, true);
        echo "\" class=\"user-photo\">
                        <p class=\"username\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "pseudo", array()), "html", null, true);
        echo "<br>
                            <small>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "groupName", array()), "html", null, true);
        echo "</small>
                        </p>
                    </div>
                    <ul id=\"sidebar-nav\" class=\"sidebar-nav\">
                        <li class=\"sidebar-nav-group\">
                            <a href=\"#users\" class=\"sidebar-nav-link\" data-toggle=\"collapse\">
                                <i class=\"icon-notebook\"></i> Communauté
                            </a>
                            <ul id=\"users\" class=\"collapse\" data-parent=\"#sidebar-nav\">
                                <li>
                                    <a href=\"/oversight\" class=\"sidebar-nav-link\">
                                        Accueil
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul id=\"sidebar-nav\" class=\"sidebar-nav\">
                        <li class=\"sidebar-nav-group\">
                            <a href=\"#news\" class=\"sidebar-nav-link\" data-toggle=\"collapse\">
                                <i class=\"icon-notebook\"></i> Actualités
                            </a>
                            <ul id=\"news\" class=\"collapse\" data-parent=\"#sidebar-nav\">
                                <li>
                                    <a href=\"/oversight/news\" class=\"sidebar-nav-link\">
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href=\"/oversight/news/create\" class=\"sidebar-nav-link\">
                                        Création
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul id=\"sidebar-nav\" class=\"sidebar-nav\">
                        <li class=\"sidebar-nav-group\">
                            <a href=\"#forum\" class=\"sidebar-nav-link\" data-toggle=\"collapse\">
                                <i class=\"icon-notebook\"></i> Forum
                            </a>
                            <ul id=\"forum\" class=\"collapse\" data-parent=\"#sidebar-nav\">
                                <li>
                                    <a href=\"/oversight/forum\" class=\"sidebar-nav-link\">
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href=\"/oversight/forum/add/create\" class=\"sidebar-nav-link\">
                                        Création
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class=\"sidebar-footer\">
                        <a href=\"/home\" data-toggle=\"tooltip\" title=\"Logout\">
                            <i class=\"fa fa-power-off\"></i>
                        </a>
                    </div>
                </div>
            </div>
        ";
    }

    // line 156
    public function block_main($context, array $blocks = array())
    {
    }

    // line 249
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 249,  343 => 156,  272 => 75,  268 => 74,  264 => 73,  254 => 65,  251 => 64,  246 => 59,  241 => 36,  235 => 250,  233 => 249,  167 => 185,  156 => 175,  153 => 173,  144 => 165,  140 => 162,  134 => 157,  131 => 156,  116 => 142,  113 => 64,  108 => 60,  106 => 59,  103 => 57,  94 => 51,  87 => 46,  85 => 45,  79 => 40,  74 => 38,  72 => 37,  70 => 36,  63 => 31,  60 => 29,  57 => 27,  46 => 17,  33 => 5,  28 => 1,);
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
    {# Animate #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
    {# Style #}
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/bootstrap/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/trumbowyg/trumbowyg.colors.css\">
    <link rel=\"stylesheet\" href=\"/web/scss/vendor/adminCSS/admin4b.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css\">
    {% block style %}{% endblock style %}
    {# Title #}
    <title>{{ title }} &bull; LN</title>
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

<div class=\"app\">
    <div class=\"app-body\">
        {# Nav #}
        {% block nav %}
            <div class=\"app-sidebar sidebar-slide-left d-flex flex-column justify-content-between\">
                <div>
                    <div class=\"text-right\">
                        <button type=\"button\" class=\"btn btn-sidebar\" data-dismiss=\"sidebar\">
                            <span class=\"x\"></span>
                        </button>
                    </div>
                    <div class=\"sidebar-header\">
                        <img src=\"/web/img/avatar/{{ sessionUser.avatar }}\" class=\"user-photo\">
                        <p class=\"username\">{{ sessionUser.pseudo }}<br>
                            <small>{{ sessionUser.groupName }}</small>
                        </p>
                    </div>
                    <ul id=\"sidebar-nav\" class=\"sidebar-nav\">
                        <li class=\"sidebar-nav-group\">
                            <a href=\"#users\" class=\"sidebar-nav-link\" data-toggle=\"collapse\">
                                <i class=\"icon-notebook\"></i> Communauté
                            </a>
                            <ul id=\"users\" class=\"collapse\" data-parent=\"#sidebar-nav\">
                                <li>
                                    <a href=\"/oversight\" class=\"sidebar-nav-link\">
                                        Accueil
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul id=\"sidebar-nav\" class=\"sidebar-nav\">
                        <li class=\"sidebar-nav-group\">
                            <a href=\"#news\" class=\"sidebar-nav-link\" data-toggle=\"collapse\">
                                <i class=\"icon-notebook\"></i> Actualités
                            </a>
                            <ul id=\"news\" class=\"collapse\" data-parent=\"#sidebar-nav\">
                                <li>
                                    <a href=\"/oversight/news\" class=\"sidebar-nav-link\">
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href=\"/oversight/news/create\" class=\"sidebar-nav-link\">
                                        Création
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul id=\"sidebar-nav\" class=\"sidebar-nav\">
                        <li class=\"sidebar-nav-group\">
                            <a href=\"#forum\" class=\"sidebar-nav-link\" data-toggle=\"collapse\">
                                <i class=\"icon-notebook\"></i> Forum
                            </a>
                            <ul id=\"forum\" class=\"collapse\" data-parent=\"#sidebar-nav\">
                                <li>
                                    <a href=\"/oversight/forum\" class=\"sidebar-nav-link\">
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href=\"/oversight/forum/add/create\" class=\"sidebar-nav-link\">
                                        Création
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class=\"sidebar-footer\">
                        <a href=\"/home\" data-toggle=\"tooltip\" title=\"Logout\">
                            <i class=\"fa fa-power-off\"></i>
                        </a>
                    </div>
                </div>
            </div>
        {% endblock nav %}
        <main class=\"app-content\">
            <nav class=\"navbar navbar-expand navbar-light bg-light\">
                <button type=\"button\" class=\"btn btn-sidebar\" data-toggle=\"sidebar\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <div class=\"navbar-brand\">Lande Noire</div>
            </nav>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Get started</li>
                </ol>
            </nav>

            {# Main #}
            {% block main %}{% endblock main %}
        </main>
    </div>
</div>

{# jQuery #}
<script src=\"/web/js/jQuery.min.js\"></script>

{# Main jQuery #}
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/trumbowyg.colors.min.js\"></script>
<script src=\"/web/js/vendor/trumbowyg/fr.min.js\"></script>
<script src=\"/web/js/vendor/adminJS/admin4b.min.js\"></script>
<script src=\"https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js\"></script>
<script src=\"/web/js/script.js\"></script>

{# Ajax #}

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
<script>
    // --------------
    // Data Table
    // --------------
    \$(document).ready(function () {
        \$('.listUsers').DataTable({
            \"language\": {
                \"lengthMenu\": \"Afficher _MENU_ par page\",
                \"zeroRecords\": \"Aucun champ trouvé\",
                \"info\": \"\",
                \"infoEmpty\": \"Aucune donnée disponible\",
                \"infoFiltered\": \"(filtered from _MAX_ total records)\",
                \"search\": \"Rechercher : \",
                \"paginate\": {
                    \"first\": \"Début\",
                    \"last\": \"Fin\",
                    \"next\": \"Suivant\",
                    \"previous\": \"Précédent\"
                }
            }
        });
    }); // End Data Table
</script>
{% block script %}{% endblock script %}
</body>
</html>
", "admin.twig", "C:\\wamp64\\www\\landenoire\\view\\admin.twig");
    }
}
