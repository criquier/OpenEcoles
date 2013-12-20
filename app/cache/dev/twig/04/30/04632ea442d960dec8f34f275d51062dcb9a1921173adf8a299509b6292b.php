<?php

/* OpenEcolesTutorialBundle:Tutoriel:visualiserTutoriel.html.twig */
class __TwigTemplate_043004632ea442d960dec8f34f275d51062dcb9a1921173adf8a299509b6292b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'section' => array($this, 'block_section'),
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/css/tutoriel.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/rating/jquery.rating.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 9
    public function block_section($context, array $blocks = array())
    {
        // line 10
        echo "    <article class=\" visualisationTutoriel\">
        <header>
            <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getTitre"), "html", null, true);
        echo "
                ";
        // line 13
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur"))) {
            // line 14
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_modifier", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))), "html", null, true);
            echo "\"><img class=\"crayonModifier\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/images/ptitcrayon.png"), "html", null, true);
            echo "\" alt=\"Modifier\" title=\"Modifier\" /></a>
                ";
        }
        // line 16
        echo "            </h3>
            ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesTutorialBundle:Note:visualiserMoyenne", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))));
        echo "
        </header>
        <section>
            <section>
                ";
        // line 21
        echo $this->getAttribute($this->getContext($context, "tutoriel"), "getDescription");
        echo "
            </section>
            <section>
                <header>
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_ajout_section", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))), "html", null, true);
        echo "\" >ajouter une section</a>
                </header>
                ";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesTutorialBundle:Chapitre:accueil", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))));
        echo "
            </section>
        </section>
    </article>
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/rating/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/rating/jquery.rating.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/rating/jquery.MetaData.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/rating/jquery.rating.pack.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\"#voter\").click(function(){
            \$.ajax({
                type:\"POST\",
                url: \"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_noter_tutoriel", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))), "html", null, true);
        echo "\",
                data:{
                    note:\$(\"input:checked\").val()
                },
                success:function(data){
                    \$(\"#moyenne\").empty();
                    \$(\"#moyenne\").text(\"Moyenne :\"+data[\"moyenne\"]);

                    var div = \$(\"#message\");
                    div.addClass(\"alert alert-success\");
                    div.text(data[\"message\"]);
                    div.fadeIn(5000);
                    div.fadeOut(5000);
                },
                statusCode: {
                    404: function(data) {
                        var div = \$(\"#message\");
                        div.addClass(\"alert alert-danger\");
                        div.text(\"Erreur, votre note n'a pu être prise en compte. Réessayer dans quelques instants.\");
                        div.fadeIn( 5000 );
                        div.fadeOut(5000);
                    }
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:visualiserTutoriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  103 => 34,  100 => 33,  91 => 27,  86 => 25,  79 => 21,  72 => 17,  69 => 16,  61 => 14,  59 => 13,  55 => 12,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
