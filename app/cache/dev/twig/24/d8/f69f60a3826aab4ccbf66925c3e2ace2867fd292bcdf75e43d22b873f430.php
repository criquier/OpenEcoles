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
        return array (  23 => 3,  186 => 99,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  128 => 85,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  89 => 20,  85 => 25,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  78 => 21,  46 => 7,  27 => 4,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  105 => 40,  91 => 27,  62 => 16,  24 => 4,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 51,  126 => 9,  119 => 42,  117 => 72,  104 => 41,  100 => 60,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 27,  68 => 14,  61 => 13,  53 => 11,  49 => 8,  25 => 3,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 17,  69 => 16,  47 => 9,  40 => 7,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 40,  96 => 38,  83 => 25,  74 => 14,  66 => 15,  55 => 12,  52 => 21,  50 => 9,  43 => 6,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 67,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 30,  82 => 29,  80 => 19,  73 => 19,  64 => 19,  60 => 6,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 5,  42 => 6,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
