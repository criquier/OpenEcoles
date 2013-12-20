<?php

/* OpenEcolesTutorialBundle:Chapitre:visualiserChapitre.html.twig */
class __TwigTemplate_7601ac4cae57ee9485d622080a36e257289915ef046a2c1f8aeed6af2adf53f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/css/tutoriel.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ((null === $this->getAttribute($this->getAttribute($this->getContext($context, "unitetext"), "getChapitre"), "getParent"))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_ajout_chapitre", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "unitetext"), "getChapitre"), "getId"))), "html", null, true);
            echo "\" >Ajouter un chapitre</a><br/>
    ";
        }
        // line 12
        echo "    ";
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "unitetext"), "getChapitre"), "getTutoriel"), "getAuteur", array(), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_modifier_chapitre", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "unitetext"), "getChapitre"), "getId"))), "html", null, true);
            echo "\">Modifier</a><br/>
    ";
        }
        // line 15
        echo "    <article>
        <header>
            <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "unitetext"), "getChapitre"), "getTitre"), "html", null, true);
        echo "</h3>
        </header>
        <section>
             <section>
                 ";
        // line 21
        echo $this->getAttribute($this->getContext($context, "unitetext"), "getContenu");
        echo "
             </section>
             <section>
                ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesTutorialBundle:Chapitre:affichageChapitreSection", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "unitetext"), "getChapitre"), "getId"))));
        echo "
             </section>
        </section>
        <footer>
            <br/>
            <a href=\"\">Précédent</a>    <a href=\"\">Suivant</a>
        </footer>
    </article>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Chapitre:visualiserChapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  74 => 21,  67 => 17,  63 => 15,  57 => 13,  54 => 12,  48 => 10,  45 => 9,  42 => 8,  36 => 5,  32 => 4,  29 => 3,);
    }
}
