<?php

/* /forum/topicCommonIndex.twig */
class __TwigTemplate_3d25f09c632dac9487bb8da4028cdb0931492ea4ae255572fa61315864362730 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/forum/topicCommonIndex.twig", 1);
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
        <section class=\"container\">
            ";
        // line 7
        echo "            ";
        if ( !(null === ($context["singleSubcategory"] ?? null))) {
            // line 8
            echo "                <h3 class=\"title--subcategory mt-5\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "name", array()), "html", null, true);
            echo "</h3>
                <hr>
                ";
            // line 10
            if ( !twig_test_empty(($context["showTopic"] ?? null))) {
                // line 11
                echo "                    <section class=\"container--subcategory container-pagination\"
                             style=\"box-shadow: 0 0 .5rem black inset;overflow: hidden;\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["showTopic"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                    // line 14
                    echo "                            <div class=\"content-pagination\">
                                <div class=\"row align-items-center p-3\"
                                     style=\"";
                    // line 16
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                        echo "background: rgba(129, 115, 84, .1)
                                 ";
                    }
                    // line 17
                    echo "\">
                                    <div class=\"col-lg-4\">
                                        <a class=\"card-link\"
                                           href=\"/forum/";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array()), "html", null, true);
                    echo "/topics/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "id", array()), "html", null, true);
                    echo "\">
                                            ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "subject", array()), "html", null, true);
                    echo "
                                        </a>
                                        ";
                    // line 23
                    if ((twig_get_attribute($this->env, $this->source, $context["topic"], "is_closed", array()) == 1)) {
                        // line 24
                        echo "                                            <i class=\"fas fa-lock fa-xs\"></i>
                                        ";
                    }
                    // line 26
                    echo "                                        <br>
                                        <small>
                                            <em>par
                                                <a href=\"/account/character-";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "idUser", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "pseudo", array()), "html", null, true);
                    echo "
                                                </a>
                                            </em>
                                        </small>
                                    </div>
                                    <div class=\"col-lg-2\">
                                        <i class=\"fas fa-comment fa-xs\"></i>
                                        ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, $context["topic"], "message", array()) > 1)) {
                        // line 38
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "message", array()), "html", null, true);
                        echo " missives
                                        ";
                    } else {
                        // line 40
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "message", array()), "html", null, true);
                        echo " missive
                                        ";
                    }
                    // line 42
                    echo "                                    </div>
                                    <div class=\"col-lg-2\">
                                        <i class=\"fas fa-eye fa-xs\"></i>
                                        ";
                    // line 45
                    if ((twig_get_attribute($this->env, $this->source, $context["topic"], "view", array()) > 1)) {
                        // line 46
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "view", array()), "html", null, true);
                        echo " visites
                                        ";
                    } else {
                        // line 48
                        echo "                                            ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "view", array()), "html", null, true);
                        echo " visite
                                        ";
                    }
                    // line 50
                    echo "                                    </div>
                                    <div class=\"col-lg-4\">
                                        ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["lastMessage"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
                        if ((twig_get_attribute($this->env, $this->source, $context["last"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["topic"], "id", array()))) {
                            // line 53
                            echo "                                            Dernier message il y a ";
                            echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array())), "html", null, true);
                            echo "<br> par
                                            <a href=\"/account/character-";
                            // line 54
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "idUser", array()), "html", null, true);
                            echo "\">
                                                ";
                            // line 55
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "pseudo", array()), "html", null, true);
                            echo "
                                            </a>
                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                                    </div>
                                </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                    </section>
                ";
            }
            // line 64
            echo "                <section class=\"container mt-5\">
                    <div class=\"row my-2\">
                        <div class=\"col-6\">
                            <a href=\"/forum/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slugCategory", array()), "html", null, true);
            echo "\" class=\"btn\">
                                Retour
                            </a>
                        </div>
                        <div class=\"col-6 d-flex justify-content-end\">
                            ";
            // line 72
            if (( !(null === ($context["sessionUser"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array())))) {
                // line 73
                echo "                                ";
                if (((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "characterValide", array()) == 1) || (twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "freeAccess", array()) == 1))) {
                    // line 74
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "isBanned", array()) == 0)) {
                        // line 75
                        echo "                                        <a href=\"/forum/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array()), "html", null, true);
                        echo "/newtopic\" class=\"btn\">
                                            Créer un sujet
                                        </a>
                                    ";
                    }
                    // line 79
                    echo "                                ";
                }
                // line 80
                echo "                            ";
            } elseif (((null === ($context["sessionUser"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array())))) {
                // line 81
                echo "                                <a href=\"/sign-in\">
                                    Vous devez vous connecter pour créer un sujet.
                                </a>
                            ";
            }
            // line 85
            echo "                        </div>
                        <div class=\"col-lg-12 mt-5\">
                            <nav aria-label=\"...\" style=\"background: transparent;\">
                                <ul class=\"pagination justify-content-end pagination-sm\"></ul>
                            </nav>
                        </div>
                    </div>
                </section>
            ";
        }
        // line 94
        echo "        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/forum/topicCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 94,  244 => 85,  238 => 81,  235 => 80,  232 => 79,  224 => 75,  221 => 74,  218 => 73,  216 => 72,  208 => 67,  203 => 64,  199 => 62,  182 => 58,  172 => 55,  168 => 54,  163 => 53,  158 => 52,  154 => 50,  148 => 48,  142 => 46,  140 => 45,  135 => 42,  129 => 40,  123 => 38,  121 => 37,  111 => 30,  107 => 29,  102 => 26,  98 => 24,  96 => 23,  91 => 21,  85 => 20,  80 => 17,  75 => 16,  71 => 14,  54 => 13,  50 => 11,  48 => 10,  42 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        <section class=\"container\">
            {# Subcategory and topics list #}
            {% if singleSubcategory is not null %}
                <h3 class=\"title--subcategory mt-5\">{{ singleSubcategory.name }}</h3>
                <hr>
                {% if showTopic is not empty %}
                    <section class=\"container--subcategory container-pagination\"
                             style=\"box-shadow: 0 0 .5rem black inset;overflow: hidden;\">
                        {% for topic in showTopic %}
                            <div class=\"content-pagination\">
                                <div class=\"row align-items-center p-3\"
                                     style=\"{% if loop.index % 2 %}background: rgba(129, 115, 84, .1)
                                 {% endif %}\">
                                    <div class=\"col-lg-4\">
                                        <a class=\"card-link\"
                                           href=\"/forum/{{ singleSubcategory.slug }}/topics/{{ topic.id }}\">
                                            {{ topic.subject }}
                                        </a>
                                        {% if topic.is_closed == 1 %}
                                            <i class=\"fas fa-lock fa-xs\"></i>
                                        {% endif %}
                                        <br>
                                        <small>
                                            <em>par
                                                <a href=\"/account/character-{{ topic.idUser }}\">
                                                    {{ topic.pseudo }}
                                                </a>
                                            </em>
                                        </small>
                                    </div>
                                    <div class=\"col-lg-2\">
                                        <i class=\"fas fa-comment fa-xs\"></i>
                                        {% if topic.message > 1 %}
                                            {{ topic.message }} missives
                                        {% else %}
                                            {{ topic.message }} missive
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-2\">
                                        <i class=\"fas fa-eye fa-xs\"></i>
                                        {% if topic.view > 1 %}
                                            {{ topic.view }} visites
                                        {% else %}
                                            {{ topic.view }} visite
                                        {% endif %}
                                    </div>
                                    <div class=\"col-lg-4\">
                                        {% for last in lastMessage if last.id == topic.id %}
                                            Dernier message il y a {{ last.datePub|time_diff }}<br> par
                                            <a href=\"/account/character-{{ last.idUser }}\">
                                                {{ last.pseudo }}
                                            </a>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </section>
                {% endif %}
                <section class=\"container mt-5\">
                    <div class=\"row my-2\">
                        <div class=\"col-6\">
                            <a href=\"/forum/{{ singleSubcategory.slugCategory }}\" class=\"btn\">
                                Retour
                            </a>
                        </div>
                        <div class=\"col-6 d-flex justify-content-end\">
                            {% if sessionUser is not null and singleSubcategory.slug is not null %}
                                {% if valideAccount.characterValide == 1 or singleSubcategory.freeAccess == 1 %}
                                    {% if valideAccount.isBanned == 0 %}
                                        <a href=\"/forum/{{ singleSubcategory.slug }}/newtopic\" class=\"btn\">
                                            Créer un sujet
                                        </a>
                                    {% endif %}
                                {% endif %}
                            {% elseif sessionUser is null and singleSubcategory.slug is not null %}
                                <a href=\"/sign-in\">
                                    Vous devez vous connecter pour créer un sujet.
                                </a>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-12 mt-5\">
                            <nav aria-label=\"...\" style=\"background: transparent;\">
                                <ul class=\"pagination justify-content-end pagination-sm\"></ul>
                            </nav>
                        </div>
                    </div>
                </section>
            {% endif %}
        </section>
    </main>
{% endblock main %}", "/forum/topicCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\forum\\topicCommonIndex.twig");
    }
}
