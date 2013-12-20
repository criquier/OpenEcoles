<?php

/* OpenEcolesBackOfficeBundle:Accueil:index.html.twig */
class __TwigTemplate_ae2dae4eb55c4a5113c4d9acd82843610ceaac8f828c8a94af9df0169b6cca15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
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
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesBackOfficeBundle:Accueil:navigationHorizontale"));
        echo "
    ";
        // line 5
        $this->displayBlock('section', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "        Contenu de l'accueil, bienvenue sur la page d'administration du site
    ";
    }

    public function getTemplateName()
    {
        return "OpenEcolesBackOfficeBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  37 => 5,  32 => 4,  29 => 3,  72 => 17,  69 => 16,  64 => 19,  62 => 16,  55 => 12,  51 => 11,  47 => 6,  44 => 5,  38 => 5,  33 => 4,  30 => 3,);
    }
}
