<?php

/* /forum/subcategoryCommonIndex.twig */
class __TwigTemplate_08bf6d93f20676a83eb3dbb090f9d2c76bbe8ee7f59de4fd7940e1397fd1b18a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/forum/subcategoryCommonIndex.twig", 1);
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
            <h1 class=\"text-ln-gold-ghost\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["singleCategory"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
            <div class=\"row justify-content-around align-items-center\">
                ";
        // line 9
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showSubcategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["subcategory"], "slugCategory", array()) == ($context["subcategoryTab"] ?? null))) {
                // line 10
                echo "                    <div class=\"block--category rounded col-lg-5 col-11 my-3 p-0\"
                         style=\"background: url('/web/img/subcategory/";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "img", array()), "html", null, true);
                echo "') no-repeat center;background-size: cover;max-height: 25vh;\">
                        <div>
                            <a href=\"/forum/";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "slug", array()), "html", null, true);
                echo "/topics\">
                                <h5 class=\"text-center\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "name", array()), "html", null, true);
                echo "</h5>
                            </a>
                        </div>
                        <div class=\"pt-3 px-3 content-category\">
                            ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["subcategory"], "content", array());
                echo "
                        </div>
                        <div class=\"mt-auto\">
                            <p class=\"px-3\">
                                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lastMessage"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["last"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["subcategory"], "id", array()))) {
                        // line 23
                        echo "                                    ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array()))) {
                            // line 24
                            echo "                                        <i class=\"fa fa-clock fa-xs\"
                                           title=\"Dernier message par ";
                            // line 25
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "pseudo", array()), "html", null, true);
                            echo "\"></i>
                                        <a href=\"/forum/";
                            // line 26
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "slug", array()), "html", null, true);
                            echo "/topics/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "idTopic", array()), "html", null, true);
                            echo "\">
                                            ";
                            // line 27
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "subject", array()), "html", null, true);
                            echo " – il y a ";
                            echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array())), "html", null, true);
                            echo "
                                        </a>
                                    ";
                        }
                        // line 30
                        echo "                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                            </p>
                        </div>
                    </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </section>

        <section class=\"container mt-5\">
            <div class=\"row my-2\">
                <div class=\"col-6\">
                    <a href=\"/forum\" class=\"btn\">
                        Retour
                    </a>
                </div>
            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/forum/subcategoryCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  112 => 31,  105 => 30,  97 => 27,  91 => 26,  87 => 25,  84 => 24,  81 => 23,  76 => 22,  69 => 18,  62 => 14,  58 => 13,  53 => 11,  50 => 10,  44 => 9,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        <section class=\"container\">
            <h1 class=\"text-ln-gold-ghost\">{{ singleCategory.name }}</h1>
            <div class=\"row justify-content-around align-items-center\">
                {# Each subcategory #}
                {% for subcategory in showSubcategory if subcategory.slugCategory == subcategoryTab %}
                    <div class=\"block--category rounded col-lg-5 col-11 my-3 p-0\"
                         style=\"background: url('/web/img/subcategory/{{ subcategory.img }}') no-repeat center;background-size: cover;max-height: 25vh;\">
                        <div>
                            <a href=\"/forum/{{ subcategory.slug }}/topics\">
                                <h5 class=\"text-center\">{{ subcategory.name }}</h5>
                            </a>
                        </div>
                        <div class=\"pt-3 px-3 content-category\">
                            {{ subcategory.content|raw }}
                        </div>
                        <div class=\"mt-auto\">
                            <p class=\"px-3\">
                                {% for last in lastMessage if last.id == subcategory.id %}
                                    {% if last.datePub is not null %}
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
        </section>

        <section class=\"container mt-5\">
            <div class=\"row my-2\">
                <div class=\"col-6\">
                    <a href=\"/forum\" class=\"btn\">
                        Retour
                    </a>
                </div>
            </div>
        </section>
    </main>
{% endblock main %}", "/forum/subcategoryCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\forum\\subcategoryCommonIndex.twig");
    }
}
