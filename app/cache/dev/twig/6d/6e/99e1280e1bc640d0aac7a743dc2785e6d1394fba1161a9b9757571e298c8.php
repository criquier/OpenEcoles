<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_6d6e99e1280e1bc640d0aac7a743dc2785e6d1394fba1161a9b9757571e298c8 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  20 => 1,  70 => 17,  65 => 15,  129 => 73,  124 => 46,  113 => 39,  58 => 18,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 34,  110 => 31,  23 => 4,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 47,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 18,  67 => 20,  63 => 15,  59 => 14,  38 => 8,  89 => 28,  85 => 32,  75 => 19,  56 => 12,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  78 => 22,  46 => 14,  27 => 5,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 45,  105 => 30,  91 => 27,  62 => 19,  24 => 7,  156 => 45,  152 => 37,  140 => 30,  137 => 29,  132 => 19,  126 => 9,  119 => 46,  117 => 45,  104 => 41,  100 => 27,  94 => 36,  90 => 34,  88 => 33,  84 => 31,  77 => 27,  68 => 20,  61 => 17,  53 => 15,  49 => 14,  25 => 1,  31 => 4,  28 => 4,  19 => 2,  79 => 26,  72 => 21,  69 => 20,  47 => 9,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 74,  123 => 35,  120 => 38,  115 => 33,  111 => 37,  108 => 42,  101 => 35,  98 => 40,  96 => 38,  83 => 25,  74 => 21,  66 => 19,  55 => 14,  52 => 12,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 33,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 43,  109 => 67,  106 => 36,  103 => 28,  99 => 30,  95 => 33,  92 => 28,  86 => 27,  82 => 29,  80 => 24,  73 => 23,  64 => 18,  60 => 6,  57 => 16,  54 => 16,  51 => 12,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
