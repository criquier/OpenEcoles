<?php

/* ::base.html.twig */
class __TwigTemplate_523af4eb89e39210f6f8024a804639e4fb34aaf27bd7236d7c816b1386d15683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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

        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/jquery/jquery.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/transition.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/bootstrap/js/collapse.js"), "html", null, true);
        echo "\" ></script>

        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    </head>

    <body>

        <header>
            <aside class=\"iconSite\">
                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesannexe/images/logo.png"), "html", null, true);
        echo "\" class=\"positionLogo\" alt=\"OpenEcoles\" title=\"OpenEcoles\" />
            </aside>
            ";
        // line 35
        $this->displayBlock('entete', $context, $blocks);
        // line 37
        echo "        </header>

        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        <footer>
            ";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "        </footer>

    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "OpenEcoles";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 35
    public function block_entete($context, array $blocks = array())
    {
        // line 36
        echo "            ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "            ";
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
        return array (  155 => 43,  152 => 42,  147 => 39,  143 => 36,  140 => 35,  135 => 25,  130 => 24,  116 => 44,  114 => 42,  110 => 40,  108 => 39,  104 => 37,  102 => 35,  97 => 33,  88 => 26,  85 => 25,  83 => 24,  74 => 21,  70 => 20,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  43 => 11,  39 => 10,  35 => 9,  25 => 1,  144 => 64,  141 => 63,  134 => 54,  131 => 53,  124 => 9,  122 => 53,  109 => 43,  100 => 37,  93 => 32,  90 => 31,  84 => 27,  78 => 22,  73 => 23,  68 => 22,  66 => 19,  55 => 12,  52 => 11,  47 => 8,  41 => 5,  36 => 4,  33 => 3,);
    }
}
