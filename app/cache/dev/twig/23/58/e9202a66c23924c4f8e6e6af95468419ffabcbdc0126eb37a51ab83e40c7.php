<?php

/* OpenEcolesTutorialBundle:Tutoriel:backIndex.html.twig */
class __TwigTemplate_2358e9202a66c23924c4f8e6e6af95468419ffabcbdc0126eb37a51ab83e40c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesBackOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'section' => array($this, 'block_section'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenEcolesBackOfficeBundle:Accueil:index.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesbackoffice/css/style.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        // line 9
        echo "    <section id=\"menu\" >
        <nav class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_categorie");
        echo "\">Cat&eacute;gories</a></li>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_visualiser_tutoriels");
        echo "\">Tutoriels</a></li>
        </nav>
    </section>
    <section id=\"corps\">
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "     </section>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "            On est dans le coté obscur des tutoriels
        ";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:backIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  69 => 16,  64 => 19,  62 => 16,  55 => 12,  51 => 11,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
