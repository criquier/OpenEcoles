<?php

/* base.html.twig */
class __TwigTemplate_764a1a7adf3dddfb54298fec6a8d82f1257c1b1077617c904a406fc67b30acbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--
    Page \"Base.html\", cette page est la page mére qui contient les principales balises de tous les pages du site OpenEcole.
-->
<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/css/base.css"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- bootstrap -->
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>       
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\"/>

\t\t";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    </head>

    <body>

        <header class=\"entete\">
            <aside class=\"iconSite\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/images/logo.png"), "html", null, true);
        echo "\" class=\"positionLogo\" alt=\"OpenEcoles\" title=\"OpenEcoles\" />
            </aside>
            ";
        // line 29
        $this->displayBlock('entete', $context, $blocks);
        // line 31
        echo "        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
        <footer>
            ";
        // line 36
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "        </footer>

        <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/jquery/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/transition.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/collapse.js"), "html", null, true);
        echo "\" ></script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OpenEcoles";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 29
    public function block_entete($context, array $blocks = array())
    {
        // line 30
        echo "            ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "            ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  124 => 46,  113 => 39,  58 => 12,  239 => 79,  236 => 78,  226 => 72,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  118 => 34,  110 => 31,  23 => 3,  186 => 57,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 67,  177 => 65,  169 => 60,  128 => 47,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 69,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 47,  143 => 36,  135 => 53,  102 => 32,  71 => 18,  67 => 17,  63 => 15,  59 => 14,  38 => 5,  89 => 30,  85 => 32,  75 => 19,  56 => 14,  87 => 33,  21 => 2,  26 => 6,  93 => 26,  78 => 21,  46 => 8,  27 => 4,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  151 => 45,  142 => 59,  138 => 40,  136 => 39,  121 => 45,  105 => 30,  91 => 25,  62 => 20,  24 => 2,  156 => 45,  152 => 37,  140 => 30,  137 => 29,  132 => 19,  126 => 9,  119 => 46,  117 => 45,  104 => 41,  100 => 40,  94 => 36,  90 => 34,  88 => 33,  84 => 31,  77 => 27,  68 => 20,  61 => 17,  53 => 15,  49 => 14,  25 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 26,  72 => 17,  69 => 20,  47 => 8,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 46,  145 => 46,  139 => 45,  131 => 74,  123 => 35,  120 => 38,  115 => 33,  111 => 37,  108 => 42,  101 => 35,  98 => 40,  96 => 38,  83 => 25,  74 => 21,  66 => 19,  55 => 14,  52 => 12,  50 => 10,  43 => 11,  41 => 6,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 36,  147 => 43,  144 => 33,  141 => 41,  133 => 55,  130 => 41,  125 => 36,  122 => 43,  116 => 37,  112 => 43,  109 => 67,  106 => 36,  103 => 34,  99 => 30,  95 => 33,  92 => 28,  86 => 25,  82 => 29,  80 => 24,  73 => 23,  64 => 18,  60 => 6,  57 => 16,  54 => 10,  51 => 12,  48 => 9,  45 => 8,  42 => 9,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
