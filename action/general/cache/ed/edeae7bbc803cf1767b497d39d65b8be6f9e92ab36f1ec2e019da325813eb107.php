<?php

/* /contact/contactCommonIndex.twig */
class __TwigTemplate_4c6669c8f53233069de41a22daee8c7375f88f95715f2b56865865423546090b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/contact/contactCommonIndex.twig", 1);
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
        echo "    <main class=\"d-flex justify-content-center align-items-center\">
        <section class=\"container my-5\">

            <form method=\"post\">
                <fieldset>
                    <legend class=\"h1\">Contact</legend>
                    <div class=\"tab-content\">
                        <div id=\"fr\" class=\"tab-pane active\" role=\"tabpanel\">

                            <div class=\"text-center\">
                                <p>
                                    Utilisez ce formulaire pour rentrer en contact avec l'administration.
                                </p>
                            </div>

                            ";
        // line 20
        echo "                            <div class=\"form-group\">
                                <ul class=\"list-group\">
                                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contact"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            if ( !(null === $context["error"])) {
                // line 23
                echo "                                        <li class=\"list-unstyled\">
                                            <span class=\"badge badge-warning\">Erreur</span>
                                            ";
                // line 25
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                        </li>
                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                                </ul>
                            </div>
                            <div class=\"row justify-content-between\">
                                ";
        // line 32
        echo "                                <div class=\"form-group col-lg-6\">
                                    <label for=\"contact-email\" class=\"w-100\">
                                        Email
                                        <span class=\"text-danger\">*</span>
                                        <input id=\"contact-email\" placeholder=\"missive@domaine.ex\"
                                               type=\"email\"
                                               name=\"contact_email\" class=\"form-control\" required>
                                    </label>
                                </div>
                                ";
        // line 42
        echo "                                <div class=\"form-group col-lg-6\">
                                    <label for=\"contact-subject\" class=\"w-100\">
                                        Sujet
                                        <span class=\"text-danger\">*</span>
                                        <input id=\"contact-subject\" placeholder=\"Votre Sujet\" type=\"text\"
                                               name=\"contact_subject\" class=\"form-control\" required>
                                    </label>
                                </div>
                            </div>
                            ";
        // line 52
        echo "                            <div class=\"form-group\">
                                <label for=\"contact-message\" class=\"w-100\">
                                    Message
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <textarea name=\"contact_message\" id=\"contact-message\" cols=\"30\"
                                          rows=\"10\"
                                          placeholder=\"Votre message\"></textarea>
                            </div>
                            ";
        // line 62
        echo "                            <div class=\"d-flex justify-content-center\">
                                <div class=\"g-recaptcha form-group\"
                                     data-sitekey=\"6Lc_aUwUAAAAANbh1215itunfHXiXjzuKH_kQspw\"></div>
                            </div>
                            <hr>
                            <div class=\"form-group text-center\">
                                <button type=\"submit\" name=\"contact_submit\" class=\"btn btn-lg\">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/contact/contactCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 62,  102 => 52,  91 => 42,  80 => 32,  75 => 28,  65 => 25,  61 => 23,  56 => 22,  52 => 20,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main class=\"d-flex justify-content-center align-items-center\">
        <section class=\"container my-5\">

            <form method=\"post\">
                <fieldset>
                    <legend class=\"h1\">Contact</legend>
                    <div class=\"tab-content\">
                        <div id=\"fr\" class=\"tab-pane active\" role=\"tabpanel\">

                            <div class=\"text-center\">
                                <p>
                                    Utilisez ce formulaire pour rentrer en contact avec l'administration.
                                </p>
                            </div>

                            {# Error #}
                            <div class=\"form-group\">
                                <ul class=\"list-group\">
                                    {% for error in contact if error is not null %}
                                        <li class=\"list-unstyled\">
                                            <span class=\"badge badge-warning\">Erreur</span>
                                            {{ error }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                            <div class=\"row justify-content-between\">
                                {# Email #}
                                <div class=\"form-group col-lg-6\">
                                    <label for=\"contact-email\" class=\"w-100\">
                                        Email
                                        <span class=\"text-danger\">*</span>
                                        <input id=\"contact-email\" placeholder=\"missive@domaine.ex\"
                                               type=\"email\"
                                               name=\"contact_email\" class=\"form-control\" required>
                                    </label>
                                </div>
                                {# Nom #}
                                <div class=\"form-group col-lg-6\">
                                    <label for=\"contact-subject\" class=\"w-100\">
                                        Sujet
                                        <span class=\"text-danger\">*</span>
                                        <input id=\"contact-subject\" placeholder=\"Votre Sujet\" type=\"text\"
                                               name=\"contact_subject\" class=\"form-control\" required>
                                    </label>
                                </div>
                            </div>
                            {# Nom #}
                            <div class=\"form-group\">
                                <label for=\"contact-message\" class=\"w-100\">
                                    Message
                                    <span class=\"text-danger\">*</span>
                                </label>
                                <textarea name=\"contact_message\" id=\"contact-message\" cols=\"30\"
                                          rows=\"10\"
                                          placeholder=\"Votre message\"></textarea>
                            </div>
                            {# Captcha #}
                            <div class=\"d-flex justify-content-center\">
                                <div class=\"g-recaptcha form-group\"
                                     data-sitekey=\"6Lc_aUwUAAAAANbh1215itunfHXiXjzuKH_kQspw\"></div>
                            </div>
                            <hr>
                            <div class=\"form-group text-center\">
                                <button type=\"submit\" name=\"contact_submit\" class=\"btn btn-lg\">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
{% endblock main %}", "/contact/contactCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\contact\\contactCommonIndex.twig");
    }
}
