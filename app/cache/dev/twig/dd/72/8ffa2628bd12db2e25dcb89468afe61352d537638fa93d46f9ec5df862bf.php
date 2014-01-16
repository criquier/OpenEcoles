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
            'javascripts' => array($this, 'block_javascripts'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" style=\"color:white\"class=\"déploiment\">se déconnecter</a>
    </section>

";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "<section style=\"margin-top: 1%;\">
    <nav>
        ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationHorizontale"));
        echo "
    </nav>
    <section id=\"content\">
        <nav id=\"menu\">
            ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationVerticale"));
        echo "
        </nav>
        ";
        // line 35
        $this->displayBlock('section', $context, $blocks);
        // line 42
        echo "    </section>
    ";
        // line 43
        $this->displayBlock('recommandation', $context, $blocks);
        // line 48
        echo "

    <!--

    <div class=\"conteneur\">

        <nav>
            ";
        // line 55
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationHorizontale"));
        echo "
        </nav>

        <section class =\"espace_personnel\">
            <nav id=\"menu\">
                ";
        // line 60
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationVerticale"));
        echo "
            </nav>
        </section>

        <section class =\"content\">
            <p style=\"text-align: center\">Bienvenue sur le site Open Ecole - Contenu du site (aggrandissement automatique afin d'eviter les 300px-450px etc etc</p>
        </section>

        ";
        // line 73
        echo "
    </div>
    -->


            ";
    }

    // line 35
    public function block_section($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contenus"));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 37
            echo "                <section>
                    ";
            // line 39
            echo "                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        ";
    }

    // line 43
    public function block_recommandation($context, array $blocks = array())
    {
        // line 44
        echo "        <section id=\"recommandation\">
                Syst&egrave;me de recommandation
        </section>
    ";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
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
        return array (  175 => 81,  172 => 80,  165 => 44,  162 => 43,  158 => 41,  151 => 39,  148 => 37,  143 => 36,  140 => 35,  131 => 73,  120 => 60,  112 => 55,  103 => 48,  101 => 43,  98 => 42,  96 => 35,  91 => 33,  84 => 29,  80 => 27,  77 => 26,  67 => 21,  56 => 12,  53 => 11,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
