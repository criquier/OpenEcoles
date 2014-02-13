<?php

/* OpenEcolesOpenSeanceBundle:GestionOpenSeance:visualiserAll.html.twig */
class __TwigTemplate_824f87b4f98be2ae49f244d3e3fa4027b01bae3a9e9d9db6fc5819c5395eaa7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesopenseance/css/openseance.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - OpenSeances
";
    }

    // line 14
    public function block_section($context, array $blocks = array())
    {
        // line 15
        echo "    voici l'ensemble des openSeances que nous avons sur le site.
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "openseances"));
        foreach ($context['_seq'] as $context["_key"] => $context["openseance"]) {
            // line 17
            echo "        <article class=\"openseanceResume\">
            <header>
                <section class=\"openseancetitre\">
                    <h3>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getTitre", array(), "method"), "html", null, true);
            echo "</h3>
                </section>
                <section class=\"openseanceduree\">
                    par ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getOrganisateur", array(), "method"), "html", null, true);
            echo " De ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getDateDebut", array(), "method"), "d-m-Y h:i"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "openseance"), "getDateFin", array(), "method"), "d-m-Y h:i"), "html", null, true);
            echo "
                </section>
            </header>
            <footer>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_open_seance_detail", array("id" => $this->getAttribute($this->getContext($context, "openseance"), "getId", array(), "method"))), "html", null, true);
            echo "\">Detail</a>
            </footer>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['openseance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OpenEcolesOpenSeanceBundle:GestionOpenSeance:visualiserAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  70 => 20,  65 => 17,  148 => 65,  97 => 33,  20 => 1,  114 => 47,  81 => 24,  124 => 72,  113 => 44,  58 => 15,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 44,  110 => 31,  23 => 4,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 59,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 54,  102 => 41,  71 => 17,  67 => 20,  63 => 14,  59 => 18,  38 => 5,  89 => 32,  85 => 28,  75 => 24,  56 => 9,  87 => 27,  21 => 2,  26 => 12,  93 => 29,  78 => 25,  46 => 14,  27 => 5,  44 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 55,  136 => 39,  121 => 45,  105 => 42,  91 => 27,  62 => 19,  24 => 7,  156 => 45,  152 => 37,  140 => 30,  137 => 29,  132 => 19,  126 => 54,  119 => 46,  117 => 45,  104 => 38,  100 => 27,  94 => 32,  90 => 34,  88 => 34,  84 => 31,  77 => 27,  68 => 22,  61 => 16,  53 => 15,  49 => 14,  25 => 1,  31 => 4,  28 => 4,  19 => 2,  79 => 29,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 46,  145 => 64,  139 => 45,  131 => 38,  123 => 35,  120 => 38,  115 => 43,  111 => 37,  108 => 42,  101 => 35,  98 => 32,  96 => 38,  83 => 26,  74 => 21,  66 => 21,  55 => 14,  52 => 11,  50 => 13,  43 => 12,  41 => 8,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 33,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 43,  109 => 67,  106 => 37,  103 => 28,  99 => 27,  95 => 33,  92 => 33,  86 => 25,  82 => 30,  80 => 31,  73 => 23,  64 => 19,  60 => 6,  57 => 12,  54 => 16,  51 => 10,  48 => 10,  45 => 9,  42 => 9,  39 => 7,  36 => 4,  33 => 4,  30 => 3,);
    }
}
