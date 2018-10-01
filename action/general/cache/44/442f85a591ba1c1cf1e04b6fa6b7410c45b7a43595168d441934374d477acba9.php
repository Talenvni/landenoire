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
        echo "    <main>
        ";
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        if ((($context["codexTab"] ?? null) == "guide")) {
            // line 10
            echo "            ";
            $this->loadTemplate("codex/guide/guide.twig", "/codex/codexCommonIndex.twig", 10)->display($context);
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        if ((($context["codexTab"] ?? null) == "align")) {
            // line 18
            echo "            ";
            $this->loadTemplate("codex/character/align.twig", "/codex/codexCommonIndex.twig", 18)->display($context);
            // line 19
            echo "        ";
        }
        // line 20
        echo "        ";
        // line 21
        echo "        ";
        if ((($context["codexTab"] ?? null) == "character")) {
            // line 22
            echo "            ";
            $this->loadTemplate("codex/character/character.twig", "/codex/codexCommonIndex.twig", 22)->display($context);
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        if ((($context["codexTab"] ?? null) == "faq")) {
            // line 30
            echo "            ";
            $this->loadTemplate("codex/general/faq.twig", "/codex/codexCommonIndex.twig", 30)->display($context);
            // line 31
            echo "        ";
        }
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        if ((($context["codexTab"] ?? null) == "character-arrivant")) {
            // line 34
            echo "            ";
            $this->loadTemplate("codex/general/guideArrivant.twig", "/codex/codexCommonIndex.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "        ";
        // line 37
        echo "        ";
        if ((($context["codexTab"] ?? null) == "reglement-general")) {
            // line 38
            echo "            ";
            $this->loadTemplate("codex/general/generalRules.twig", "/codex/codexCommonIndex.twig", 38)->display($context);
            // line 39
            echo "        ";
        }
        // line 40
        echo "    </main>
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
        return array (  122 => 40,  119 => 39,  116 => 38,  113 => 37,  111 => 36,  108 => 35,  105 => 34,  102 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  89 => 28,  87 => 27,  85 => 26,  82 => 24,  79 => 23,  76 => 22,  73 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  42 => 8,  40 => 7,  38 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {# // ------- #}
        {# // Context #}
        {# // ------- #}
        {# Context Page #}
        {% if codexTab == 'guide' %}
            {% include 'codex/guide/guide.twig' %}
        {% endif %}

        {# // ------------------- #}
        {# // Guide de l'arrivant #}
        {# // ------------------- #}
        {# Align Page #}
        {% if codexTab == 'align' %}
            {% include 'codex/character/align.twig' %}
        {% endif %}
        {# Character Page #}
        {% if codexTab == 'character' %}
            {% include 'codex/character/character.twig' %}
        {% endif %}

        {# // #}
        {# // Général #}
        {# // #}
        {# FAQ Page #}
        {% if codexTab == 'faq' %}
            {% include 'codex/general/faq.twig' %}
        {% endif %}
        {# Guide Page #}
        {% if codexTab == 'character-arrivant' %}
            {% include 'codex/general/guideArrivant.twig' %}
        {% endif %}
        {# Rules Page #}
        {% if codexTab == 'reglement-general' %}
            {% include 'codex/general/generalRules.twig' %}
        {% endif %}
    </main>
{% endblock main %}", "/codex/codexCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\codex\\codexCommonIndex.twig");
    }
}
