<?php

/* OpenEcolesTutorialBundle:Categorie:index.html.twig */
class __TwigTemplate_24d8f69f60a3826aab4ccbf66925c3e2ace2867fd292bcdf75e43d22b873f430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesTutorialBundle:Tutoriel:backIndex.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenEcolesTutorialBundle:Tutoriel:backIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
    <a href=\"#\" >Ajouter une cat&eacute;gorie</a>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 7
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "categorie"), "getNom"), "html", null, true);
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/croixrouge.gif"), "html", null, true);
            echo "\" alt=\"Supprimer\" title=\"Supprimer\" /></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "        Ya pas de categories pour l'instant
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  50 => 9,  40 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
