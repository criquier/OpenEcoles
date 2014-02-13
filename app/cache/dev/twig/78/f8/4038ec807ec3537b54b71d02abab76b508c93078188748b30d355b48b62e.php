<?php

/* OpenEcolesUserBundle:Message:visualiserMessages.html.twig */
class __TwigTemplate_78f84038ec807ec3537b54b71d02abab76b508c93078188748b30d355b48b62e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesuser/css/user.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        // line 9
        echo "    <h4>Vos messages</h4>
    <div class=\"bulleDest\">bjr <div class=\"arrow_inner_dest\"></div></div>
    <div class=\"bulleExp\">bjt ca va<div class=\"arrow_inner_exp\"></div></div>
    <div class=\"bulleDest\">oui et toi? <div class=\"arrow_inner_dest\"></div></div>
    <div class=\"bulleExp\">ca va<div class=\"arrow_inner_exp\"></div></div>

    ";
        // line 16
        echo "
    <section class=\"conversations\" >
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <article class=\"conversation\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_conversation_messsage", array("idauteur" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "iddestinataire" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "auteur"), "id"))), "html", null, true);
            // line 21
            echo "\">
                    <span>
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "auteur"), "username"), "html", null, true);
            echo "
                        ";
            // line 24
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "contenu"), 50), "html", null, true);
            echo "
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "date"), "d/m/Y H:i:s"), "html", null, true);
            echo "
                    </span>
                </a>
            </article>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <p>Votre boite de reception est vide</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </section>
    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(\"#detailmessage\").click(function(){
            \$.ajax({
                type:\"POST\",
            ";
        // line 43
        echo "                data:{
                    //'idauteur':";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "

                },
                success:function(data){
                    \$('sel').load('visualiserConversation.html.twig');//,{ id:50, nom: 'durand'});
                },
                error: function() {
                    alert('La requête n\\'a pas abouti'); }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesUserBundle:Message:visualiserMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  124 => 72,  113 => 39,  58 => 12,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 44,  110 => 31,  23 => 3,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 47,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 20,  63 => 15,  59 => 18,  38 => 5,  89 => 30,  85 => 28,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 26,  78 => 21,  46 => 8,  27 => 4,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 45,  105 => 30,  91 => 30,  62 => 20,  24 => 2,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 48,  126 => 73,  119 => 42,  117 => 72,  104 => 36,  100 => 33,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 24,  68 => 14,  61 => 18,  53 => 12,  49 => 9,  25 => 4,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 17,  69 => 21,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 38,  123 => 35,  120 => 38,  115 => 43,  111 => 37,  108 => 35,  101 => 35,  98 => 32,  96 => 38,  83 => 25,  74 => 21,  66 => 21,  55 => 16,  52 => 21,  50 => 10,  43 => 7,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 42,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 36,  109 => 67,  106 => 37,  103 => 36,  99 => 27,  95 => 33,  92 => 28,  86 => 25,  82 => 32,  80 => 31,  73 => 23,  64 => 19,  60 => 6,  57 => 12,  54 => 13,  51 => 12,  48 => 9,  45 => 8,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
