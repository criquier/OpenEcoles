<?php

/* OpenEcolesOpenAnnoncesBundle:Default:index.html.twig */
class __TwigTemplate_8f4080421851b4466d44a6e69cedba978028d10f987226ad56e18958dbff224e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'recommandation' => array($this, 'block_recommandation'),
            'footer' => array($this, 'block_footer'),
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
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 11
    public function block_entete($context, array $blocks = array())
    {
        // line 12
        echo "
    <section class=\"research\">
        <div class=\"input-group\">
            <input type=\"text\" placeholder=\"Votre recherche\" class=\"form-control\">
            <input type=\"button\" value=\"Rechercher\" class=\"button-recherche\"/>
        </div>
    </section>

    <section class=\"utilisateur\">
        ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "            <p class=\"nom_utilisateur\">Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "<a href=\"#\" class=\"déploiment\"> + </a> </p>
            <p><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></p>
        ";
        } else {
            // line 25
            echo "            <p><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se Connecter</a></p>
            <p><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></p>
        ";
        }
        // line 28
        echo "    </section>

";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "
    <!-- Le corps de la page -->
    <div class=\"conteneur\">

        <nav>
            ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationHorizontale"));
        echo "
        </nav>

        <!-- L'espace personnel -->
        <section class =\"espace_personnel\">
            <nav id=\"menu\">
                ";
        // line 44
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationVerticale"));
        echo "
            </nav>
        </section>

        <!-- Le contenu du site pour l'utilisateur -->
        <section class =\"content\">
            <p style=\"text-align: center\">Bienvenue sur les OpenSeances</p>
        </section>

        <!-- le systeme de recommandation -->
        ";
        // line 54
        $this->displayBlock('recommandation', $context, $blocks);
        // line 59
        echo "
    </div>

";
    }

    // line 54
    public function block_recommandation($context, array $blocks = array())
    {
        // line 55
        echo "            <section class =\"systeme_de_recommandation\">
                <p>Syst&egrave;me de recommandation !</p>
            </section>
        ";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "    <p class=\"frontfooter\">
        <a href=\"#\">Qui sommes nous </a> | <a href=\"#\">conditions d'utilisation</a> | <a href=\"#\">partenaires</a> | <a href=\"#\">contact</a>
        <br/>&reg;Copyright OpenEcoles 2013 tout droits r&eacute;serv&eacute;s
    </p>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesOpenAnnoncesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  97 => 33,  20 => 1,  114 => 47,  81 => 24,  124 => 72,  113 => 44,  58 => 18,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 44,  110 => 31,  23 => 4,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 59,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 54,  102 => 41,  71 => 17,  67 => 20,  63 => 14,  59 => 18,  38 => 8,  89 => 32,  85 => 28,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  78 => 25,  46 => 14,  27 => 5,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 55,  136 => 39,  121 => 45,  105 => 42,  91 => 27,  62 => 19,  24 => 7,  156 => 45,  152 => 37,  140 => 30,  137 => 29,  132 => 19,  126 => 54,  119 => 46,  117 => 45,  104 => 38,  100 => 27,  94 => 32,  90 => 34,  88 => 28,  84 => 31,  77 => 27,  68 => 22,  61 => 17,  53 => 15,  49 => 14,  25 => 1,  31 => 4,  28 => 4,  19 => 2,  79 => 26,  72 => 21,  69 => 21,  47 => 8,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 46,  145 => 64,  139 => 45,  131 => 38,  123 => 35,  120 => 38,  115 => 43,  111 => 37,  108 => 42,  101 => 35,  98 => 32,  96 => 38,  83 => 26,  74 => 21,  66 => 21,  55 => 12,  52 => 11,  50 => 10,  43 => 12,  41 => 5,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 33,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 43,  109 => 67,  106 => 37,  103 => 28,  99 => 27,  95 => 33,  92 => 33,  86 => 25,  82 => 29,  80 => 31,  73 => 23,  64 => 19,  60 => 6,  57 => 12,  54 => 16,  51 => 10,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 4,  33 => 3,  30 => 2,);
    }
}
