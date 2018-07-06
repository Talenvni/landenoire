<?php

/* /home/homeAdminIndex.twig */
class __TwigTemplate_7289a1f818a6815bca5101c58145c3c9a9b075d595bf0e41bf83bc3df2645126 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "/home/homeAdminIndex.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    <section class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"card col-lg-3\">
                <div class=\"card-body\">
                    <span class=\"text-uppercase\">Total inscrits</span>
                    <br>
                    <span class=\"text-muted \">
                    <i class=\"fas fa-users\"></i>
                        ";
        // line 13
        echo twig_escape_filter($this->env, ($context["totalUsers"] ?? null), "html", null, true);
        echo "
                </span>
                </div>
            </div>
            <div class=\"card col-lg-3\">
                <div class=\"card-body\">
                    <span class=\"text-uppercase\">Total sujets</span>
                    <br>
                    <span class=\"text-muted \">
                    <i class=\"fas fa-align-left\"></i>
                        ";
        // line 23
        echo twig_escape_filter($this->env, ($context["totalTopics"] ?? null), "html", null, true);
        echo "
                </span>
                </div>
            </div>
            <div class=\"card col-lg-3\">
                <div class=\"card-body\">
                    <span class=\"text-uppercase\">Total messages</span>
                    <br>
                    <span class=\"text-muted \">
                    <i class=\"fas fa-comments\"></i>
                        ";
        // line 33
        echo twig_escape_filter($this->env, ($context["totalMessages"] ?? null), "html", null, true);
        echo "
                </span>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 41
        echo "    <section class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <table class=\"listUsers table table-hover table-bordered table-striped\">
                <thead>
                <tr class=\"text-uppercase\">
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Ban</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Validé</th>
                    <th scope=\"col\">Messages/sujets</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listUsers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "                    <tr>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
                        ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", array())) {
                // line 59
                echo "                            <td class=\"text-danger\">Banni</td>
                        ";
            }
            // line 61
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", array())) {
                // line 62
                echo "                            <td class=\"text-muted\">Banni</td>
                        ";
            }
            // line 64
            echo "                        <td><a href=\"/oversight/user-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</a></td>
                        ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isConnect", array())) {
                // line 66
                echo "                            <td class=\"text-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 68
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isConnect", array())) {
                // line 69
                echo "                            <td class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 71
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["user"], "tokenConfirm", array()))) {
                // line 72
                echo "                            <td class=\"text-info\">Validé</td>
                        ";
            }
            // line 74
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "tokenConfirm", array())) {
                // line 75
                echo "                            <td class=\"text-warning\">Invalidé</td>
                        ";
            }
            // line 77
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "message", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "topic", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </tbody>
            </table>
        </div>
    </section>

    ";
        // line 86
        echo "    <section class=\"container-fluid mb-5\">
        <div class=\"row\">
            ";
        // line 89
        echo "            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Nouveaux inscrits
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recentUsers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
            // line 96
            echo "                            <li class=\"list-group-item\">
                                <a href=\"/account/character-";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "id", array()), "html", null, true);
            echo "\">
                                    ";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "pseudo", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "groupName", array()), "html", null, true);
            echo "
                                    <br>
                                    <small>
                                        ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "email", array()), "html", null, true);
            echo "
                                        -
                                        ";
            // line 103
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "tokenConfirm", array()), "medium", "short"), "html", null, true);
            echo "
                                    </small>
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                    </ul>
                </div>
            </div>

            ";
        // line 113
        echo "            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Nouveaux sujets
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recentTopics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
            // line 120
            echo "                            <li class=\"list-group-item\">
                                <a href=\"/forum/";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "slug", array()), "html", null, true);
            echo "/topics/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "id", array()), "html", null, true);
            echo "\">
                                    ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "subject", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "pseudo", array()), "html", null, true);
            echo "
                                    <br>
                                    <small>";
            // line 124
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "datePub", array()), "medium", "short"), "html", null, true);
            echo "</small>
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                    </ul>
                </div>
            </div>

            ";
        // line 133
        echo "            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Nouveaux messages
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recentMessages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
            // line 140
            echo "                            <li class=\"list-group-item\">
                                <a href=\"/forum/";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "slug", array()), "html", null, true);
            echo "/topics/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "idTopic", array()), "html", null, true);
            echo "\">
                                    ";
            // line 142
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "content", array()), 10, true), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "pseudo", array()), "html", null, true);
            echo "
                                    <br>
                                    <small>
                                        ";
            // line 145
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recent"], "datePub", array()), "medium", "short"), "html", null, true);
            echo "
                                    </small>
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                    </ul>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 157
    public function block_script($context, array $blocks = array())
    {
        // line 158
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/homeAdminIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 158,  327 => 157,  318 => 150,  307 => 145,  299 => 142,  293 => 141,  290 => 140,  286 => 139,  278 => 133,  272 => 128,  262 => 124,  255 => 122,  249 => 121,  246 => 120,  242 => 119,  234 => 113,  228 => 108,  217 => 103,  212 => 101,  204 => 98,  200 => 97,  197 => 96,  193 => 95,  185 => 89,  181 => 86,  174 => 80,  162 => 77,  158 => 75,  155 => 74,  151 => 72,  148 => 71,  142 => 69,  139 => 68,  133 => 66,  131 => 65,  124 => 64,  120 => 62,  117 => 61,  113 => 59,  111 => 58,  107 => 57,  104 => 56,  100 => 55,  84 => 41,  74 => 33,  61 => 23,  48 => 13,  38 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% block main %}
    {# Totals #}
    <section class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"card col-lg-3\">
                <div class=\"card-body\">
                    <span class=\"text-uppercase\">Total inscrits</span>
                    <br>
                    <span class=\"text-muted \">
                    <i class=\"fas fa-users\"></i>
                        {{ totalUsers }}
                </span>
                </div>
            </div>
            <div class=\"card col-lg-3\">
                <div class=\"card-body\">
                    <span class=\"text-uppercase\">Total sujets</span>
                    <br>
                    <span class=\"text-muted \">
                    <i class=\"fas fa-align-left\"></i>
                        {{ totalTopics }}
                </span>
                </div>
            </div>
            <div class=\"card col-lg-3\">
                <div class=\"card-body\">
                    <span class=\"text-uppercase\">Total messages</span>
                    <br>
                    <span class=\"text-muted \">
                    <i class=\"fas fa-comments\"></i>
                        {{ totalMessages }}
                </span>
                </div>
            </div>
        </div>
    </section>

    {# List users #}
    <section class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <table class=\"listUsers table table-hover table-bordered table-striped\">
                <thead>
                <tr class=\"text-uppercase\">
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Ban</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Pseudo</th>
                    <th scope=\"col\">Validé</th>
                    <th scope=\"col\">Messages/sujets</th>
                </tr>
                </thead>
                <tbody>
                {% for user in listUsers %}
                    <tr>
                        <td>{{ user.id }}</td>
                        {% if user.isBanned %}
                            <td class=\"text-danger\">Banni</td>
                        {% endif %}
                        {% if not user.isBanned %}
                            <td class=\"text-muted\">Banni</td>
                        {% endif %}
                        <td><a href=\"/oversight/user-{{ user.id }}\">{{ user.email }}</a></td>
                        {% if user.isConnect %}
                            <td class=\"text-success\">{{ user.pseudo }}</td>
                        {% endif %}
                        {% if not user.isConnect %}
                            <td class=\"text-muted\">{{ user.pseudo }}</td>
                        {% endif %}
                        {% if user.tokenConfirm is not null %}
                            <td class=\"text-info\">Validé</td>
                        {% endif %}
                        {% if not user.tokenConfirm %}
                            <td class=\"text-warning\">Invalidé</td>
                        {% endif %}
                        <td>{{ user.message }}/{{ user.topic }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </section>

    {# Recents #}
    <section class=\"container-fluid mb-5\">
        <div class=\"row\">
            {# Users #}
            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Nouveaux inscrits
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        {% for recent in recentUsers %}
                            <li class=\"list-group-item\">
                                <a href=\"/account/character-{{ recent.id }}\">
                                    {{ recent.pseudo }} - {{ recent.groupName }}
                                    <br>
                                    <small>
                                        {{ recent.email }}
                                        -
                                        {{ recent.tokenConfirm|localizeddate('medium', 'short') }}
                                    </small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>

            {# Topics #}
            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Nouveaux sujets
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        {% for recent in recentTopics %}
                            <li class=\"list-group-item\">
                                <a href=\"/forum/{{ recent.slug }}/topics/{{ recent.id }}\">
                                    {{ recent.subject }} - {{ recent.pseudo }}
                                    <br>
                                    <small>{{ recent.datePub|localizeddate('medium', 'short') }}</small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>

            {# Messages #}
            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Nouveaux messages
                    </div>
                    <ul class=\"list-group list-group-flush\">
                        {% for recent in recentMessages %}
                            <li class=\"list-group-item\">
                                <a href=\"/forum/{{ recent.slug }}/topics/{{ recent.idTopic }}\">
                                    {{ recent.content|truncate(10, true) }} - {{ recent.pseudo }}
                                    <br>
                                    <small>
                                        {{ recent.datePub|localizeddate('medium', 'short') }}
                                    </small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </section>
{% endblock main %}

{% block script %}

{% endblock script %}", "/home/homeAdminIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\admin\\index\\home\\homeAdminIndex.twig");
    }
}
