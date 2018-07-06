<?php

/* /sign/signinCommonIndex.twig */
class __TwigTemplate_b2b22ed07fc70c7f4c845a2d82118014be89a0aa35477be5d32cd51124c47ade extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/sign/signinCommonIndex.twig", 1);
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
            <div class=\"row flex-column align-items-center justify-content-center\">
                <form method=\"post\" class=\"col-md-5\">
                    <fieldset>
                        <legend class=\"h2\">Connexion</legend>
                        ";
        // line 11
        echo "                        <div class=\"form-group\">
                            <ul class=\"list-group\">
                                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sign"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            if ( !(null === $context["error"])) {
                // line 14
                echo "                                    <li class=\"list-unstyled\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        ";
                // line 16
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                    </li>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                            </ul>
                        </div>
                        ";
        // line 22
        echo "                        <div class=\"form-group\">
                            <label for=\"signin-email\" class=\"w-100\">
                                Email
                                <span class=\"text-danger\">*</span>
                                <input id=\"signin-email\" placeholder=\"missive@domaine.ex\" type=\"email\"
                                       name=\"signin_email\" class=\"form-control\" required>
                            </label>
                        </div>
                        ";
        // line 31
        echo "                        <div class=\"form-group\">
                            <label for=\"signin-password\" class=\"w-100\">
                                Mot de passe
                                <span class=\"text-danger\">*</span>
                                <input id=\"signin-password\" placeholder=\"Aucun maître-espion admis\"
                                       type=\"password\" name=\"signin_password\" class=\"form-control\" required>
                            </label>
                        </div>
                        <label for=\"signin-checkbox\" title=\"Permet de conserver votre session\">
                            <input id=\"signin-checkbox\" type=\"checkbox\" name=\"signin_checkbox\">
                            Maintenir la connexion
                            <span class=\"display-info text-ln-gold\">
                                <i class=\"fas fa-info-circle\"></i>
                                <small class=\"content-info text-justify\">
                                    Maintenir la connexion autorise le site à se souvenir de vous afin
                                    de vous connecter automatiquement à l'avenir.
                                </small>
                            </span>
                        </label>
                        <hr>
                        <div class=\"form-group\">
                            <p>
                                <a href=\"/sign-up\">
                                    Pas encore inscrit ?
                                </a>
                            </p>
                            <p>
                                <a href=\"/forgot-password\">Mot de passe oublié ?</a>
                            </p>
                            <button type=\"submit\" name=\"signin_submit\" class=\"btn\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "/sign/signinCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  70 => 22,  66 => 19,  56 => 16,  52 => 14,  47 => 13,  43 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main class=\"d-flex justify-content-center align-items-center\">
        <section class=\"container my-5\">
            <div class=\"row flex-column align-items-center justify-content-center\">
                <form method=\"post\" class=\"col-md-5\">
                    <fieldset>
                        <legend class=\"h2\">Connexion</legend>
                        {# Error #}
                        <div class=\"form-group\">
                            <ul class=\"list-group\">
                                {% for error in sign if error is not null %}
                                    <li class=\"list-unstyled\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        {{ error }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        {# Email #}
                        <div class=\"form-group\">
                            <label for=\"signin-email\" class=\"w-100\">
                                Email
                                <span class=\"text-danger\">*</span>
                                <input id=\"signin-email\" placeholder=\"missive@domaine.ex\" type=\"email\"
                                       name=\"signin_email\" class=\"form-control\" required>
                            </label>
                        </div>
                        {# Password #}
                        <div class=\"form-group\">
                            <label for=\"signin-password\" class=\"w-100\">
                                Mot de passe
                                <span class=\"text-danger\">*</span>
                                <input id=\"signin-password\" placeholder=\"Aucun maître-espion admis\"
                                       type=\"password\" name=\"signin_password\" class=\"form-control\" required>
                            </label>
                        </div>
                        <label for=\"signin-checkbox\" title=\"Permet de conserver votre session\">
                            <input id=\"signin-checkbox\" type=\"checkbox\" name=\"signin_checkbox\">
                            Maintenir la connexion
                            <span class=\"display-info text-ln-gold\">
                                <i class=\"fas fa-info-circle\"></i>
                                <small class=\"content-info text-justify\">
                                    Maintenir la connexion autorise le site à se souvenir de vous afin
                                    de vous connecter automatiquement à l'avenir.
                                </small>
                            </span>
                        </label>
                        <hr>
                        <div class=\"form-group\">
                            <p>
                                <a href=\"/sign-up\">
                                    Pas encore inscrit ?
                                </a>
                            </p>
                            <p>
                                <a href=\"/forgot-password\">Mot de passe oublié ?</a>
                            </p>
                            <button type=\"submit\" name=\"signin_submit\" class=\"btn\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
{% endblock main %}", "/sign/signinCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\sign\\signinCommonIndex.twig");
    }
}
