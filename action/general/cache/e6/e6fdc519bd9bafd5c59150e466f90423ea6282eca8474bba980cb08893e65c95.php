<?php

/* /account/profilCommonIndex.twig */
class __TwigTemplate_3132631933814709a1e2e77f12a7d4b49b910b0943c89fce8cab8f415456c045 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/account/profilCommonIndex.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'script' => array($this, 'block_script'),
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
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "isBanned", array()) == 0)) {
            // line 6
            echo "            ";
            // line 7
            echo "            <section class=\"container--profil-title container-fluid py-4\">
                <div class=\"row justify-content-center align-items-center\">
                    <div class=\"col-lg-12 text-center\">
                        <h1 class=\"m-0\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "pseudo", array()), "html", null, true);
            echo "</h1>
                        <h5 class=\"m-0\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "groupName", array()), "html", null, true);
            echo "</h5>
                    </div>
                </div>
            </section>

            ";
            // line 17
            echo "            <section class=\"container-fluid\">
                <nav class=\"row justify-content-center align-items-center\">
                    <ul class=\"nav navbar\">
                        <li class=\"nav-item\">
                            <a href=\"/account/character-";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
            echo "/info\"
                               class=\"nav-link text-white\">
                                <i class=\"fas fa-home d-none d-lg-inline\"></i> Info
                            </a>
                        </li>
                        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()))) {
                // line 27
                echo "                            <li class=\"nav-item mx-lg-5\">
                                <a href=\"/account/character-";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
                echo "/preference\"
                                   class=\"nav-link text-white\"><i class=\"fas fa-tasks d-none d-lg-inline\"></i>
                                    Préférences
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/account/character-";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
                echo "/security\"
                                   class=\"nav-link text-white\"><i class=\"fas fa-lock d-none d-lg-inline\"></i>
                                    Sécurité
                                </a>
                            </li>
                        ";
            }
            // line 40
            echo "                    </ul>
                </nav>
            </section>

            ";
            // line 44
            if ((($context["profilTab"] ?? null) == "info")) {
                // line 45
                echo "                ";
                $this->loadTemplate("/account/profilTabInfo.twig", "/account/profilCommonIndex.twig", 45)->display($context);
                // line 46
                echo "            ";
            }
            // line 47
            echo "            ";
            if (((($context["profilTab"] ?? null) == "preference") && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                // line 48
                echo "                ";
                $this->loadTemplate("/account/profilTabPreference.twig", "/account/profilCommonIndex.twig", 48)->display($context);
                // line 49
                echo "            ";
            }
            // line 50
            echo "            ";
            if (((($context["profilTab"] ?? null) == "security") && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                // line 51
                echo "                ";
                $this->loadTemplate("/account/profilTabSecurity.twig", "/account/profilCommonIndex.twig", 51)->display($context);
                // line 52
                echo "            ";
            }
            // line 53
            echo "            ";
            if ((((($context["profilTab"] ?? null) == "parameter") && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()))) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 54
                echo "                ";
                $this->loadTemplate("/account/profilTabParameter.twig", "/account/profilCommonIndex.twig", 54)->display($context);
                // line 55
                echo "            ";
            }
            // line 56
            echo "        ";
        }
        // line 57
        echo "    </main>
";
    }

    // line 60
    public function block_script($context, array $blocks = array())
    {
        // line 61
        echo "    <script>

        \$('#traits').on('change', function () {
            let total =
                parseInt(\$('#intellect').val()) +
                parseInt(\$('#social').val()) +
                parseInt(\$('#physique').val()) +
                parseInt(\$('#dexterite').val()) +
                parseInt(\$('#artisanat').val());
            let traits = \$('#total-traits');
            if (total > 40 || total < 0) {
                traits.addClass('text-warning')
            }
            traits.html(total);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "/account/profilCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 61,  146 => 60,  141 => 57,  138 => 56,  135 => 55,  132 => 54,  129 => 53,  126 => 52,  123 => 51,  120 => 50,  117 => 49,  114 => 48,  111 => 47,  108 => 46,  105 => 45,  103 => 44,  97 => 40,  88 => 34,  79 => 28,  76 => 27,  74 => 26,  66 => 21,  60 => 17,  52 => 11,  48 => 10,  43 => 7,  41 => 6,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {% if showAccount.isBanned == 0 %}
            {# Title #}
            <section class=\"container--profil-title container-fluid py-4\">
                <div class=\"row justify-content-center align-items-center\">
                    <div class=\"col-lg-12 text-center\">
                        <h1 class=\"m-0\">{{ showAccount.pseudo }}</h1>
                        <h5 class=\"m-0\">{{ showAccount.groupName }}</h5>
                    </div>
                </div>
            </section>

            {# Mini Nav #}
            <section class=\"container-fluid\">
                <nav class=\"row justify-content-center align-items-center\">
                    <ul class=\"nav navbar\">
                        <li class=\"nav-item\">
                            <a href=\"/account/character-{{ showAccount.id }}/info\"
                               class=\"nav-link text-white\">
                                <i class=\"fas fa-home d-none d-lg-inline\"></i> Info
                            </a>
                        </li>
                        {% if showAccount.id == sessionUser.id %}
                            <li class=\"nav-item mx-lg-5\">
                                <a href=\"/account/character-{{ showAccount.id }}/preference\"
                                   class=\"nav-link text-white\"><i class=\"fas fa-tasks d-none d-lg-inline\"></i>
                                    Préférences
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/account/character-{{ showAccount.id }}/security\"
                                   class=\"nav-link text-white\"><i class=\"fas fa-lock d-none d-lg-inline\"></i>
                                    Sécurité
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
            </section>

            {% if profilTab == 'info' %}
                {% include '/account/profilTabInfo.twig' %}
            {% endif %}
            {% if profilTab == 'preference' and showAccount.id == sessionUser.id %}
                {% include '/account/profilTabPreference.twig' %}
            {% endif %}
            {% if profilTab == 'security' and showAccount.id == sessionUser.id %}
                {% include '/account/profilTabSecurity.twig' %}
            {% endif %}
            {% if profilTab == 'parameter' and showAccount.id == sessionUser.id or sessionUser.idGroup >= 2 %}
                {% include '/account/profilTabParameter.twig' %}
            {% endif %}
        {% endif %}
    </main>
{% endblock main %}

{% block script %}
    <script>

        \$('#traits').on('change', function () {
            let total =
                parseInt(\$('#intellect').val()) +
                parseInt(\$('#social').val()) +
                parseInt(\$('#physique').val()) +
                parseInt(\$('#dexterite').val()) +
                parseInt(\$('#artisanat').val());
            let traits = \$('#total-traits');
            if (total > 40 || total < 0) {
                traits.addClass('text-warning')
            }
            traits.html(total);
        });
    </script>
{% endblock script %}", "/account/profilCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilCommonIndex.twig");
    }
}
