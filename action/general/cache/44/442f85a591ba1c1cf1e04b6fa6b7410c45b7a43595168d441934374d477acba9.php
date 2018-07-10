<?php

/* /codex/codexCommonIndex.twig */
class __TwigTemplate_0ab6e74ba0535ac9275370e4598eb3306c387a8df1d41fec11cf6cccaa4a8bea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/codex/codexCommonIndex.twig", 1);
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
        echo "
    ";
        // line 5
        if ((($context["codexTab"] ?? null) == "history")) {
            // line 6
            echo "        ";
            $this->loadTemplate("codex/context.twig", "/codex/codexCommonIndex.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        if ((($context["codexTab"] ?? null) == "race")) {
            // line 11
            echo "        ";
            $this->loadTemplate("codex/race.twig", "/codex/codexCommonIndex.twig", 11)->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        if ((($context["codexTab"] ?? null) == "align")) {
            // line 16
            echo "        ";
            $this->loadTemplate("codex/align.twig", "/codex/codexCommonIndex.twig", 16)->display($context);
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        if ((($context["codexTab"] ?? null) == "faq")) {
            // line 21
            echo "        ";
            $this->loadTemplate("codex/faq.twig", "/codex/codexCommonIndex.twig", 21)->display($context);
            // line 22
            echo "    ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "/codex/codexCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  46 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}

    {% if codexTab == 'history' %}
        {% include 'codex/context.twig' %}
    {% endif %}

    {# FAQ Page #}
    {% if codexTab == 'race' %}
        {% include 'codex/race.twig' %}
    {% endif %}

    {# Align Page #}
    {% if codexTab == 'align' %}
        {% include 'codex/align.twig' %}
    {% endif %}

    {# FAQ Page #}
    {% if codexTab == 'faq' %}
        {% include 'codex/faq.twig' %}
    {% endif %}

{% endblock main %}", "/codex/codexCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\codex\\codexCommonIndex.twig");
    }
}
