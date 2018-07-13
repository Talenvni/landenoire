<?php

/* /account/profilTabSecurity.twig */
class __TwigTemplate_b03638546bd71921b28810bc6e064f9884d684a2edf0b6c333d3d57c1325d43e extends Twig_Template
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
    <div class=\"profil--info-list py-4 container rounded\">
        <div class=\"row justify-content-center text-center\">
            <h2>Mot de passe et email</h2>
        </div>
        <hr class=\"mt-0 mb-4\">
        <div class=\"row\">
            <form method=\"post\" class=\"col-lg-6\">
                <fieldset>
                    <legend class=\"h5\">Changer email</legend>
                    <div>
                        <ul class=\"list-group\">
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["email"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            if ( !(null === $context["error"])) {
                // line 16
                echo "                                <li class=\"list-unstyled\">
                                    <span class=\"badge badge-warning\">Erreur</span>
                                    ";
                // line 18
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        </ul>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"newEmail\" class=\"control-label\">
                            Email
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"newEmail\"
                                   placeholder=\"Nouvel email\"
                                   type=\"email\" name=\"newEmail\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"emailPassword\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"emailPassword\"
                                   placeholder=\"Confirmation\"
                                   type=\"password\" name=\"emailPassword\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-lg-10 col-lg-offset-2\">
                            <p class=\"text-danger\">Vous serez déconnecté.</p>
                            <button type=\"submit\" class=\"btn\"
                                    name=\"newEmailSubmit\">Changer
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>

            <form method=\"post\" class=\"form-horizontal col-lg-6\">
                <fieldset>
                    <legend class=\"h5\">Changer mot de passe</legend>
                    <div>
                        <ul class=\"list-group\">
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["password"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            if ( !(null === ($context["password"] ?? null))) {
                // line 62
                echo "                                <li class=\"list-group-item bg-transparent\">
                                    <span class=\"badge badge-warning\">Erreur</span>
                                    ";
                // line 64
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                </li>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </ul>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"changeOld\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=changeOld\"
                                   placeholder=\"Mot de passe (actuel)\"
                                   type=\"password\" name=\"changeOld\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"changePassword\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"changePassword\"
                                   placeholder=\"Mot de passe (nouveau)\"
                                   type=\"password\" name=\"changePassword\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"changeConfirm\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"changeConfirm\"
                                   placeholder=\"Mot de passe (confirmation)\"
                                   type=\"password\" name=\"changeConfirm\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-lg-10 col-lg-offset-2\">
                            <p class=\"text-danger\">Vous serez déconnecté.</p>
                            <button type=\"submit\" class=\"btn\">Changer</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/account/profilTabSecurity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 67,  108 => 64,  104 => 62,  99 => 61,  57 => 21,  47 => 18,  43 => 16,  38 => 15,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Security Tab #}

<section class=\"container--profil-info container my-5 py-5 rounded\">
    <div class=\"profil--info-list py-4 container rounded\">
        <div class=\"row justify-content-center text-center\">
            <h2>Mot de passe et email</h2>
        </div>
        <hr class=\"mt-0 mb-4\">
        <div class=\"row\">
            <form method=\"post\" class=\"col-lg-6\">
                <fieldset>
                    <legend class=\"h5\">Changer email</legend>
                    <div>
                        <ul class=\"list-group\">
                            {% for error in email if error is not null %}
                                <li class=\"list-unstyled\">
                                    <span class=\"badge badge-warning\">Erreur</span>
                                    {{ error }}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"newEmail\" class=\"control-label\">
                            Email
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"newEmail\"
                                   placeholder=\"Nouvel email\"
                                   type=\"email\" name=\"newEmail\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"emailPassword\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"emailPassword\"
                                   placeholder=\"Confirmation\"
                                   type=\"password\" name=\"emailPassword\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-lg-10 col-lg-offset-2\">
                            <p class=\"text-danger\">Vous serez déconnecté.</p>
                            <button type=\"submit\" class=\"btn\"
                                    name=\"newEmailSubmit\">Changer
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>

            <form method=\"post\" class=\"form-horizontal col-lg-6\">
                <fieldset>
                    <legend class=\"h5\">Changer mot de passe</legend>
                    <div>
                        <ul class=\"list-group\">
                            {% for error in password if password is not null %}
                                <li class=\"list-group-item bg-transparent\">
                                    <span class=\"badge badge-warning\">Erreur</span>
                                    {{ error }}
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"changeOld\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=changeOld\"
                                   placeholder=\"Mot de passe (actuel)\"
                                   type=\"password\" name=\"changeOld\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"changePassword\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"changePassword\"
                                   placeholder=\"Mot de passe (nouveau)\"
                                   type=\"password\" name=\"changePassword\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"changeConfirm\" class=\"control-label\">
                            Mot de passe
                            <span class=\"text-danger\">*</span>
                        </label>
                        <div class=\"col-lg-10\">
                            <input class=\"form-control\" id=\"changeConfirm\"
                                   placeholder=\"Mot de passe (confirmation)\"
                                   type=\"password\" name=\"changeConfirm\" required>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-lg-10 col-lg-offset-2\">
                            <p class=\"text-danger\">Vous serez déconnecté.</p>
                            <button type=\"submit\" class=\"btn\">Changer</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</section>", "/account/profilTabSecurity.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\account\\profilTabSecurity.twig");
    }
}
