<?php

/* OpenEcolesOpenSeanceBundle:gestionOpenSeance:visualiserAll.html.twig */
class __TwigTemplate_551f5ae33bb5212472f02818f4563c3911e3fba52c0b270cc4de7df39b914e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenEcolesFrontOfficeBundle:Accueil:index.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesopenseance/css/openseance.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - OpenSeances
";
    }

    // line 14
    public function block_section($context, array $blocks = array())
    {
        // line 15
        echo "    voici l'ensemble des openSeances que nous avons sur le site.
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "openseances"));
        foreach ($context['_seq'] as $context["_key"] => $context["openseance"]) {
            // line 17
            echo "        <article class=\"openseanceResume\">
            <header>
                <section class=\"openseancetitre\">
                    <h3>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getTitre", array(), "method"), "html", null, true);
            echo "</h3>
                </section>
                <section class=\"openseanceduree\">
                    par ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getOrganisateur", array(), "method"), "html", null, true);
            echo " De ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getDateDebut", array(), "method"), "d-m-Y h:i"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getDateFin", array(), "method"), "d-m-Y h:i"), "html", null, true);
            echo "
                </section>
            </header>
            <footer>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_open_seance_detail", array("id" => $this->getAttribute($this->getContext($context, "openseance"), "getId", array(), "method"))), "html", null, true);
            echo "\">Detail</a>
            </footer>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['openseance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OpenEcolesOpenSeanceBundle:gestionOpenSeance:visualiserAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  76 => 23,  70 => 20,  65 => 17,  61 => 16,  58 => 15,  55 => 14,  48 => 10,  45 => 9,  38 => 5,  33 => 4,  30 => 3,);
    }
}
