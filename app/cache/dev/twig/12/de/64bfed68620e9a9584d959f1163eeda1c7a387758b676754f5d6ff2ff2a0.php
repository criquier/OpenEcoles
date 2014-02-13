<?php

/* OpenEcolesTutorialBundle:Tutoriel:topTutoriel.html.twig */
class __TwigTemplate_12de64bfed68620e9a9584d959f1163eeda1c7a387758b676754f5d6ff2ff2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"diaporama\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tutoriels"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 3
            echo "        <article><header>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getTitre", array(), "method"), "html", null, true);
            echo "</header>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"), "html", null, true);
            echo "</article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 5
            echo "        il n'y a pas de tutoriel en ce moment qui soit populaire
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:topTutoriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 34,  110 => 31,  23 => 2,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 37,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 17,  63 => 15,  59 => 15,  38 => 5,  89 => 20,  85 => 25,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 26,  78 => 21,  46 => 7,  27 => 3,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 46,  105 => 30,  91 => 25,  62 => 16,  24 => 2,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 51,  126 => 9,  119 => 42,  117 => 72,  104 => 41,  100 => 60,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 20,  68 => 14,  61 => 14,  53 => 12,  49 => 11,  25 => 3,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 18,  69 => 17,  47 => 9,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 38,  123 => 35,  120 => 40,  115 => 33,  111 => 37,  108 => 36,  101 => 32,  98 => 40,  96 => 38,  83 => 25,  74 => 21,  66 => 15,  55 => 12,  52 => 21,  50 => 9,  43 => 6,  41 => 9,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 42,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 41,  112 => 32,  109 => 67,  106 => 36,  103 => 29,  99 => 27,  95 => 28,  92 => 33,  86 => 23,  82 => 21,  80 => 24,  73 => 19,  64 => 19,  60 => 6,  57 => 12,  54 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 8,  39 => 5,  36 => 5,  33 => 4,  30 => 3,);
    }
}
