<?php

/* /news/singleNewsCommonIndex.twig */
class __TwigTemplate_1b2c52122d7fb15fe1f0d6eb2c6053e23e36a6851b6350d75db2681b63003949 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/news/singleNewsCommonIndex.twig", 1);
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
        echo "    <main>
        <section class=\"news--container container my-5\">
            ";
        // line 7
        echo "            <div role=\"article\" class=\"content--news row\">
                <div class=\"col-lg-12 text-justify\">
                    <h3 class=\"text-ln-gold\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleNews"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
                    <hr>
                    <p>
                        ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["singleNews"] ?? null), "content", array());
        echo "
                    </p>
                </div>
            </div>
            <div class=\"row mt-4\">
                <div class=\"col-6\">
                    <a href=\"/news\" class=\"btn\">
                        Retour
                    </a>
                </div>
                <div class=\"col-6 d-flex justify-content-end\">
                    ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "groupName", array()) == "Administrateur")) {
            // line 24
            echo "                        <a href=\"/news/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleNews"] ?? null), "slug", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleNews"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn\">
                            Éditer
                        </a>
                    ";
        }
        // line 28
        echo "                </div>
            </div>

            ";
        // line 32
        echo "            <div class=\"row\">
                <div class=\"col-lg-12 mt-5 mb-3\">
                    ";
        // line 34
        if ((($context["countComment"] ?? null) <= 1)) {
            // line 35
            echo "                        <h3>Commentaire (";
            echo twig_escape_filter($this->env, ($context["countComment"] ?? null), "html", null, true);
            echo ")</h3>
                    ";
        } else {
            // line 37
            echo "                        <h3>Commentaires (";
            echo twig_escape_filter($this->env, ($context["countComment"] ?? null), "html", null, true);
            echo ")</h3>
                    ";
        }
        // line 39
        echo "                </div>
            </div>
            ";
        // line 42
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allComment"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 43
            echo "                <div class=\"comment--news\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"d-flex justify-content-between align-items-center text-justify\">
                                <h3>
                                    <a href=\"/account/character-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "idUser", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", array()), "html", null, true);
            echo "</a>
                                </h3>
                                <span>";
            // line 50
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "datePub", array()), "medium", "none"), "html", null, true);
            echo "</span>
                            </div>
                            ";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "message", array());
            echo "
                        </div>
                    </div>
                    ";
            // line 55
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                // line 56
                echo "                        <hr>
                    ";
            }
            // line 58
            echo "                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            ";
        // line 61
        echo "            ";
        if (( !(null === ($context["sessionUser"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["newComment"] ?? null), "isBanned", array()) == 0))) {
            // line 62
            echo "                <fieldset class=\"container my-5\">
                    <legend class=\"h2\">Nouveau commentaire</legend>
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <textarea name=\"comment_message\" id=\"comment-message\" cols=\"30\"
                                      rows=\"10\" placeholder=\"Poster un commentaire\"
                                      class=\"form-control col-lg-12\"></textarea>
                        </div>
                        <div class=\"mt-2 text-center\">
                            <button id=\"comment-submit\" name=\"comment_submit\" type=\"submit\" class=\"btn\">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </fieldset>
            ";
        } else {
            // line 78
            echo "                <div class=\"container my-5 border rounded\">
                    <div class=\"row justify-content-center align-items-center\" style=\"min-height: 30vh;\">
                        <p class=\"text-center px-3\">
                            Vous devez être connecté pour poster un commentaire.
                        </p>
                    </div>
                </div>
            ";
        }
        // line 86
        echo "        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/news/singleNewsCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 86,  189 => 78,  171 => 62,  168 => 61,  166 => 60,  151 => 58,  147 => 56,  145 => 55,  139 => 52,  134 => 50,  127 => 48,  120 => 43,  102 => 42,  98 => 39,  92 => 37,  86 => 35,  84 => 34,  80 => 32,  75 => 28,  65 => 24,  63 => 23,  49 => 12,  43 => 9,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        <section class=\"news--container container my-5\">
            {# Single news #}
            <div role=\"article\" class=\"content--news row\">
                <div class=\"col-lg-12 text-justify\">
                    <h3 class=\"text-ln-gold\">{{ singleNews.title }}</h3>
                    <hr>
                    <p>
                        {{ singleNews.content|raw }}
                    </p>
                </div>
            </div>
            <div class=\"row mt-4\">
                <div class=\"col-6\">
                    <a href=\"/news\" class=\"btn\">
                        Retour
                    </a>
                </div>
                <div class=\"col-6 d-flex justify-content-end\">
                    {% if sessionUser.groupName == \"Administrateur\" %}
                        <a href=\"/news/{{ singleNews.slug }}/{{ singleNews.id }}\" class=\"btn\">
                            Éditer
                        </a>
                    {% endif %}
                </div>
            </div>

            {# Total comment #}
            <div class=\"row\">
                <div class=\"col-lg-12 mt-5 mb-3\">
                    {% if countComment <= 1 %}
                        <h3>Commentaire ({{ countComment }})</h3>
                    {% else %}
                        <h3>Commentaires ({{ countComment }})</h3>
                    {% endif %}
                </div>
            </div>
            {# Comment #}
            {% for comment in allComment %}
                <div class=\"comment--news\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"d-flex justify-content-between align-items-center text-justify\">
                                <h3>
                                    <a href=\"/account/character-{{ comment.idUser }}\">{{ comment.pseudo }}</a>
                                </h3>
                                <span>{{ comment.datePub|localizeddate('medium', 'none') }}</span>
                            </div>
                            {{ comment.message|raw }}
                        </div>
                    </div>
                    {% if not loop.last %}
                        <hr>
                    {% endif %}
                </div>
            {% endfor %}
            {# New Comment #}
            {% if sessionUser is not null and newComment.isBanned == 0 %}
                <fieldset class=\"container my-5\">
                    <legend class=\"h2\">Nouveau commentaire</legend>
                    <form method=\"post\">
                        <div class=\"form-group\">
                            <textarea name=\"comment_message\" id=\"comment-message\" cols=\"30\"
                                      rows=\"10\" placeholder=\"Poster un commentaire\"
                                      class=\"form-control col-lg-12\"></textarea>
                        </div>
                        <div class=\"mt-2 text-center\">
                            <button id=\"comment-submit\" name=\"comment_submit\" type=\"submit\" class=\"btn\">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </fieldset>
            {% else %}
                <div class=\"container my-5 border rounded\">
                    <div class=\"row justify-content-center align-items-center\" style=\"min-height: 30vh;\">
                        <p class=\"text-center px-3\">
                            Vous devez être connecté pour poster un commentaire.
                        </p>
                    </div>
                </div>
            {% endif %}
        </section>
    </main>
{% endblock main %}", "/news/singleNewsCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\news\\singleNewsCommonIndex.twig");
    }
}
