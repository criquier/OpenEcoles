<?php

/* OpenEcolesUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_4e5c485f30869b826725841268df7b06644e026bdada2a073608a3c1b8c1253d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
        echo "</p>
</div>
    <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mon profil</a>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  124 => 72,  113 => 39,  58 => 12,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 44,  110 => 31,  23 => 3,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 47,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 19,  67 => 20,  63 => 15,  59 => 18,  38 => 5,  89 => 30,  85 => 28,  75 => 24,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 26,  78 => 21,  46 => 8,  27 => 4,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 45,  105 => 30,  91 => 30,  62 => 20,  24 => 2,  156 => 45,  152 => 37,  140 => 30,  137 => 29,  132 => 19,  126 => 9,  119 => 46,  117 => 45,  104 => 41,  100 => 40,  94 => 36,  90 => 34,  88 => 33,  84 => 31,  77 => 27,  68 => 20,  61 => 17,  53 => 15,  49 => 14,  25 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 17,  69 => 21,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 38,  123 => 35,  120 => 38,  115 => 43,  111 => 37,  108 => 42,  101 => 35,  98 => 32,  96 => 38,  83 => 25,  74 => 21,  66 => 19,  55 => 16,  52 => 21,  50 => 10,  43 => 11,  41 => 6,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 33,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 43,  109 => 67,  106 => 37,  103 => 36,  99 => 27,  95 => 33,  92 => 28,  86 => 25,  82 => 29,  80 => 31,  73 => 23,  64 => 19,  60 => 6,  57 => 16,  54 => 13,  51 => 12,  48 => 9,  45 => 8,  42 => 9,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
