<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_ccd0a9789617a850ea7c75863d162e7c0a6972e918f4fb936ea9eb73ed4ceca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
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
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ($this->getContext($context, "tokens")) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tokens"));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "elements"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "elements"), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  188 => 90,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  232 => 88,  222 => 83,  210 => 77,  155 => 47,  127 => 35,  363 => 153,  357 => 123,  353 => 149,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  212 => 78,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 74,  181 => 65,  172 => 57,  165 => 83,  134 => 39,  76 => 34,  148 => 65,  97 => 33,  81 => 23,  20 => 1,  70 => 15,  65 => 11,  129 => 73,  124 => 46,  113 => 48,  58 => 25,  239 => 79,  236 => 78,  226 => 84,  205 => 63,  202 => 94,  195 => 60,  190 => 76,  184 => 63,  180 => 54,  174 => 65,  170 => 84,  167 => 49,  118 => 49,  110 => 31,  23 => 2,  186 => 57,  178 => 59,  175 => 58,  153 => 77,  150 => 55,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 67,  177 => 65,  169 => 60,  128 => 59,  107 => 36,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 69,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 47,  143 => 51,  135 => 54,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 18,  89 => 30,  85 => 23,  75 => 24,  56 => 16,  87 => 41,  21 => 2,  26 => 12,  93 => 29,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  201 => 92,  196 => 92,  183 => 82,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  151 => 59,  142 => 59,  138 => 55,  136 => 71,  121 => 50,  105 => 25,  91 => 33,  62 => 27,  24 => 7,  156 => 62,  152 => 46,  140 => 58,  137 => 29,  132 => 19,  126 => 54,  119 => 40,  117 => 39,  104 => 32,  100 => 39,  94 => 21,  90 => 42,  88 => 25,  84 => 27,  77 => 27,  68 => 12,  61 => 12,  53 => 12,  49 => 14,  25 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 11,  37 => 7,  22 => 3,  246 => 136,  157 => 46,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 33,  111 => 47,  108 => 42,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 21,  66 => 21,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 36,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 28,  99 => 23,  95 => 34,  92 => 28,  86 => 27,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 6,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
