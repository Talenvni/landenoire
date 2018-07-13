<?php

/* /forum/editMessageCommonEdit.twig */
class __TwigTemplate_5f262ee52efbfe1e83391ab86d4f219172ddbe4b95877686bd9468dac60a8a9e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/forum/editMessageCommonEdit.twig", 1);
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
        echo "    ";
        if ((( !(null === ($context["sessionUser"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["getMessage"] ?? null), "idUser", array()) == twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "id", array()))) || (twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2))) {
            // line 5
            echo "        <main>
            <section class=\"container-fluid p-5 mt-auto\">
                <form method=\"post\" class=\"container\">
                    <fieldset>
                        <legend class=\"h2\">Éditer le message</legend>
                        <div>
                            <ul class=\"list-group\">
                                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["editMessage"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                if ( !(null === $context["error"])) {
                    // line 13
                    echo "                                    <li class=\"list-unstyled\">
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
            echo "                            </ul>
                        </div>
                        <div>
                        <textarea name=\"messageEdit\" id=\"messageContent\" cols=\"30\" rows=\"10\"
                                  placeholder=\"Votre message\" class=\"col-lg-12\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["getMessage"] ?? null), "content", array()), "html", null, true);
            echo "</textarea>
                        </div>
                        <div class=\"mt-2 text-center\">
                            <button name=\"editSubmit\" type=\"submit\" class=\"btn\">Éditer</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
    ";
        } else {
            // line 32
            echo "        <main>
            <section class=\"container-fluid p-5 mt-auto box--message\">
                <div class=\"d-flex justify-content-center\">
                    <p class=\"m-auto\">Impossible d'éditer ce message.</p>
                </div>
            </section>
        </main>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/forum/editMessageCommonEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  72 => 22,  66 => 18,  56 => 15,  52 => 13,  47 => 12,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    {% if sessionUser is not null and getMessage.idUser == sessionUser.id or sessionUser.idGroup >= 2 %}
        <main>
            <section class=\"container-fluid p-5 mt-auto\">
                <form method=\"post\" class=\"container\">
                    <fieldset>
                        <legend class=\"h2\">Éditer le message</legend>
                        <div>
                            <ul class=\"list-group\">
                                {% for error in editMessage if error is not null %}
                                    <li class=\"list-unstyled\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        {{ error }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div>
                        <textarea name=\"messageEdit\" id=\"messageContent\" cols=\"30\" rows=\"10\"
                                  placeholder=\"Votre message\" class=\"col-lg-12\">{{ getMessage.content }}</textarea>
                        </div>
                        <div class=\"mt-2 text-center\">
                            <button name=\"editSubmit\" type=\"submit\" class=\"btn\">Éditer</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
    {% else %}
        <main>
            <section class=\"container-fluid p-5 mt-auto box--message\">
                <div class=\"d-flex justify-content-center\">
                    <p class=\"m-auto\">Impossible d'éditer ce message.</p>
                </div>
            </section>
        </main>
    {% endif %}
{% endblock main %}", "/forum/editMessageCommonEdit.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\edit\\forum\\editMessageCommonEdit.twig");
    }
}
