<?php

/* /home/homeAdminEdit.twig */
class __TwigTemplate_fac6b80fca3dec0fb16db08916028e56155f1a8d9b96d3edcf6070d5a40ca675 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "/home/homeAdminEdit.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        echo "    <section class=\"container my-5\">
        <div class=\"row flex-column align-items-center justify-content-center\">
            <form method=\"post\" class=\"col-md-5\">
                <fieldset>
                    <legend class=\"h2\">Éditer ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "pseudo", array()), "html", null, true);
        echo "</legend>
                    ";
        // line 10
        echo "                    <div class=\"form-group\">
                        <ul class=\"list-group\">
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["editUser"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            if ( !(null === $context["error"])) {
                // line 13
                echo "                                <li class=\"list-unstyled\">
                                    <span class=\"badge badge-warning\">Erreur</span>
                                    ";
                // line 15
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        </ul>
                    </div>
                    ";
        // line 21
        echo "                    <div class=\"form-group\">
                        <label for=\"editEmail\" class=\"w-100\">
                            Email
                            <span class=\"text-danger\">*</span>
                            <input id=\"editEmail\" placeholder=\"missive@domaine.ex\" type=\"email\"
                                   name=\"editEmail\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "email", array()), "html", null, true);
        echo "\" required>
                        </label>
                    </div>
                    ";
        // line 30
        echo "                    <div class=\"form-group\">
                        <label for=\"editPseudo\" class=\"w-100\">
                            Pseudonyme
                            <span class=\"text-danger\">*</span>
                            <input id=\"editPseudo\" placeholder=\"Pseudo\"
                                   type=\"text\" name=\"editPseudo\" class=\"form-control\"
                                   value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "pseudo", array()), "html", null, true);
        echo "\" required>
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"editGroup\" class=\"w-100\">
                            Rang
                            <select name=\"editGroup\" id=\"editGroup\" class=\"form-control\"
                                    ";
        // line 44
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "idGroup", array()) == 3)) {
            echo "disabled";
        }
        echo ">
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["editGroup"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 46
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", array()), "html", null, true);
            echo "\"
                                            ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "id", array()) == twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "idGroup", array()))) {
                echo "selected";
            }
            // line 48
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "id", array()) == 3)) {
                echo "disabled";
            }
            echo ">
                                        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "groupName", array()), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </select>
                        </label>
                    </div>
                    ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "idGroup", array()) < 3)) {
            // line 56
            echo "                        <div class=\"form-group\">
                            <label for=\"editBan\" class=\"form-check-label\">
                                Bannir
                                <input id=\"editBan\" type=\"checkbox\" class=\"form-control\" name=\"editBan\"
                                       ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, ($context["editUser"] ?? null), "isBanned", array()) == 1)) {
                echo "checked";
            }
            echo ">
                            </label>
                        </div>
                    ";
        }
        // line 64
        echo "                    <hr>
                    <div class=\"form-group\">
                        <button type=\"submit\" name=\"editSubmit\" class=\"btn\">Éditer</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "/home/homeAdminEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 64,  152 => 60,  146 => 56,  144 => 55,  139 => 52,  130 => 49,  123 => 48,  119 => 47,  114 => 46,  110 => 45,  103 => 44,  93 => 36,  85 => 30,  79 => 26,  72 => 21,  68 => 18,  58 => 15,  54 => 13,  49 => 12,  45 => 10,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% block main %}
    <section class=\"container my-5\">
        <div class=\"row flex-column align-items-center justify-content-center\">
            <form method=\"post\" class=\"col-md-5\">
                <fieldset>
                    <legend class=\"h2\">Éditer {{ editUser.pseudo }}</legend>
                    {# Error #}
                    <div class=\"form-group\">
                        <ul class=\"list-group\">
                            {% for error in editUser if error is not null %}
                                <li class=\"list-unstyled\">
                                    <span class=\"badge badge-warning\">Erreur</span>
                                    {{ error }}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {# Email #}
                    <div class=\"form-group\">
                        <label for=\"editEmail\" class=\"w-100\">
                            Email
                            <span class=\"text-danger\">*</span>
                            <input id=\"editEmail\" placeholder=\"missive@domaine.ex\" type=\"email\"
                                   name=\"editEmail\" class=\"form-control\" value=\"{{ editUser.email }}\" required>
                        </label>
                    </div>
                    {# Pseudo #}
                    <div class=\"form-group\">
                        <label for=\"editPseudo\" class=\"w-100\">
                            Pseudonyme
                            <span class=\"text-danger\">*</span>
                            <input id=\"editPseudo\" placeholder=\"Pseudo\"
                                   type=\"text\" name=\"editPseudo\" class=\"form-control\"
                                   value=\"{{ editUser.pseudo }}\" required>
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"editGroup\" class=\"w-100\">
                            Rang
                            <select name=\"editGroup\" id=\"editGroup\" class=\"form-control\"
                                    {# Can't change admin rank #}
                                    {% if editUser.idGroup == 3 %}disabled{% endif %}>
                                {% for group in editGroup %}
                                    <option value=\"{{ group.id }}\"
                                            {% if group.id == editUser.idGroup %}selected{% endif %}
                                            {% if group.id == 3 %}disabled{% endif %}>
                                        {{ group.groupName }}
                                    </option>
                                {% endfor %}
                            </select>
                        </label>
                    </div>
                    {% if editUser.idGroup < 3 %}
                        <div class=\"form-group\">
                            <label for=\"editBan\" class=\"form-check-label\">
                                Bannir
                                <input id=\"editBan\" type=\"checkbox\" class=\"form-control\" name=\"editBan\"
                                       {% if editUser.isBanned == 1 %}checked{% endif %}>
                            </label>
                        </div>
                    {% endif %}
                    <hr>
                    <div class=\"form-group\">
                        <button type=\"submit\" name=\"editSubmit\" class=\"btn\">Éditer</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
{% endblock main %}", "/home/homeAdminEdit.twig", "C:\\wamp64\\www\\landenoire\\view\\admin\\edit\\home\\homeAdminEdit.twig");
    }
}
