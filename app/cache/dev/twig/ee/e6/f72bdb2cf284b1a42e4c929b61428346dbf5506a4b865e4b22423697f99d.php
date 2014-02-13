<?php

/* ::base.html.twig */
class __TwigTemplate_eee6f72bdb2cf284b1a42e4c929b61428346dbf5506a4b865e4b22423697f99d extends Twig_Template
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
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  152 => 37,  149 => 36,  144 => 33,  140 => 30,  137 => 29,  132 => 19,  126 => 9,  119 => 46,  117 => 45,  112 => 43,  108 => 42,  104 => 41,  100 => 40,  96 => 38,  94 => 36,  90 => 34,  88 => 33,  84 => 31,  82 => 29,  77 => 27,  68 => 20,  66 => 19,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  43 => 11,  39 => 10,  25 => 1,  64 => 17,  55 => 11,  50 => 9,  46 => 8,  41 => 7,  35 => 9,  32 => 4,  29 => 3,);
    }
}
