<?php

/* /sign/signupCommonIndex.twig */
class __TwigTemplate_8420dacb1de59f09f80314c228a98d3d8638964529d2d7c89b10f968dc0addbb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/sign/signupCommonIndex.twig", 1);
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
        echo "    <main class=\"d-flex justify-content-center align-items-center\">
        <section class=\"container my-5\">
            <div class=\"row flex-column align-items-center justify-content-center\">
                <form method=\"post\" class=\"col-md-5\">
                    <fieldset>
                        <legend class=\"h2\">Inscription</legend>
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
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["signUpValidation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            if ( !(null === $context["error"])) {
                // line 20
                echo "                                    <li class=\"list-unstyled\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        ";
                // line 22
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
                                    </li>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                            </ul>
                        </div>
                        ";
        // line 28
        echo "                        <div class=\"form-group\">
                            <label for=\"signup-email\" class=\"w-100\">
                                Email
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-email\" placeholder=\"missive@domaine.ex\" type=\"email\"
                                       name=\"signup_email\" class=\"form-control\" required>
                                <small class=\"form-text text-muted\">
                                    Votre email ne sera visible pour personne.
                                    <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Votre email ne servira qu'à vous identifier et à faciliter le lien
                                            avec l'administration. Il ne sera en aucun cas partager au public.
                                        </small>
                                    </span>
                                </small>
                            </label>
                        </div>
                        ";
        // line 47
        echo "                        <div class=\"form-group\">
                            <label for=\"signup-pseudo\" class=\"w-100\">
                                Pseudo
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-pseudo\" placeholder=\"Le nom de votre légende\" type=\"text\"
                                       name=\"signup_pseudo\" class=\"form-control\" required>
                                <small class=\"form-text text-muted\">
                                    Votre pseudo ne pourra pas être modifié.
                                    <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Votre pseudo représente votre personnage. Par soucis de réalisme,
                                            vous ne pourrez pas en changer. Choisissez judicieusement.
                                            <br>
                                            Notez que le pseudo prend au minimum 3 caractères.
                                        </small>
                                    </span>
                                </small>
                            </label>
                        </div>
                        ";
        // line 68
        echo "                        <div class=\"form-group\">
                            <label for=\"signup-password\" class=\"w-100\">
                                Mot de passe
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-password\" placeholder=\"Veillez à le garder secret\"
                                       type=\"password\" name=\"signup_password\" class=\"form-control\" required>
                                <small class=\"form-text text-muted\">
                                    Min. 8 caractères alphanumériques.
                                    <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Afin de renforcer votre sécurité, nous demandons un mot de passe
                                            de minimum 8 caractéres alphanumériques. Les mots de passe sont
                                            sensibles à la case (majuscule).
                                        </small>
                                    </span>
                                </small>
                            </label>
                        </div>
                        ";
        // line 88
        echo "                        <div class=\"form-group\">
                            <label for=\"signup-password-confirm\" class=\"w-100\">
                                Mot de passe
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-password-confirm\"
                                       placeholder=\"Confirmation du mot de passe\"
                                       type=\"password\" name=\"signup_password_confirm\"
                                       class=\"form-control\" required>
                            </label>
                        </div>
                        ";
        // line 99
        echo "                        <div class=\"form-check my-3\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"double-account\"
                                   name=\"double_account_check\">
                            <label class=\"form-check-label\" for=\"double-account\">
                                Cochez si c'est un compte secondaire.
                            </label>
                                <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Afin de répertorier les comptes secondaires, merci de cocher
                                            cette case si ce n'est pas votre première inscription.
                                            Dans le cas contraire, laissez la case vide.
                                        </small>
                                    </span>
                        </div>
                        ";
        // line 115
        echo "                        <div id=\"double-account-email\" class=\"form-group d-none\">
                            <label for=\"double-account-input\" class=\"w-100\">
                                Email du premier compte
                                <span class=\"text-danger\">*</span>
                                <input id=\"double-account-input\"
                                       placeholder=\"Entrer l'email du compte principal\"
                                       type=\"email\" name=\"double_account_input\"
                                       class=\"form-control\">
                            </label>
                        </div>
                        ";
        // line 126
        echo "                        <div class=\"form-check my-3\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"rule-accepted\"
                                   name=\"rule_accepted\" value=\"1\">
                            <label class=\"form-check-label\" for=\"rule-accepted\">
                                En vous inscrivant, vous acceptez le
                                <a href=\"/codex/reglement-general\">règlement général</a>.
                            </label>
                        </div>
                        ";
        // line 135
        echo "                        <div class=\"g-recaptcha form-group\"
                             data-sitekey=\"6Lc_aUwUAAAAANbh1215itunfHXiXjzuKH_kQspw\"></div>
                        <hr>
                        <div class=\"form-group\">
                            <p>
                                <a class=\"card-link\" href=\"/sign-in\">
                                    Déjà inscrit ?
                                </a>
                                <span class=\"display-info d-block text-ln-gold\">
                                        Demande expirée ?
                                        <small class=\"content-info text-justify\">
                                            Si vous recevez l'erreur « Demande expirée »,
                                            pas de panique. Un email vous est envoyé au moment-même
                                            de l'erreur.<br>
                                            Par mesure de sécurité, chaque demande expire après
                                            1 heure de delai.
                                        </small>
                                </span>
                            </p>
                            <button type=\"submit\" name=\"signup_submit\" class=\"btn\">S'inscrire</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
";
    }

    // line 163
    public function block_script($context, array $blocks = array())
    {
        // line 164
        echo "    <script>
        \$('#double-account').click(function(){
            if (this.checked) {
                \$('#double-account-email').removeClass('d-none')
            }
            if (!this.checked) {
                \$('#double-account-email').addClass('d-none')
            }
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "/sign/signupCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 164,  235 => 163,  205 => 135,  195 => 126,  183 => 115,  166 => 99,  154 => 88,  133 => 68,  111 => 47,  91 => 28,  87 => 25,  77 => 22,  73 => 20,  67 => 19,  57 => 16,  53 => 14,  48 => 13,  44 => 11,  36 => 4,  33 => 3,  15 => 1,);
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
                        <legend class=\"h2\">Inscription</legend>
                        {# Error #}
                        <div class=\"form-group\">
                            <ul class=\"list-group\">
                                {% for error in sign if error is not null %}
                                    <li class=\"list-unstyled\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        {{ error }}
                                    </li>
                                {% endfor %}
                                {% for error in signUpValidation if error is not null %}
                                    <li class=\"list-unstyled\">
                                        <span class=\"badge badge-warning\">Erreur</span>
                                        {{ error }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        {# Email #}
                        <div class=\"form-group\">
                            <label for=\"signup-email\" class=\"w-100\">
                                Email
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-email\" placeholder=\"missive@domaine.ex\" type=\"email\"
                                       name=\"signup_email\" class=\"form-control\" required>
                                <small class=\"form-text text-muted\">
                                    Votre email ne sera visible pour personne.
                                    <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Votre email ne servira qu'à vous identifier et à faciliter le lien
                                            avec l'administration. Il ne sera en aucun cas partager au public.
                                        </small>
                                    </span>
                                </small>
                            </label>
                        </div>
                        {# Pseudo #}
                        <div class=\"form-group\">
                            <label for=\"signup-pseudo\" class=\"w-100\">
                                Pseudo
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-pseudo\" placeholder=\"Le nom de votre légende\" type=\"text\"
                                       name=\"signup_pseudo\" class=\"form-control\" required>
                                <small class=\"form-text text-muted\">
                                    Votre pseudo ne pourra pas être modifié.
                                    <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Votre pseudo représente votre personnage. Par soucis de réalisme,
                                            vous ne pourrez pas en changer. Choisissez judicieusement.
                                            <br>
                                            Notez que le pseudo prend au minimum 3 caractères.
                                        </small>
                                    </span>
                                </small>
                            </label>
                        </div>
                        {# Password #}
                        <div class=\"form-group\">
                            <label for=\"signup-password\" class=\"w-100\">
                                Mot de passe
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-password\" placeholder=\"Veillez à le garder secret\"
                                       type=\"password\" name=\"signup_password\" class=\"form-control\" required>
                                <small class=\"form-text text-muted\">
                                    Min. 8 caractères alphanumériques.
                                    <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Afin de renforcer votre sécurité, nous demandons un mot de passe
                                            de minimum 8 caractéres alphanumériques. Les mots de passe sont
                                            sensibles à la case (majuscule).
                                        </small>
                                    </span>
                                </small>
                            </label>
                        </div>
                        {# Password confirm #}
                        <div class=\"form-group\">
                            <label for=\"signup-password-confirm\" class=\"w-100\">
                                Mot de passe
                                <span class=\"text-danger\">*</span>
                                <input id=\"signup-password-confirm\"
                                       placeholder=\"Confirmation du mot de passe\"
                                       type=\"password\" name=\"signup_password_confirm\"
                                       class=\"form-control\" required>
                            </label>
                        </div>
                        {# Double Account checkbox #}
                        <div class=\"form-check my-3\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"double-account\"
                                   name=\"double_account_check\">
                            <label class=\"form-check-label\" for=\"double-account\">
                                Cochez si c'est un compte secondaire.
                            </label>
                                <span class=\"display-info text-ln-gold\">
                                        <i class=\"fas fa-info-circle\"></i>
                                        <small class=\"content-info text-justify\">
                                            Afin de répertorier les comptes secondaires, merci de cocher
                                            cette case si ce n'est pas votre première inscription.
                                            Dans le cas contraire, laissez la case vide.
                                        </small>
                                    </span>
                        </div>
                        {# Double account #}
                        <div id=\"double-account-email\" class=\"form-group d-none\">
                            <label for=\"double-account-input\" class=\"w-100\">
                                Email du premier compte
                                <span class=\"text-danger\">*</span>
                                <input id=\"double-account-input\"
                                       placeholder=\"Entrer l'email du compte principal\"
                                       type=\"email\" name=\"double_account_input\"
                                       class=\"form-control\">
                            </label>
                        </div>
                        {# Double Account checkbox #}
                        <div class=\"form-check my-3\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"rule-accepted\"
                                   name=\"rule_accepted\" value=\"1\">
                            <label class=\"form-check-label\" for=\"rule-accepted\">
                                En vous inscrivant, vous acceptez le
                                <a href=\"/codex/reglement-general\">règlement général</a>.
                            </label>
                        </div>
                        {# Captcha #}
                        <div class=\"g-recaptcha form-group\"
                             data-sitekey=\"6Lc_aUwUAAAAANbh1215itunfHXiXjzuKH_kQspw\"></div>
                        <hr>
                        <div class=\"form-group\">
                            <p>
                                <a class=\"card-link\" href=\"/sign-in\">
                                    Déjà inscrit ?
                                </a>
                                <span class=\"display-info d-block text-ln-gold\">
                                        Demande expirée ?
                                        <small class=\"content-info text-justify\">
                                            Si vous recevez l'erreur « Demande expirée »,
                                            pas de panique. Un email vous est envoyé au moment-même
                                            de l'erreur.<br>
                                            Par mesure de sécurité, chaque demande expire après
                                            1 heure de delai.
                                        </small>
                                </span>
                            </p>
                            <button type=\"submit\" name=\"signup_submit\" class=\"btn\">S'inscrire</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
{% endblock main %}

{% block script %}
    <script>
        \$('#double-account').click(function(){
            if (this.checked) {
                \$('#double-account-email').removeClass('d-none')
            }
            if (!this.checked) {
                \$('#double-account-email').addClass('d-none')
            }
        })
    </script>
{% endblock script %}", "/sign/signupCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\sign\\signupCommonIndex.twig");
    }
}
