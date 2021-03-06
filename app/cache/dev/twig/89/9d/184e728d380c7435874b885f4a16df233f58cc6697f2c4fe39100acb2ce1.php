<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_899d184e728d380c7435874b885f4a16df233f58cc6697f2c4fe39100acb2ce1 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 67,  185 => 66,  181 => 65,  172 => 64,  165 => 60,  134 => 54,  76 => 31,  148 => 65,  97 => 33,  81 => 23,  20 => 1,  70 => 19,  65 => 17,  129 => 73,  124 => 46,  113 => 48,  58 => 15,  239 => 79,  236 => 78,  226 => 84,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 49,  110 => 31,  23 => 2,  186 => 57,  178 => 66,  175 => 65,  153 => 56,  150 => 55,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 67,  177 => 65,  169 => 60,  128 => 59,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 54,  102 => 40,  71 => 18,  67 => 24,  63 => 15,  59 => 14,  38 => 6,  89 => 28,  85 => 32,  75 => 19,  56 => 12,  87 => 34,  21 => 2,  26 => 12,  93 => 29,  78 => 25,  46 => 13,  27 => 3,  44 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  151 => 59,  142 => 59,  138 => 55,  136 => 39,  121 => 50,  105 => 34,  91 => 27,  62 => 19,  24 => 7,  156 => 58,  152 => 37,  140 => 58,  137 => 29,  132 => 19,  126 => 54,  119 => 40,  117 => 45,  104 => 38,  100 => 39,  94 => 32,  90 => 27,  88 => 34,  84 => 24,  77 => 27,  68 => 22,  61 => 16,  53 => 12,  49 => 14,  25 => 1,  31 => 4,  28 => 4,  19 => 1,  79 => 29,  72 => 21,  69 => 20,  47 => 10,  40 => 11,  37 => 5,  22 => 3,  246 => 93,  157 => 46,  145 => 64,  139 => 45,  131 => 74,  123 => 42,  120 => 38,  115 => 33,  111 => 47,  108 => 42,  101 => 35,  98 => 40,  96 => 37,  83 => 33,  74 => 21,  66 => 21,  55 => 16,  52 => 11,  50 => 13,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 33,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 43,  109 => 67,  106 => 36,  103 => 28,  99 => 31,  95 => 33,  92 => 28,  86 => 27,  82 => 30,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 16,  54 => 16,  51 => 12,  48 => 10,  45 => 10,  42 => 9,  39 => 8,  36 => 4,  33 => 4,  30 => 3,);
    }
}
