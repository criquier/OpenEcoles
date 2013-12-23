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
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" style=\"color:white\"class=\"déploiment\">se déconnecter</a>
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
        // line 31
        $this->displayBlock('section', $context, $blocks);
        // line 38
        echo "    </section>
    ";
        // line 39
        $this->displayBlock('recommandation', $context, $blocks);
        // line 44
        echo "</section>

<aside>
</aside>
";
    }

    // line 31
    public function block_section($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contenus"));
        foreach ($context['_seq'] as $context["_key"] => $context["contenu"]) {
            // line 33
            echo "                <section>
                    ";
            // line 34
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller($this->getAttribute($this->getContext($context, "contenu"), "action", array(), "array")));
            echo "
                </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
    }

    // line 39
    public function block_recommandation($context, array $blocks = array())
    {
        // line 40
        echo "        <section id=\"recommandation\">
                Syst&egrave;me de recommandation
        </section>
    ";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
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

    // line 61
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
        return array (  154 => 61,  142 => 51,  139 => 50,  132 => 40,  129 => 39,  125 => 37,  116 => 34,  113 => 33,  108 => 32,  105 => 31,  97 => 44,  95 => 39,  92 => 38,  90 => 31,  85 => 29,  78 => 25,  74 => 23,  71 => 22,  62 => 18,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
