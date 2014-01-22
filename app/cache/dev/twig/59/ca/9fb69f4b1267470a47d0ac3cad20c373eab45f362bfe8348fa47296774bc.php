<?php

/* OpenEcolesFrontOfficeBundle:Accueil:index.html.twig */
class __TwigTemplate_59ca9fb69f4b1267470a47d0ac3cad20c373eab45f362bfe8348fa47296774bc extends Twig_Template
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
            echo "                <p class=\"nom_utilisateur\">Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "<a href=\"#\" class=\"déploiment\"> + </a> </p>
                <p><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></p>
            ";
        } else {
            // line 25
            echo "                <p><a href=\"";
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
            <p style=\"text-align: center\">Bienvenue sur le site Open Ecole - Contenu du site (aggrandissement automatique afin d'eviter les 300px-450px etc etc</p>
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
        echo "        <section class =\"systeme_de_recommandation\">
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
        return "OpenEcolesFrontOfficeBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  145 => 64,  138 => 55,  135 => 54,  128 => 59,  126 => 54,  113 => 44,  104 => 38,  97 => 33,  94 => 32,  88 => 28,  83 => 26,  78 => 25,  73 => 23,  68 => 22,  66 => 21,  55 => 12,  52 => 11,  47 => 8,  41 => 5,  36 => 4,  33 => 3,);
    }
}
