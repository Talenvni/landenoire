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
                        ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, ($context["doubleAccount"] ?? null), "checked", array()) == 1)) {
                // line 13
                echo "                            <h6 class=\"m-0\">
                                Compte secondaire de <a href=\"/account/character-";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["doubleAccount"] ?? null), "id", array()), "html", null, true);
                echo "\">
                                    ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["doubleAccount"] ?? null), "pseudo", array()), "html", null, true);
                echo "
                                </a>
                            </h6>
                        ";
            }
            // line 19
            echo "                    </div>
                </div>
            </section>

            ";
            // line 24
            echo "            <section class=\"container-fluid\">
                <nav class=\"row justify-content-center align-items-center\">
                    <ul class=\"nav navbar\">
                        <li class=\"nav-item\">
                            <a href=\"/account/character-";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
            echo "/info\"
                               class=\"nav-link text-white\">
                                <i class=\"fas fa-home d-none d-lg-inline\"></i> Info
                            </a>
                        </li>
                        ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()))) {
                // line 34
                echo "                            <li class=\"nav-item mx-lg-5\">
                                <a href=\"/account/character-";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
                echo "/preference\"
                                   class=\"nav-link text-white\"><i class=\"fas fa-tasks d-none d-lg-inline\"></i>
                                    Préférences
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/account/character-";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()), "html", null, true);
                echo "/security\"
                                   class=\"nav-link text-white\"><i class=\"fas fa-lock d-none d-lg-inline\"></i>
                                    Sécurité
                                </a>
                            </li>
                        ";
            }
            // line 47
            echo "                    </ul>
                </nav>
            </section>

            ";
            // line 51
            if ((($context["profilTab"] ?? null) == "info")) {
                // line 52
                echo "                ";
                $this->loadTemplate("/account/profilTabInfo.twig", "/account/profilCommonIndex.twig", 52)->display($context);
                // line 53
                echo "            ";
            }
            // line 54
            echo "            ";
            if (((($context["profilTab"] ?? null) == "preference") && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                // line 55
                echo "                ";
                $this->loadTemplate("/account/profilTabPreference.twig", "/account/profilCommonIndex.twig", 55)->display($context);
                // line 56
                echo "            ";
            }
            // line 57
            echo "            ";
            if (((($context["profilTab"] ?? null) == "security") && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array())))) {
                // line 58
                echo "                ";
                $this->loadTemplate("/account/profilTabSecurity.twig", "/account/profilCommonIndex.twig", 58)->display($context);
                // line 59
                echo "            ";
            }
            // line 60
            echo "            ";
            if ((((($context["profilTab"] ?? null) == "parameter") && (twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()))) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
                // line 61
                echo "                ";
                $this->loadTemplate("/account/profilTabParameter.twig", "/account/profilCommonIndex.twig", 61)->display($context);
                // line 62
                echo "            ";
            }
            // line 63
            echo "        ";
        }
        // line 64
        echo "    </main>
";
    }

    // line 67
    public function block_script($context, array $blocks = array())
    {
        // line 68
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
        return array (  167 => 68,  164 => 67,  159 => 64,  156 => 63,  153 => 62,  150 => 61,  147 => 60,  144 => 59,  141 => 58,  138 => 57,  135 => 56,  132 => 55,  129 => 54,  126 => 53,  123 => 52,  121 => 51,  115 => 47,  106 => 41,  97 => 35,  94 => 34,  92 => 33,  84 => 28,  78 => 24,  72 => 19,  65 => 15,  61 => 14,  58 => 13,  56 => 12,  52 => 11,  48 => 10,  43 => 7,  41 => 6,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
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
                        {% if doubleAccount.checked == 1 %}
                            <h6 class=\"m-0\">
                                Compte secondaire de <a href=\"/account/character-{{ doubleAccount.id }}\">
                                    {{ doubleAccount.pseudo }}
                                </a>
                            </h6>
                        {% endif %}
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
