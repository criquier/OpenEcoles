<?php

/* OpenEcolesFrontOfficeBundle:Accueil:navigation_verticale.html.twig */
class __TwigTemplate_f35852e6b1dd868d2691757fdea2167318f00bb24d03c3b5e4f9d0e54cd3d35d extends Twig_Template
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
        echo "<ul class=\"nav nav-pills nav-stacked\">
    <li class=\"titreMenuVertical\">Mon espace personnel</li>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuV"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "menu"), "lien"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "nom"), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getContext($context, "menu"), "badge") == true)) {
                echo "<badge id=\"messageNonConsulte\" class=\"badge\">0</badge>";
            }
            echo "</a></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "        Pas de données
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "OpenEcolesFrontOfficeBundle:Accueil:navigation_verticale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  186 => 99,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  128 => 85,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  89 => 20,  85 => 25,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  105 => 40,  91 => 27,  62 => 18,  24 => 4,  156 => 66,  152 => 37,  140 => 34,  137 => 33,  132 => 51,  126 => 9,  119 => 42,  117 => 72,  104 => 41,  100 => 60,  94 => 38,  90 => 34,  88 => 6,  84 => 31,  77 => 27,  68 => 14,  61 => 13,  53 => 11,  49 => 8,  25 => 3,  31 => 4,  28 => 4,  19 => 1,  79 => 26,  72 => 23,  69 => 25,  47 => 9,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 40,  96 => 38,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 8,  43 => 6,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 58,  144 => 33,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 67,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 33,  86 => 30,  82 => 29,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 5,  42 => 6,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
