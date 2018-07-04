<?php

/* /home/homeCommonIndex.twig */
class __TwigTemplate_0fdf897caf18213ebe792f29dd4c3172e27a7dedab1293aef497c9d31d01de04 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/home/homeCommonIndex.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'header' => array($this, 'block_header'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        .mask {
            min-width: 100%;
            min-height: inherit;
            top: 0;
            left: 0;
            position: absolute;
            background: rgba(0,0,0,.6);
        }
    </style>
";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "    <header role=\"banner\" class=\"header--home d-flex flex-column\">
        ";
        // line 19
        echo "        <div class=\"container-fluid wow slideInDown\" data-wow-duration=\"1s\">
            <div class=\"row d-md-flex justify-content-center align-items-center d-none\">
                <img src=\"/web/img/background/logo.png\" alt=\"Logo\" class=\"img-fluid rellax\"
                     data-rellax-speed=\"3\">
            </div>
        </div>
        ";
        // line 26
        echo "        <div class=\"container-fluid wow slideInLeft\" data-wow-duration=\"1s\">
            <div class=\"row\">
                <div class=\"col-lg-12 d-md-flex align-items-center\">
                    <h2>Actualités et nouveautés</h2>
                    <a href=\"/news\" class=\"mx-3\">Voir les actualités</a>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recentNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 35
            echo "                    <div class=\"col-lg-3 p-0 p-md-2\">
                        <a href=\"/news/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "slug", array()), "html", null, true);
            echo "\">
                            <div class=\"news--home d-flex flex-column justify-content-end my-3 px-2 border\"
                                 style=\"background: url('/web/img/news/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "img", array()), "html", null, true);
            echo "');background-size: cover;position: relative;min-width: 20vw; min-height: 25vh;overflow: hidden;\">
                                <div style=\"position: relative;z-index: 1;\">
                                    <div class=\"d-flex justify-content-between\">
                                        <span>";
            // line 41
            echo twig_escape_filter($this->env, ("Il y a " . $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "datePub", array()))), "html", null, true);
            echo "</span>
                                        <span><i class=\"fas fa-comment\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "comment", array()), "html", null, true);
            echo "</span>
                                    </div>
                                    <h3 style=\"min-height: 10vh;\">
                                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", array()), 42, true), "html", null, true);
            echo "
                                    </h3>
                                </div>
                                <div class=\"mask\"></div>
                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
        </div>
    </header>
";
    }

    // line 58
    public function block_main($context, array $blocks = array())
    {
        // line 59
        echo "    <main role=\"main\">
        ";
        // line 61
        echo "        <section class=\"home--container-intro container\">
            <div class=\"my-5\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"font-weight-bold\">Introduction</h1>
                    </div>
                </div>
                <div class=\"row\">
                    ";
        // line 70
        echo "                    <div class=\"col-lg-7 text-justify\">
                        <p>
                            Lande Noire est un <abbr title=\"Role Playing Game\">RPG</abbr>
                            écriture basé sur un univers fictif
                            <span lang=\"en\" translate=\"no\">Dark Fantasy / SteamPunk</span>,
                            <strong>déconseillé aux moins de 18 ans</strong>.
                            Plongez au sein d'intrigues politiques,
                            d'explorations avant-gardistes et de conflits destructeurs.
                        </p>
                        <p>
                            Voilà six semaines qu'un mystérieux obélisque est apparu au-dessus
                            des landes de PériClave. Une brume opaque s'en est échappée dès les premiers jours,
                            s'imiçant dans les rivières, les bois et les villages. Puis sont arrivées les
                            disparitions, suivies du chaos et de la peur.
                        </p>
                        <p>
                            Les tambours de guerre résonnent à nouveau.
                            L'empire s'affaiblit et ses ennemis y voient profit.
                            Vous êtes un natif des royaumes du Nord en quête de vous-même.<br>
                            Mais quelque soit votre mission initiale, celle-ci dégénérera très vite.
                            Dans ce Monde, les apparences sont trompeuses. Votre esprit sera mis à rude épreuve,
                            ébranlé par l'appel insoutenable de l'Obélisque. Vous devrez côtoyer des forces
                            dépassant l'entendement, mettre fin à des cultes engendrés du chaos,
                            faire face aux intentions belliqueuses des pays voisins et combattre votre
                            propre conscience.
                        </p>
                        <p>
                            Ne faites confiance à personne, pas même à vos sens. Dans la pénombre de la folie,
                            les créatures attendent leur heure.
                        </p>
                        <div class=\"text-center\">
                            <a href=\"/codex/history\" class=\"btn\">
                                Découvrir l'Histoire
                            </a>
                        </div>
                    </div>
                    ";
        // line 107
        echo "                    <div class=\"col-lg-5 d-flex justify-content-center align-items-start my-3\">
                        <img src=\"/web/img/background/home-quote.gif\" alt=\"Introduction Lande Noire\"
                             class=\"img-fluid rounded-circle\" style=\"box-shadow: 0 0 1rem #000; width: 400px;height: 400px;\">
                    </div>
                </div>
            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/home/homeCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 107,  140 => 70,  130 => 61,  127 => 59,  124 => 58,  117 => 53,  103 => 45,  97 => 42,  93 => 41,  87 => 38,  82 => 36,  79 => 35,  75 => 34,  65 => 26,  57 => 19,  54 => 17,  51 => 16,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block style %}
    <style>
        .mask {
            min-width: 100%;
            min-height: inherit;
            top: 0;
            left: 0;
            position: absolute;
            background: rgba(0,0,0,.6);
        }
    </style>
{% endblock %}

{% block header %}
    <header role=\"banner\" class=\"header--home d-flex flex-column\">
        {# Logo #}
        <div class=\"container-fluid wow slideInDown\" data-wow-duration=\"1s\">
            <div class=\"row d-md-flex justify-content-center align-items-center d-none\">
                <img src=\"/web/img/background/logo.png\" alt=\"Logo\" class=\"img-fluid rellax\"
                     data-rellax-speed=\"3\">
            </div>
        </div>
        {# Recent news #}
        <div class=\"container-fluid wow slideInLeft\" data-wow-duration=\"1s\">
            <div class=\"row\">
                <div class=\"col-lg-12 d-md-flex align-items-center\">
                    <h2>Actualités et nouveautés</h2>
                    <a href=\"/news\" class=\"mx-3\">Voir les actualités</a>
                </div>
            </div>
            <div class=\"row\">
                {% for news in recentNews %}
                    <div class=\"col-lg-3 p-0 p-md-2\">
                        <a href=\"/news/{{ news.slug }}\">
                            <div class=\"news--home d-flex flex-column justify-content-end my-3 px-2 border\"
                                 style=\"background: url('/web/img/news/{{ news.img }}');background-size: cover;position: relative;min-width: 20vw; min-height: 25vh;overflow: hidden;\">
                                <div style=\"position: relative;z-index: 1;\">
                                    <div class=\"d-flex justify-content-between\">
                                        <span>{{ 'Il y a ' ~ news.datePub|time_diff }}</span>
                                        <span><i class=\"fas fa-comment\"></i> {{ news.comment }}</span>
                                    </div>
                                    <h3 style=\"min-height: 10vh;\">
                                        {{ news.title|truncate(42, true) }}
                                    </h3>
                                </div>
                                <div class=\"mask\"></div>
                            </div>
                        </a>
                    </div>
                {% endfor %}
            </div>
        </div>
    </header>
{% endblock header %}

{% block main %}
    <main role=\"main\">
        {# Introduction #}
        <section class=\"home--container-intro container\">
            <div class=\"my-5\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"font-weight-bold\">Introduction</h1>
                    </div>
                </div>
                <div class=\"row\">
                    {# Text #}
                    <div class=\"col-lg-7 text-justify\">
                        <p>
                            Lande Noire est un <abbr title=\"Role Playing Game\">RPG</abbr>
                            écriture basé sur un univers fictif
                            <span lang=\"en\" translate=\"no\">Dark Fantasy / SteamPunk</span>,
                            <strong>déconseillé aux moins de 18 ans</strong>.
                            Plongez au sein d'intrigues politiques,
                            d'explorations avant-gardistes et de conflits destructeurs.
                        </p>
                        <p>
                            Voilà six semaines qu'un mystérieux obélisque est apparu au-dessus
                            des landes de PériClave. Une brume opaque s'en est échappée dès les premiers jours,
                            s'imiçant dans les rivières, les bois et les villages. Puis sont arrivées les
                            disparitions, suivies du chaos et de la peur.
                        </p>
                        <p>
                            Les tambours de guerre résonnent à nouveau.
                            L'empire s'affaiblit et ses ennemis y voient profit.
                            Vous êtes un natif des royaumes du Nord en quête de vous-même.<br>
                            Mais quelque soit votre mission initiale, celle-ci dégénérera très vite.
                            Dans ce Monde, les apparences sont trompeuses. Votre esprit sera mis à rude épreuve,
                            ébranlé par l'appel insoutenable de l'Obélisque. Vous devrez côtoyer des forces
                            dépassant l'entendement, mettre fin à des cultes engendrés du chaos,
                            faire face aux intentions belliqueuses des pays voisins et combattre votre
                            propre conscience.
                        </p>
                        <p>
                            Ne faites confiance à personne, pas même à vos sens. Dans la pénombre de la folie,
                            les créatures attendent leur heure.
                        </p>
                        <div class=\"text-center\">
                            <a href=\"/codex/history\" class=\"btn\">
                                Découvrir l'Histoire
                            </a>
                        </div>
                    </div>
                    {# Img #}
                    <div class=\"col-lg-5 d-flex justify-content-center align-items-start my-3\">
                        <img src=\"/web/img/background/home-quote.gif\" alt=\"Introduction Lande Noire\"
                             class=\"img-fluid rounded-circle\" style=\"box-shadow: 0 0 1rem #000; width: 400px;height: 400px;\">
                    </div>
                </div>
            </div>
        </section>
    </main>
{% endblock main %}", "/home/homeCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\home\\homeCommonIndex.twig");
    }
}
