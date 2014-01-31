<?php

/* OpenEcolesTutorialBundle:Tutoriel:index.html.twig */
class __TwigTemplate_cebc06e8a553e60ecc476ff17832af2033cb30a58de88ae13f043e3ab71eaaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'section' => array($this, 'block_section'),
            'recommandation' => array($this, 'block_recommandation'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\t\t";
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
        echo "
    ";
        // line 10
        if (array_key_exists("message_info", $context)) {
            // line 11
            echo "        <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message_info"), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "

        ";
        // line 15
        if ((!(null === $this->getAttribute($this->getContext($context, "app"), "user")))) {
            // line 16
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_ajout");
            echo "\" title=\"Ajouter un cours\">Ajouter un cours</a>
        ";
        }
        // line 18
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesTutorialBundle:Tutoriel:topTutoriel", array("param" => 1)));
        echo "
        <section>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "                <article class=\"category\">
                    <header>
                        <h3>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "nom"), "html", null, true);
            echo "</h3>
                    </header>
                    ";
            // line 25
            $context["count"] = 2;
            // line 26
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "tutoriels"), $this->getAttribute($this->getContext($context, "category"), "nom"), array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
                // line 27
                echo "                        <article class=\"tutoriel\">
                            <article class=\"tutoriel_illustration\">
                                ";
                // line 29
                if (($this->getContext($context, "count") == 2)) {
                    // line 30
                    echo "                                    <img class=\"illustration_min\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/dossierorang.jpg"), "html", null, true);
                    echo "\" alt=\"dossier\"/>
                                    ";
                    // line 31
                    $context["count"] = ($this->getContext($context, "count") - 1);
                    // line 32
                    echo "                                ";
                } else {
                    // line 33
                    echo "                                    ";
                    if (($this->getContext($context, "count") == 1)) {
                        // line 34
                        echo "                                        <img class=\"illustration_min\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/dossierbleu.jpg"), "html", null, true);
                        echo "\" alt=\"dossier\"/>
                                       ";
                        // line 35
                        $context["count"] = ($this->getContext($context, "count") - 1);
                        // line 36
                        echo "                                    ";
                    } else {
                        // line 37
                        echo "                                        ";
                        if (($this->getContext($context, "count") == 0)) {
                            // line 38
                            echo "                                            <img class=\"illustration_min\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/dossiervert.jpg"), "html", null, true);
                            echo "\" alt=\"dossier\"/>
                                            ";
                            // line 39
                            $context["count"] = ($this->getContext($context, "count") - 1);
                            // line 40
                            echo "                                        ";
                        }
                        // line 41
                        echo "                                    ";
                    }
                    // line 42
                    echo "                               ";
                }
                // line 43
                echo "                            </article>
                            <article class=\"tutoriel_info\">
                                <a  href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_visualiser", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getTitre"), "html", null, true);
                echo "</a>
                                ";
                // line 46
                if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"))) {
                    // line 47
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_modifier", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))), "html", null, true);
                    echo "\"><img class=\"modifierCrayon\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/ptitcrayon.png"), "html", null, true);
                    echo "\" alt=\"modifier\" title=\"modifier\" /></a><br/>
                                ";
                }
                // line 49
                echo "                                ";
                if ((null === $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"))) {
                    // line 50
                    echo "                                    Personne Inconnu
                                ";
                } else {
                    // line 52
                    echo "                                   ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"), "html", null, true);
                    echo "
                                ";
                }
                // line 54
                echo "                            </article>
                        </article>
                        ";
                // line 56
                if (($this->getContext($context, "count") >= 0)) {
                    // line 57
                    echo "                            <div class=\"trait\"></div>
                        ";
                }
                // line 59
                echo "                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 60
                echo "                        Pas de tutoriel dans cette catégorie
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    <footer class=\"afficher_plus\">
                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_afficher_plus", array("id" => $this->getAttribute($this->getContext($context, "category"), "getId"))), "html", null, true);
            echo "\" >afficher plus >></a>
                    </footer>
                </article>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                Pas de catégorie
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </section>
";
    }

    // line 72
    public function block_recommandation($context, array $blocks = array())
    {
        // line 73
        echo "    Nous vous recommandons les tutoriels suivants:
";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 77,  234 => 76,  229 => 73,  226 => 72,  221 => 69,  214 => 67,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  186 => 57,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  159 => 47,  157 => 46,  151 => 45,  147 => 43,  144 => 42,  141 => 41,  138 => 40,  136 => 39,  131 => 38,  128 => 37,  125 => 36,  123 => 35,  118 => 34,  115 => 33,  112 => 32,  110 => 31,  105 => 30,  103 => 29,  99 => 27,  93 => 26,  91 => 25,  86 => 23,  82 => 21,  77 => 20,  71 => 18,  65 => 16,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
