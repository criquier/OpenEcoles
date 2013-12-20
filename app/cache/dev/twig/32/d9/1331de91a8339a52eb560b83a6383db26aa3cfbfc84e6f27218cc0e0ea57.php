<?php

/* ::base.html.twig */
class __TwigTemplate_32d91331de91a8339a52eb560b83a6383db26aa3cfbfc84e6f27218cc0e0ea57 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/css/base.css"), "html", null, true);
        echo "\"/>
        <!-- bootstrap -->
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>       
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\"/>       
        
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header class=\"entete\">
            <section class=\"iconSite\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/images/logo.png"), "html", null, true);
        echo "\" class=\"positionLogo\" alt=\"OpenEcoles\" title=\"OpenEcoles\" />
            </section>
            ";
        // line 22
        $this->displayBlock('entete', $context, $blocks);
        // line 24
        echo "        </header>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "        <footer class=\"copyright\">
            ";
        // line 27
        $this->displayBlock('footer', $context, $blocks);
        // line 29
        echo "        </footer>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/jquery/jquery.js"), "html", null, true);
        echo "\" ></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/transition.js"), "html", null, true);
        echo "\" ></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/collapse.js"), "html", null, true);
        echo "\" ></script>
\t\t
\t\t";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "OpenEcoles";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 22
    public function block_entete($context, array $blocks = array())
    {
        // line 23
        echo "            ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_footer($context, array $blocks = array())
    {
        // line 28
        echo "            ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 35,  141 => 28,  138 => 27,  133 => 25,  129 => 23,  126 => 22,  121 => 13,  115 => 5,  109 => 36,  107 => 35,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  87 => 29,  85 => 27,  82 => 26,  80 => 25,  77 => 24,  75 => 22,  70 => 20,  62 => 15,  59 => 14,  57 => 13,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  31 => 5,  25 => 1,  60 => 16,  51 => 10,  46 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 3,);
    }
}
