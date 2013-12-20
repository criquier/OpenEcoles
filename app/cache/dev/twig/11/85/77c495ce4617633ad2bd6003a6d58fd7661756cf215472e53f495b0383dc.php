<?php

/* OpenEcolesTutorialBundle:Tutoriel:visualiserTutorielsBack.html.twig */
class __TwigTemplate_118577c495ce4617633ad2bd6003a6d58fd7661756cf215472e53f495b0383dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesTutorialBundle:Tutoriel:backIndex.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/css/tutoriel.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/datatables/jquery.dataTables.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<article >
    <table id=\"tutoriels\">
        <thead>
            <tr>
                <td>Titre</td>
                <td>Auteur</td>
                <td>Valid&eacute;</td>
            </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tutoriels"));
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getTitre"), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            if ((null === $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"))) {
                // line 24
                echo "                            Inconnu
                        ";
            } else {
                // line 26
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"), "html", null, true);
                echo "
                        ";
            }
            // line 28
            echo "                    </td>
                    <td>
                        ";
            // line 30
            if ($this->getAttribute($this->getContext($context, "tutoriel"), "getValide")) {
                // line 31
                echo "                            validé
                        ";
            } else {
                // line 33
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_valider", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId", array(), "method"))), "html", null, true);
                echo "\" >valider</a>
                        ";
            }
            // line 35
            echo "                    </td>
                    <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_supprimer", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId", array(), "method"))), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>

    </table>
</article>
";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(function(){
        \$(\"#tutoriels\").dataTable();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:visualiserTutorielsBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  128 => 47,  124 => 46,  121 => 45,  113 => 39,  104 => 36,  101 => 35,  95 => 33,  91 => 31,  89 => 30,  85 => 28,  79 => 26,  75 => 24,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
