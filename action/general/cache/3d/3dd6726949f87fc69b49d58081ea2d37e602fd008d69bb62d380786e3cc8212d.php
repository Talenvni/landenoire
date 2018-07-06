<?php

/* /news/allNewsCommonIndex.twig */
class __TwigTemplate_a96266f6deb3c81be6a9dd222b7d0ef28afcdb983a71b105fc3f41d46a2b890a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/news/allNewsCommonIndex.twig", 1);
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
        <section class=\"container--news container-pagination container my-5\">
            ";
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 8
            echo "                <article role=\"article\" class=\"content-pagination row my-2 p-3\">
                    <div class=\"col-lg-6\">
                        <a href=\"/news/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "slug", array()), "html", null, true);
            echo "\">
                            <img class=\"img-fluid rounded\"
                                 src=\"/web/img/news/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "slug", array()), "html", null, true);
            echo "\">
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <a href=\"/news/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "slug", array()), "html", null, true);
            echo "\"><h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "title", array()), "html", null, true);
            echo "</h5></a>
                        <p>
                            <span><i class=\"fas fa-clock\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Twig_Extensions_Extension_Date']->diff($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "datePub", array())), "html", null, true);
            echo "</span>
                            –
                            <span><i class=\"fas fa-comment\"></i> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "comment", array()), "html", null, true);
            echo "</span></p>
                        <p class=\"text-justify\">";
            // line 21
            echo twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "content", array()), 255, false);
            echo "</p>
                    </div>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            <nav aria-label=\"...\" style=\"background: transparent;\">
                <ul class=\"pagination justify-content-end pagination-sm\"></ul>
            </nav>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/news/allNewsCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  78 => 21,  74 => 20,  69 => 18,  62 => 16,  53 => 12,  48 => 10,  44 => 8,  39 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        <section class=\"container--news container-pagination container my-5\">
            {# All news #}
            {% for news in allNews %}
                <article role=\"article\" class=\"content-pagination row my-2 p-3\">
                    <div class=\"col-lg-6\">
                        <a href=\"/news/{{ news.slug }}\">
                            <img class=\"img-fluid rounded\"
                                 src=\"/web/img/news/{{ news.img }}\" alt=\"{{ news.slug }}\">
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <a href=\"/news/{{ news.slug }}\"><h5>{{ news.title }}</h5></a>
                        <p>
                            <span><i class=\"fas fa-clock\"></i> {{ news.datePub|time_diff }}</span>
                            –
                            <span><i class=\"fas fa-comment\"></i> {{ news.comment }}</span></p>
                        <p class=\"text-justify\">{{ news.content|truncate(255, false)|raw }}</p>
                    </div>
                </article>
            {% endfor %}

            <nav aria-label=\"...\" style=\"background: transparent;\">
                <ul class=\"pagination justify-content-end pagination-sm\"></ul>
            </nav>
        </section>
    </main>
{% endblock main %}", "/news/allNewsCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\news\\allNewsCommonIndex.twig");
    }
}
