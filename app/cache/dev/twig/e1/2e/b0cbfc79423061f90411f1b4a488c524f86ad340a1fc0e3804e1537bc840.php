<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e12eb0cbfc79423061f90411f1b4a488c524f86ad340a1fc0e3804e1537bc840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => $this->getContext($context, "token"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  155 => 47,  127 => 35,  363 => 153,  357 => 123,  353 => 149,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  212 => 78,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  172 => 57,  165 => 60,  134 => 39,  76 => 17,  70 => 15,  65 => 17,  148 => 65,  97 => 33,  20 => 1,  114 => 47,  81 => 23,  124 => 72,  113 => 48,  58 => 14,  239 => 79,  236 => 78,  226 => 84,  205 => 63,  202 => 77,  195 => 60,  190 => 76,  184 => 63,  180 => 54,  174 => 65,  170 => 56,  167 => 49,  118 => 49,  110 => 31,  23 => 2,  186 => 57,  178 => 59,  175 => 58,  153 => 56,  150 => 55,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 67,  177 => 65,  169 => 60,  128 => 59,  107 => 36,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 69,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 47,  143 => 51,  135 => 54,  102 => 24,  71 => 17,  67 => 14,  63 => 18,  59 => 16,  38 => 7,  89 => 32,  85 => 24,  75 => 19,  56 => 9,  87 => 34,  21 => 2,  26 => 12,  93 => 29,  78 => 25,  46 => 13,  27 => 3,  44 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 54,  163 => 53,  158 => 62,  151 => 59,  142 => 59,  138 => 55,  136 => 48,  121 => 50,  105 => 25,  91 => 33,  62 => 19,  24 => 7,  156 => 62,  152 => 46,  140 => 58,  137 => 29,  132 => 19,  126 => 54,  119 => 40,  117 => 39,  104 => 32,  100 => 39,  94 => 21,  90 => 20,  88 => 25,  84 => 24,  77 => 27,  68 => 22,  61 => 12,  53 => 12,  49 => 14,  25 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 8,  40 => 11,  37 => 5,  22 => 3,  246 => 96,  157 => 46,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 43,  111 => 47,  108 => 42,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 21,  66 => 21,  55 => 9,  52 => 12,  50 => 13,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 75,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 36,  147 => 43,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 37,  103 => 28,  99 => 23,  95 => 33,  92 => 27,  86 => 25,  82 => 19,  80 => 27,  73 => 16,  64 => 23,  60 => 6,  57 => 12,  54 => 16,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
