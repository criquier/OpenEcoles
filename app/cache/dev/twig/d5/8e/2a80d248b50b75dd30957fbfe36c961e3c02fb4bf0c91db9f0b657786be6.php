<?php

/* OpenEcolesTutorialBundle:Tutoriel:index.html.twig */
class __TwigTemplate_d58e2a80d248b50b75dd30957fbfe36c961e3c02fb4bf0c91db9f0b657786be6 extends Twig_Template
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
            echo twig_escape_filter($this->env, (isset($context["message_info"]) ? $context["message_info"] : $this->getContext($context, "message_info")), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "

    <section style=\"vertical-align: top;display:inline-block;width:85%\">
        ";
        // line 16
        if ((!(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")))) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_ajout");
            echo "\" title=\"Ajouter un cours\">Ajouter un cours</a>
        ";
        }
        // line 19
        echo "        <section class=\"defilement\">
            <section class=\"anythingSlider\">
                <section class=\"wrapper\">
                    <ul>
                        <li> Palop </li>
                        <li> dsgfdgf </li>
                        <li> Bonjour </li>
                        <li> Merci </li>
                    </ul>
                    <section class=\"line-bg\"></section>
                </section>

            </section>
            Element qui defile + recommandation
        </section>
        <section>
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                <article class=\"category\">
                    <header>
                        <h3>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), "html", null, true);
            echo "</h3>
                    </header>
                    ";
            // line 40
            $context["count"] = 2;
            // line 41
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tutoriels"]) ? $context["tutoriels"] : $this->getContext($context, "tutoriels")), $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "nom"), array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
                // line 42
                echo "                        <article class=\"tutoriel\">
                            <article class=\"tutoriel_illustration\">
                                ";
                // line 44
                if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 2)) {
                    // line 45
                    echo "                                    <img class=\"illustration_min\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/dossierorang.jpg"), "html", null, true);
                    echo "\" alt=\"dossier\"/>
                                    ";
                    // line 46
                    $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - 1);
                    // line 47
                    echo "                                ";
                } else {
                    // line 48
                    echo "                                    ";
                    if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 1)) {
                        // line 49
                        echo "                                        <img class=\"illustration_min\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/dossierbleu.jpg"), "html", null, true);
                        echo "\" alt=\"dossier\"/>
                                       ";
                        // line 50
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - 1);
                        // line 51
                        echo "                                    ";
                    } else {
                        // line 52
                        echo "                                        ";
                        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 0)) {
                            // line 53
                            echo "                                            <img class=\"illustration_min\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/dossiervert.jpg"), "html", null, true);
                            echo "\" alt=\"dossier\"/>
                                            ";
                            // line 54
                            $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - 1);
                            // line 55
                            echo "                                        ";
                        }
                        // line 56
                        echo "                                    ";
                    }
                    // line 57
                    echo "                               ";
                }
                // line 58
                echo "                            </article>
                            <article class=\"tutoriel_info\">
                                <a  href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_visualiser", array("id" => $this->getAttribute((isset($context["tutoriel"]) ? $context["tutoriel"] : $this->getContext($context, "tutoriel")), "getId"))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tutoriel"]) ? $context["tutoriel"] : $this->getContext($context, "tutoriel")), "getTitre"), "html", null, true);
                echo "</a>
                                ";
                // line 61
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") == $this->getAttribute((isset($context["tutoriel"]) ? $context["tutoriel"] : $this->getContext($context, "tutoriel")), "getAuteur", array(), "method"))) {
                    // line 62
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_modifier", array("id" => $this->getAttribute((isset($context["tutoriel"]) ? $context["tutoriel"] : $this->getContext($context, "tutoriel")), "getId"))), "html", null, true);
                    echo "\"><img class=\"modifierCrayon\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/ptitcrayon.png"), "html", null, true);
                    echo "\" alt=\"modifier\" title=\"modifier\" /></a><br/>
                                ";
                }
                // line 64
                echo "                                ";
                if ((null === $this->getAttribute((isset($context["tutoriel"]) ? $context["tutoriel"] : $this->getContext($context, "tutoriel")), "getAuteur", array(), "method"))) {
                    // line 65
                    echo "                                    Personne Inconnu
                                ";
                } else {
                    // line 67
                    echo "                                   ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tutoriel"]) ? $context["tutoriel"] : $this->getContext($context, "tutoriel")), "getAuteur", array(), "method"), "html", null, true);
                    echo "
                                ";
                }
                // line 69
                echo "                            </article>
                        </article>
                        ";
                // line 71
                if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) >= 0)) {
                    // line 72
                    echo "                            <div class=\"trait\"></div>
                        ";
                }
                // line 74
                echo "                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 75
                echo "                        Pas de tutoriel dans cette catégorie
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    <footer class=\"afficher_plus\">
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_afficher_plus", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "getId"))), "html", null, true);
            echo "\" >afficher plus >></a>
                    </footer>
                </article>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "                Pas de catégorie
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </section>
    </section>
";
    }

    // line 88
    public function block_recommandation($context, array $blocks = array())
    {
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
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
        return array (  248 => 92,  245 => 91,  240 => 88,  234 => 84,  227 => 82,  218 => 78,  215 => 77,  208 => 75,  203 => 74,  199 => 72,  197 => 71,  193 => 69,  187 => 67,  183 => 65,  180 => 64,  172 => 62,  170 => 61,  164 => 60,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  149 => 54,  144 => 53,  141 => 52,  138 => 51,  136 => 50,  131 => 49,  128 => 48,  125 => 47,  123 => 46,  118 => 45,  116 => 44,  112 => 42,  106 => 41,  104 => 40,  99 => 38,  95 => 36,  90 => 35,  72 => 19,  66 => 17,  64 => 16,  59 => 13,  53 => 11,  51 => 10,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
