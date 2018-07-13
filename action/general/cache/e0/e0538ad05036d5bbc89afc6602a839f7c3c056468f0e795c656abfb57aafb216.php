<?php

/* /forum/categoryCommonIndex.twig */
class __TwigTemplate_c9e099e8fec48293d296d5d42a30baa54e4925321ffd62ee8e79174ac0a4a732 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/forum/categoryCommonIndex.twig", 1);
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
        <section class=\"container my-5\">
            ";
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showHeading"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["heading"]) {
            // line 8
            echo "                <h1 class=\"text-ln-gold-ghost\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["heading"], "name", array()), "html", null, true);
            echo "</h1>
                <div class=\"row justify-content-around align-items-center\">
                    ";
            // line 11
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showCategory"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "idHeading", array()) == twig_get_attribute($this->env, $this->source, $context["heading"], "id", array()))) {
                    // line 12
                    echo "                        <div class=\"block--category rounded col-lg-5 col-11 my-3 p-0\"
                             style=\"background: url('/web/img/category/";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "img", array()), "html", null, true);
                    echo "') no-repeat center;background-size: cover;height: 25vh;\">
                            <div>
                                <a href=\"/forum/";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()), "html", null, true);
                    echo "\">
                                    <h5 class=\"text-center\">";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                    echo "</h5>
                                </a>
                            </div>
                            <div class=\"pt-3 px-3 content-category\">
                                ";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "content", array());
                    echo "
                            </div>
                            <div class=\"mt-auto\">
                                <p class=\"px-3\">
                                    ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["lastMessage"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
                        if ((twig_get_attribute($this->env, $this->source, $context["last"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))) {
                            // line 25
                            echo "                                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array())) {
                                // line 26
                                echo "                                            <i class=\"fa fa-clock fa-xs\"
                                               title=\"Dernier message par ";
                                // line 27
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "pseudo", array()), "html", null, true);
                                echo "\"></i>
                                            <a href=\"/forum/";
                                // line 28
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "slug", array()), "html", null, true);
                                echo "/topics/";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "idTopic", array()), "html", null, true);
                                echo "\">
                                                ";
                                // line 29
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "subject", array()), "html", null, true);
                                echo " – il y a ";
                                echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array())), "html", null, true);
                                echo "
                                            </a>
                                        ";
                            }
                            // line 32
                            echo "                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                </p>
                            </div>
                        </div>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/forum/categoryCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  128 => 37,  118 => 33,  111 => 32,  103 => 29,  97 => 28,  93 => 27,  90 => 26,  87 => 25,  82 => 24,  75 => 20,  68 => 16,  64 => 15,  59 => 13,  56 => 12,  50 => 11,  44 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        <section class=\"container my-5\">
            {# Each Heading #}
            {% for heading in showHeading %}
                <h1 class=\"text-ln-gold-ghost\">{{ heading.name }}</h1>
                <div class=\"row justify-content-around align-items-center\">
                    {# Each Category #}
                    {% for category in showCategory if category.idHeading == heading.id %}
                        <div class=\"block--category rounded col-lg-5 col-11 my-3 p-0\"
                             style=\"background: url('/web/img/category/{{ category.img }}') no-repeat center;background-size: cover;height: 25vh;\">
                            <div>
                                <a href=\"/forum/{{ category.slug }}\">
                                    <h5 class=\"text-center\">{{ category.name }}</h5>
                                </a>
                            </div>
                            <div class=\"pt-3 px-3 content-category\">
                                {{ category.content|raw }}
                            </div>
                            <div class=\"mt-auto\">
                                <p class=\"px-3\">
                                    {% for last in lastMessage if last.id == category.id %}
                                        {% if last.datePub %}
                                            <i class=\"fa fa-clock fa-xs\"
                                               title=\"Dernier message par {{ last.pseudo }}\"></i>
                                            <a href=\"/forum/{{ last.slug }}/topics/{{ last.idTopic }}\">
                                                {{ last.subject }} – il y a {{ last.datePub|time_diff }}
                                            </a>
                                        {% endif %}
                                    {% endfor %}
                                </p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% endfor %}
        </section>
    </main>
{% endblock main %}", "/forum/categoryCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\forum\\categoryCommonIndex.twig");
    }
}
