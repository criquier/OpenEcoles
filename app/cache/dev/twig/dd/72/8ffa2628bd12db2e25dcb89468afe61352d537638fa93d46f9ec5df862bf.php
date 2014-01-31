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
        return array (  186 => 99,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  143 => 36,  140 => 34,  137 => 33,  128 => 85,  117 => 72,  109 => 67,  100 => 60,  98 => 40,  94 => 38,  92 => 33,  86 => 30,  79 => 26,  75 => 24,  72 => 23,  62 => 18,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
