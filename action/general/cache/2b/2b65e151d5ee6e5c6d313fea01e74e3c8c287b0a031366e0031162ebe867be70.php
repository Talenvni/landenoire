<?php

/* /account/profilTabPreference.twig */
class __TwigTemplate_3d12138064c07a7c57653c64ad8244d91b69631e5d9161e5b90a8224c3f6fc0a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<section class=\"container--profil-info container my-5 py-5 rounded\">
    <div class=\"d-flex justify-content-center mt-5\">
        <div class=\"profil--info-list py-4 container rounded\">
            <div class=\"row d-flex justify-content-center text-center\">
                <h2>Vendre l'inventaire</h2>
            </div>
            <hr class=\"mt-0 mb-4\">
            <form method=\"post\" class=\"form-group\">
                <div class=\"row justify-content-between\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["showQuality"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quality"]) {
            // line 13
            echo "                        <div class=\"col-lg-3\">
                            <label for=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array())), "html", null, true);
            echo "\" class=\"form-control-label\">
                                Objets <span style=\"color: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "color", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array()), "html", null, true);
            echo "s</span>
                            </label>
                            <select name=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array())), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quality"], "name", array())), "html", null, true);
            echo "\"
                                    class=\"form-control\" size=\"5\">
                                <optgroup label=\"Objets\">
                                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["showInventory"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["inventory"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["inventory"], "quality", array()) == twig_get_attribute($this->env, $this->source, $context["quality"], "name", array()))) {
                    // line 21
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "id", array()), "html", null, true);
                    echo "\">
                                            ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "name", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inventory"], "number", array()), "html", null, true);
                    echo "
                                        </option>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inventory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                                </optgroup>
                            </select>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quality'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </div>

                ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["showAccount"] ?? null), "id", array()))) {
            // line 32
            echo "                    <div class=\"row justify-content-center mt-4\">
                        <button type=\"submit\" class=\"btn\" name=\"inventory_submit\">
                            Vendre
                        </button>
                    </div>
                ";
        }
        // line 38
        echo "                <div class=\"row mt-4 justify-content-center\">
                    <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                    <ul class=\"col-lg-9 text-center text-lg-left\">
                        <li class=\"font-italic col-lg-10\">
                            Permet de vendre ses objets.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Le gain reçu varie uniquement selon la qualité, pas l'objet.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Il n'est possible de vendre qu'un objet par qualité à la fois.
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/account/profilTabPreference.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  98 => 32,  96 => 31,  92 => 29,  83 => 25,  71 => 22,  66 => 21,  61 => 20,  53 => 17,  46 => 15,  42 => 14,  39 => 13,  35 => 12,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Preference Tab #}

<section class=\"container--profil-info container my-5 py-5 rounded\">
    <div class=\"d-flex justify-content-center mt-5\">
        <div class=\"profil--info-list py-4 container rounded\">
            <div class=\"row d-flex justify-content-center text-center\">
                <h2>Vendre l'inventaire</h2>
            </div>
            <hr class=\"mt-0 mb-4\">
            <form method=\"post\" class=\"form-group\">
                <div class=\"row justify-content-between\">
                    {% for quality in showQuality %}
                        <div class=\"col-lg-3\">
                            <label for=\"{{ quality.name|lower }}\" class=\"form-control-label\">
                                Objets <span style=\"color: {{ quality.color }}\">{{ quality.name }}s</span>
                            </label>
                            <select name=\"{{ quality.name|lower }}\" id=\"{{ quality.name|lower }}\"
                                    class=\"form-control\" size=\"5\">
                                <optgroup label=\"Objets\">
                                    {% for inventory in showInventory if inventory.quality == quality.name %}
                                        <option value=\"{{ inventory.id }}\">
                                            {{ inventory.name }} x {{ inventory.number }}
                                        </option>
                                    {% endfor %}
                                </optgroup>
                            </select>
                        </div>
                    {% endfor %}
                </div>

                {% if sessionUser.id == showAccount.id %}
                    <div class=\"row justify-content-center mt-4\">
                        <button type=\"submit\" class=\"btn\" name=\"inventory_submit\">
                            Vendre
                        </button>
                    </div>
                {% endif %}
                <div class=\"row mt-4 justify-content-center\">
                    <h5 class=\"col-lg-3 text-center text-lg-right\">Consigne :</h5>
                    <ul class=\"col-lg-9 text-center text-lg-left\">
                        <li class=\"font-italic col-lg-10\">
                            Permet de vendre ses objets.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Le gain reçu varie uniquement selon la qualité, pas l'objet.
                        </li>
                        <li class=\"font-italic col-lg-10\">
                            Il n'est possible de vendre qu'un objet par qualité à la fois.
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</section>", "/account/profilTabPreference.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilTabPreference.twig");
    }
}
