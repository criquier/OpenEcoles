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
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"))) {
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
        return array (  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 34,  110 => 31,  23 => 2,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 43,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 17,  63 => 15,  59 => 13,  38 => 5,  89 => 20,  85 => 26,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 26,  78 => 21,  46 => 7,  27 => 3,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 46,  105 => 30,  91 => 27,  62 => 16,  24 => 2,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 51,  126 => 9,  119 => 42,  117 => 72,  104 => 41,  100 => 33,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 20,  68 => 14,  61 => 14,  53 => 12,  49 => 11,  25 => 3,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 38,  123 => 35,  120 => 38,  115 => 33,  111 => 37,  108 => 35,  101 => 32,  98 => 40,  96 => 38,  83 => 25,  74 => 21,  66 => 15,  55 => 12,  52 => 21,  50 => 13,  43 => 6,  41 => 9,  35 => 6,  32 => 12,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 42,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 36,  109 => 67,  106 => 36,  103 => 34,  99 => 27,  95 => 28,  92 => 28,  86 => 25,  82 => 21,  80 => 24,  73 => 19,  64 => 18,  60 => 6,  57 => 12,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 6,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}
