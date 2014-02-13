<?php

/* OpenEcolesFrontOfficeBundle:Accueil:index.html.twig */
class __TwigTemplate_dd728ffa2628bd12db2e25dcb89468afe61352d537638fa93d46f9ec5df862bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
            'recommandation' => array($this, 'block_recommandation'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesfrontoffice/css/style.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        // line 9
        echo "
    <section class=\"research\">
        <div class=\"input-group\">
            <input type=\"text\" placeholder=\"Votre recherche\" class=\"form-control\">
            <input type=\"button\" value=\"Rechercher\" class=\"button-recherche\"/>
        </div>
    </section>

    <section class=\"utilisateur\">
        Hey ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo " !<br/><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" style=\"color:rgb(121,182,23)\" class=\"déploiment\">Déconnection</a>
    </section>

";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "<section style=\"margin-top: 1%;\">
    <nav class=\"menuhorizontal\">
        ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationHorizontale"));
        echo "
    </nav>
    <section id=\"content\">
        <nav id=\"menu\">
            ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationVerticale"));
        echo "
        </nav>
        <section class=\"contenu\">
            ";
        // line 33
        $this->displayBlock('section', $context, $blocks);
        // line 38
        echo "        </section>
    </section>
    ";
        // line 40
        $this->displayBlock('recommandation', $context, $blocks);
        // line 60
        echo "

    <!--

    <div class=\"conteneur\">

        <nav>
            ";
        // line 67
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationHorizontale"));
        echo "
        </nav>

        <section class =\"espace_personnel\">
            <nav id=\"menu\">
                ";
        // line 72
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationVerticale"));
        echo "
            </nav>
        </section>

        <section class =\"content\">
            <p style=\"text-align: center\">Bienvenue sur le site Open Ecole - Contenu du site (aggrandissement automatique afin d'eviter les 300px-450px etc etc</p>
        </section>

        ";
        // line 85
        echo "
    </div>
    -->


            ";
    }

    // line 33
    public function block_section($context, array $blocks = array())
    {
        // line 34
        echo "
                    ";
        // line 36
        echo "                     ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesWhatsupBundle:Whatsup:whatsup"));
        echo "
            ";
    }

    // line 40
    public function block_recommandation($context, array $blocks = array())
    {
        // line 41
        echo "        <section class=\"recommandation\">
            <article>
                <header>
                    <h2>Top ...</h2>
                </header>
                <section class=\"recommandationContentTop\">

                </section>
            </article>
            <article>
                <header>
                    <h2>Live Friends</h2>
                </header>
                <section class=\"recommandationContentFriends\">

                </section>
            </article>
        </section>
    ";
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "    <p class=\"frontfooter\">
        <a href=\"#\">Qui sommes nous </a> | <a href=\"#\">conditions d'utilisation</a> | <a href=\"#\">partenaires</a> | <a href=\"#\">contact</a>
        <br/>&reg;Copyright OpenEcoles 2013 tout droits r&eacute;serv&eacute;s
    </p>
";
    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OpenEcolesFrontOfficeBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 99,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  128 => 85,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  89 => 20,  85 => 25,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  105 => 40,  91 => 27,  62 => 18,  24 => 4,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 51,  126 => 9,  119 => 42,  117 => 72,  104 => 41,  100 => 60,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 27,  68 => 14,  61 => 13,  53 => 11,  49 => 19,  25 => 3,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 23,  69 => 25,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 40,  96 => 38,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 67,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 30,  82 => 29,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 5,  42 => 5,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
