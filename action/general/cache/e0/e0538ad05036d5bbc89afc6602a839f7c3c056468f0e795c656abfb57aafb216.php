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
                    echo "                        <div class=\"block--category rounded col-lg-5 col-11 my-2 p-0\"
                             style=\"background: url('/web/img/category/";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "img", array()), "html", null, true);
                    echo "') no-repeat center;background-size: cover;max-height: 25vh;\">
                            <div class=\"pt-3 px-3\">
                                <a href=\"/forum/";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()), "html", null, true);
                    echo "\">
                                    <h5 class=\"text-center\">";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                    echo "</h5>
                                    ";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "content", array());
                    echo "
                                </a>
                            </div>
                            <div class=\"mt-auto\">
                                <p class=\"px-3\">
                                    ";
                    // line 22
                    echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
                    echo "
                                </p>
                            </div>
                        </div>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['heading'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        return array (  99 => 29,  92 => 27,  80 => 22,  72 => 17,  68 => 16,  64 => 15,  59 => 13,  56 => 12,  50 => 11,  44 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
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
                        <div class=\"block--category rounded col-lg-5 col-11 my-2 p-0\"
                             style=\"background: url('/web/img/category/{{ category.img }}') no-repeat center;background-size: cover;max-height: 25vh;\">
                            <div class=\"pt-3 px-3\">
                                <a href=\"/forum/{{ category.slug }}\">
                                    <h5 class=\"text-center\">{{ category.name }}</h5>
                                    {{ category.content|raw }}
                                </a>
                            </div>
                            <div class=\"mt-auto\">
                                <p class=\"px-3\">
                                    {{ test }}
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
