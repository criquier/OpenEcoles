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
        echo "    <section class=\"research\">
        <div class=\"input-group\">
            <span class=\"input-group-addon\" style='color:white;background-color: rgb(122,183,23)'>search:</span>
            <input type=\"text\" class=\"form-control\">
            <input type=\"button\" value=\"recherche\" class=\"button-recherche\"/>
        </div>

    </section>
    <section class=\"utilisateur\">
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo " <a href=\"#\" class=\"déploiment\">+</a>
    </section>
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<section style=\"margin-top: 1%;\">
    <nav>
        ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationHorizontale"));
        echo "
    </nav>
    <section id=\"content\">
        <nav id=\"menu\">
            ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesFrontOfficeBundle:Accueil:navigationVerticale"));
        echo "

        </nav>
        ";
        // line 32
        $this->displayBlock('section', $context, $blocks);
        // line 34
        echo "    </section>
    ";
        // line 35
        $this->displayBlock('recommandation', $context, $blocks);
        // line 40
        echo "</section>

<aside>
</aside>
";
    }

    // line 32
    public function block_section($context, array $blocks = array())
    {
        // line 33
        echo "        ";
    }

    // line 35
    public function block_recommandation($context, array $blocks = array())
    {
        // line 36
        echo "        <section id=\"recommandation\">
                Syst&egrave;me de recommandation
        </section>
    ";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "<section class=\"frontfooter\">
    <article>
        Qui sommes nous? | conditions d'utiiations | partenaires | contact
    </article>
    <article>
        &reg;Copyright OpenEcoles 2013 tout droits r&eacute;serv&eacute;s
    </article>
</section>
";
    }

    // line 57
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
        return array (  124 => 47,  121 => 46,  114 => 36,  111 => 35,  107 => 33,  96 => 40,  94 => 35,  91 => 34,  89 => 32,  83 => 29,  76 => 25,  69 => 22,  62 => 18,  42 => 5,  37 => 4,  248 => 92,  245 => 91,  240 => 88,  234 => 84,  227 => 82,  218 => 78,  215 => 77,  208 => 75,  203 => 74,  199 => 72,  197 => 71,  193 => 69,  187 => 67,  183 => 65,  180 => 64,  172 => 62,  170 => 61,  164 => 60,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  149 => 54,  144 => 53,  141 => 52,  138 => 51,  136 => 57,  131 => 49,  128 => 48,  125 => 47,  123 => 46,  118 => 45,  116 => 44,  112 => 42,  106 => 41,  104 => 32,  99 => 38,  95 => 36,  90 => 35,  72 => 23,  66 => 17,  64 => 16,  59 => 13,  53 => 11,  51 => 9,  48 => 8,  45 => 8,  39 => 5,  34 => 3,  31 => 3,);
    }
}
