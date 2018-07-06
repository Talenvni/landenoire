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
            <div class=\"row justify-content-around align-items-center\">
                ";
        // line 8
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showSubcategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["subcategory"], "slugCategory", array()) == ($context["subcategoryTab"] ?? null))) {
                // line 9
                echo "                    <div class=\"block--category rounded col-lg-5 col-11 my-2 p-0\"
                         style=\"background: url('/web/img/subcategory/";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "img", array()), "html", null, true);
                echo "') no-repeat center;background-size: cover;max-height: 25vh;\">
                        <div class=\"pt-3 px-3\">
                            <a href=\"/forum/";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "slug", array()), "html", null, true);
                echo "/topics\">
                                <h5 class=\"text-center\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subcategory"], "name", array()), "html", null, true);
                echo "</h5>
                                <p class=\"text-justify\">
                                    ";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["subcategory"], "content", array());
                echo "
                                </p>
                            </a>
                        </div>
                        <div class=\"mt-auto\">
                            <p class=\"px-3\">
                                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["lastMessage"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["last"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["subcategory"], "id", array()))) {
                        // line 22
                        echo "                                    ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array()))) {
                            // line 23
                            echo "                                        Dernier message il y a ";
                            echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "datePub", array())), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 25
                            echo "                                        Aucun message récent
                                    ";
                        }
                        // line 27
                        echo "                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                            </p>
                        </div>
                    </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return array (  107 => 32,  97 => 28,  90 => 27,  86 => 25,  80 => 23,  77 => 22,  72 => 21,  63 => 15,  58 => 13,  54 => 12,  49 => 10,  46 => 9,  40 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        <section class=\"container\">
            <div class=\"row justify-content-around align-items-center\">
                {# Each subcategory #}
                {% for subcategory in showSubcategory if subcategory.slugCategory == subcategoryTab %}
                    <div class=\"block--category rounded col-lg-5 col-11 my-2 p-0\"
                         style=\"background: url('/web/img/subcategory/{{ subcategory.img }}') no-repeat center;background-size: cover;max-height: 25vh;\">
                        <div class=\"pt-3 px-3\">
                            <a href=\"/forum/{{ subcategory.slug }}/topics\">
                                <h5 class=\"text-center\">{{ subcategory.name }}</h5>
                                <p class=\"text-justify\">
                                    {{ subcategory.content|raw }}
                                </p>
                            </a>
                        </div>
                        <div class=\"mt-auto\">
                            <p class=\"px-3\">
                                {% for last in lastMessage if last.id == subcategory.id %}
                                    {% if last.datePub is not null %}
                                        Dernier message il y a {{ last.datePub|time_diff }}
                                    {% else %}
                                        Aucun message récent
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
