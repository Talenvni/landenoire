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
                <section class=\"container--subcategory container-pagination\"
                         style=\"box-shadow: 0 0 .5rem black inset;overflow: hidden;\">
                    ";
            // line 12
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
                // line 13
                echo "                        <div class=\"content-pagination\">
                            <div class=\"row text-center text-lg-left p-4\"
                                 style=\"";
                // line 15
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2)) {
                    echo "background: rgba(129, 115, 84, .1)
                                 ";
                }
                // line 16
                echo "\">
                                <div class=\"col-lg-5\">
                                    <a class=\"card-link\"
                                       href=\"/forum/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array()), "html", null, true);
                echo "/topics/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "subject", array()), "html", null, true);
                echo "
                                    </a>
                                    ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, $context["topic"], "is_closed", array()) == 1)) {
                    // line 22
                    echo "                                        <i class=\"fas fa-lock\"></i>
                                    ";
                }
                // line 24
                echo "                                </div>
                                <div class=\"col-lg-2\">
                                    <i class=\"fas fa-comment\"></i> ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "message", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"col-lg-3\">
                                    <span>par <a href=\"/account/character-";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "idUser", array()), "html", null, true);
                echo "\">
                                            ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "pseudo", array()), "html", null, true);
                echo "
                                        </a>
                                    </span>
                                </div>
                                <div class=\"col-lg-2\">
                                    ";
                // line 35
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "datePub", array()), "medium", "short"), "html", null, true);
                echo "
                                </div>
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
            // line 41
            echo "                </section>
                <section class=\"container mt-5\">
                    <div class=\"row my-2\">
                        <div class=\"col-6\">
                            <a href=\"/forum/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slugCategory", array()), "html", null, true);
            echo "\" class=\"btn\">
                                Retour
                            </a>
                        </div>
                        <div class=\"col-6 d-flex justify-content-end\">
                            ";
            // line 50
            if (( !(null === ($context["sessionUser"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array())))) {
                // line 51
                echo "                                ";
                if (((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "characterValide", array()) == 1) || (twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "freeAccess", array()) == 1))) {
                    // line 52
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["valideAccount"] ?? null), "isBanned", array()) == 0)) {
                        // line 53
                        echo "                                        <a href=\"/forum/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array()), "html", null, true);
                        echo "/newtopic\" class=\"btn\">
                                            Créer un sujet
                                        </a>
                                    ";
                    }
                    // line 57
                    echo "                                ";
                }
                // line 58
                echo "                            ";
            } elseif (((null === ($context["sessionUser"] ?? null)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["singleSubcategory"] ?? null), "slug", array())))) {
                // line 59
                echo "                                <a href=\"/sign-in\">
                                    Vous devez vous connecter pour créer un sujet.
                                </a>
                            ";
            }
            // line 63
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
        // line 72
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
        return array (  191 => 72,  180 => 63,  174 => 59,  171 => 58,  168 => 57,  160 => 53,  157 => 52,  154 => 51,  152 => 50,  144 => 45,  138 => 41,  118 => 35,  110 => 30,  106 => 29,  100 => 26,  96 => 24,  92 => 22,  90 => 21,  81 => 19,  76 => 16,  71 => 15,  67 => 13,  50 => 12,  42 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
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
                <section class=\"container--subcategory container-pagination\"
                         style=\"box-shadow: 0 0 .5rem black inset;overflow: hidden;\">
                    {% for topic in showTopic %}
                        <div class=\"content-pagination\">
                            <div class=\"row text-center text-lg-left p-4\"
                                 style=\"{% if loop.index % 2 %}background: rgba(129, 115, 84, .1)
                                 {% endif %}\">
                                <div class=\"col-lg-5\">
                                    <a class=\"card-link\"
                                       href=\"/forum/{{ singleSubcategory.slug }}/topics/{{ topic.id }}\">{{ topic.subject }}
                                    </a>
                                    {% if topic.is_closed == 1 %}
                                        <i class=\"fas fa-lock\"></i>
                                    {% endif %}
                                </div>
                                <div class=\"col-lg-2\">
                                    <i class=\"fas fa-comment\"></i> {{ topic.message }}
                                </div>
                                <div class=\"col-lg-3\">
                                    <span>par <a href=\"/account/character-{{ topic.idUser }}\">
                                            {{ topic.pseudo }}
                                        </a>
                                    </span>
                                </div>
                                <div class=\"col-lg-2\">
                                    {{ topic.datePub|localizeddate('medium', 'short') }}
                                </div>
                            </div>

                        </div>
                    {% endfor %}
                </section>
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
