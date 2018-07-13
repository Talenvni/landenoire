<?php

/* /forum/newTopicCommonEdit.twig */
class __TwigTemplate_7f808b6c3e4283b78d15209c6f9b6ec4924ba1772df934a54f18aa5b520d1f4d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/forum/newTopicCommonEdit.twig", 1);
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
        if ( !(null === ($context["sessionUser"] ?? null))) {
            // line 5
            echo "        <main>
            <section class=\"container-fluid p-5 mt-auto\">
                <form method=\"post\" class=\"container\">
                    <fieldset>
                        <legend class=\"h2\">Nouveau sujet</legend>
                        <div>
                            <ul class=\"list-group\">
                                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addTopic"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                if ( !(null === ($context["addTopic"] ?? null))) {
                    // line 13
                    echo "                                    <li class=\"list-group-item bg-transparent\">
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
                        <div class=\"form-group\">
                            <input id=\"topicSubject\" placeholder=\"Votre sujet\" type=\"text\"
                                   name=\"topicSubject\" class=\"form-control\" required>
                        </div>
                        <div>
                        <textarea name=\"topicContent\" id=\"topicContent\" cols=\"30\"
                                  rows=\"10\" placeholder=\"Votre message\" class=\"col-lg-12\"></textarea>
                        </div>
                        <div class=\"mt-2 text-center\">
                            <button name=\"newTopicSubmit\" type=\"submit\" class=\"btn btn-lg\">Envoyer</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
    ";
        }
    }

    public function getTemplateName()
    {
        return "/forum/newTopicCommonEdit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  56 => 15,  52 => 13,  47 => 12,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    {% if sessionUser is not null %}
        <main>
            <section class=\"container-fluid p-5 mt-auto\">
                <form method=\"post\" class=\"container\">
                    <fieldset>
                        <legend class=\"h2\">Nouveau sujet</legend>
                        <div>
                            <ul class=\"list-group\">
                                {% for error in addTopic if addTopic is not null %}
                                    <li class=\"list-group-item bg-transparent\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        {{ error }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        <div class=\"form-group\">
                            <input id=\"topicSubject\" placeholder=\"Votre sujet\" type=\"text\"
                                   name=\"topicSubject\" class=\"form-control\" required>
                        </div>
                        <div>
                        <textarea name=\"topicContent\" id=\"topicContent\" cols=\"30\"
                                  rows=\"10\" placeholder=\"Votre message\" class=\"col-lg-12\"></textarea>
                        </div>
                        <div class=\"mt-2 text-center\">
                            <button name=\"newTopicSubmit\" type=\"submit\" class=\"btn btn-lg\">Envoyer</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </main>
    {% endif %}
{% endblock main %}", "/forum/newTopicCommonEdit.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\edit\\forum\\newTopicCommonEdit.twig");
    }
}
