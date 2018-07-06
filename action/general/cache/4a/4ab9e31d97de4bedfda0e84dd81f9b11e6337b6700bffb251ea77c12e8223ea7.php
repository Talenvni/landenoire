<?php

/* /tavern/tavernCommonIndex.twig */
class __TwigTemplate_4c3f3849586e2ee01263fa7e0ff84d3ee30e1589569661792bdf8e0622d19f61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "/tavern/tavernCommonIndex.twig", 1);
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
        if ( !(null === ($context["sessionUser"] ?? null))) {
            // line 6
            echo "            <div class=\"chatbox--title container d-flex\">
                <h5 class=\"m-0\">Taverne, en ligne :
                    <span id=\"chatbox--users\"></span>
                </h5>
            </div>
            <section id=\"chat\" class=\"box--message chatbox--container container\">
                <div class=\"row\">
                    <div id=\"chatbox\" class=\"w-100\">

                    </div>
                </div>
            </section>
            <form id=\"chatForm\" method=\"post\" action=\"/action/ajax/TavernInsert.php\"
                  class=\"chatForm container form-group mb-5\">
                <div class=\"row justify-content-around align-items-center\">
                    ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, ($context["userBan"] ?? null), "isBanned", array()) == 0)) {
                // line 22
                echo "                        <textarea id=\"chatMessage\" name=\"chatMessage\" class=\"form-control col-lg-10\"
                                  placeholder=\"Message\"></textarea>
                        <div id=\"chatbox--error\"></div>
                    ";
            }
            // line 26
            echo "                        ";
            // line 27
            echo "                                ";
            // line 28
            echo "                        ";
            // line 29
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["sessionUser"] ?? null), "idGroup", array()) >= 2)) {
                // line 30
                echo "                        <button type=\"button\" id=\"chatRefresh\" class=\"btn my-2\"
                                name=\"chatRefresh\">Rafraîchir
                        </button>
                    ";
            }
            // line 34
            echo "                </div>
            </form>
        ";
        }
        // line 37
        echo "    </main>
";
    }

    // line 40
    public function block_script($context, array $blocks = array())
    {
        // line 41
        echo "    <script>

    </script>
";
    }

    public function getTemplateName()
    {
        return "/tavern/tavernCommonIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  91 => 40,  86 => 37,  81 => 34,  75 => 30,  72 => 29,  70 => 28,  68 => 27,  66 => 26,  60 => 22,  58 => 21,  41 => 6,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig' %}

{% block main %}
    <main>
        {% if sessionUser is not null %}
            <div class=\"chatbox--title container d-flex\">
                <h5 class=\"m-0\">Taverne, en ligne :
                    <span id=\"chatbox--users\"></span>
                </h5>
            </div>
            <section id=\"chat\" class=\"box--message chatbox--container container\">
                <div class=\"row\">
                    <div id=\"chatbox\" class=\"w-100\">

                    </div>
                </div>
            </section>
            <form id=\"chatForm\" method=\"post\" action=\"/action/ajax/TavernInsert.php\"
                  class=\"chatForm container form-group mb-5\">
                <div class=\"row justify-content-around align-items-center\">
                    {% if userBan.isBanned == 0 %}
                        <textarea id=\"chatMessage\" name=\"chatMessage\" class=\"form-control col-lg-10\"
                                  placeholder=\"Message\"></textarea>
                        <div id=\"chatbox--error\"></div>
                    {% endif %}
                        {#<button type=\"submit\" id=\"chatSubmit\" class=\"btn my-2\"#}
                                {#name=\"chatSubmit\">Tavernier, un mot !#}
                        {#</button>#}
                    {% if sessionUser.idGroup >= 2 %}
                        <button type=\"button\" id=\"chatRefresh\" class=\"btn my-2\"
                                name=\"chatRefresh\">Rafraîchir
                        </button>
                    {% endif %}
                </div>
            </form>
        {% endif %}
    </main>
{% endblock main %}

{% block script %}
    <script>

    </script>
{% endblock script %}", "/tavern/tavernCommonIndex.twig", "C:\\wamp64\\www\\landenoire\\view\\common\\index\\tavern\\tavernCommonIndex.twig");
    }
}
