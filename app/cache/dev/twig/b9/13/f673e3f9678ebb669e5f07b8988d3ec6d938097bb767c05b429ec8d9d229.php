<?php

/* OpenEcolesUserBundle:Message:visualiserConversation.html.twig */
class __TwigTemplate_b913f673e3f9678ebb669e5f07b8988d3ec6d938097bb767c05b429ec8d9d229 extends Twig_Template
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
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 9
        echo "    <section id=\"conversation\">

    </section>
    ";
        // line 13
        echo "    <input id=\"message\" type=\"text\"  >
    <input id=\"test\" type=\"text\"  >

";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        // Fonction qui permet de poster un message
        // Cette fonction utilise ajax
        function postMessage() {
            // On lance la requête ajax
            // type: POST > nous envoyons le message
            // On encode le message pour faire passer les caractères spéciaux comme +
            var message = encodeURIComponent(\$(\"#message\").val());
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_envoie_messsage", array("idauteur" => $this->getContext($context, "idauteur"), "iddestinataire" => $this->getContext($context, "iddestinataire"))), "html", null, true);
        // line 32
        echo "\",
                data:{
                    message:\$(\"#message\").val()
                },
                success: function(data){
                    // Si la réponse est true, tout s'est bien passé,
                    // Si non, on a une erreur et on l'affiche

                        // On vide la zone de texte
                        \$(\"#message\").val('');
                        \$(\"#test\").val(data[\"message\"]);
                        // \$(\"#responsePost\").slideUp(\"slow\").html('');

                    // \$(\"#responsePost\").html(msg).slideDown(\"slow\");
                    // on resélectionne la zone de texte, en cas d'utilisation du bouton \"Envoyer\"
                        \$(\"#message\").focus();
                },
                error: function(msg){
                    // On alerte d'une erreur
                    alert('Erreur');
                }
            });
        }
        //alert('je suis dans le block');
        \$(\"#message\").keyup(function(e) {
            if(e.keyCode == 13) { // KeyCode de la touche entrée
               {
                  // on post le message car l'utilisarteur a appuyer sur la touche entrée
                  // alert('vous avez appuyé sur entrée');
                    postMessage();
               }
           }
        });

        // fonction qui permet de reactuliser les chat pour voir les derniers messages reçus
        var reloadTime = 1000;
        var scrollBar = false;
        function getMessages() {

            // On lance la requête ajax
            \$.getJSON(\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_consulte_messsage", array("idauteur" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "iddestinataire" => $this->getContext($context, "iddestinataire"))), "html", null, true);
        // line 73
        echo "\",
             function(data) {
                 \$(\"#conversation\").contents('');
                 \$(\"#conversation\").html(data['messages']);
            });
        }
        // Au chargement de la page, on effectue cette fonction
        \$(document).ready(function() {

            //if(document.getElementById('conversation')) {
                // actualisation des messages
                window.setInterval(getMessages, reloadTime);
                // on sélectionne la zone de texte
                 \$(\"#message\").focus();
           // }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesUserBundle:Message:visualiserConversation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 72,  113 => 39,  58 => 12,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 34,  110 => 31,  23 => 3,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 47,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 17,  63 => 15,  59 => 13,  38 => 5,  89 => 30,  85 => 28,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 26,  78 => 21,  46 => 8,  27 => 4,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 45,  105 => 30,  91 => 31,  62 => 20,  24 => 2,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 48,  126 => 73,  119 => 42,  117 => 72,  104 => 36,  100 => 33,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 20,  68 => 14,  61 => 18,  53 => 12,  49 => 9,  25 => 4,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 17,  69 => 22,  47 => 8,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 38,  123 => 35,  120 => 38,  115 => 33,  111 => 37,  108 => 35,  101 => 35,  98 => 40,  96 => 38,  83 => 25,  74 => 21,  66 => 21,  55 => 14,  52 => 21,  50 => 10,  43 => 7,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 42,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 36,  109 => 67,  106 => 36,  103 => 34,  99 => 27,  95 => 33,  92 => 28,  86 => 25,  82 => 32,  80 => 31,  73 => 23,  64 => 19,  60 => 6,  57 => 12,  54 => 13,  51 => 12,  48 => 9,  45 => 8,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
