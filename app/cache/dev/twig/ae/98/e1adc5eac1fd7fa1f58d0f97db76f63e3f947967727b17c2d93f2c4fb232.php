<?php

/* OpenEcolesFrontOfficeBundle:Accueil:navigation_horizontal.html.twig */
class __TwigTemplate_ae98e1adc5eac1fd7fa1f58d0f97db76f63e3f947967727b17c2d93f2c4fb232 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
    <li class=\"active\"><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("open_ecoles_front_office_homepage");
        echo "\"><i class=\"icon-home\"></i>Accueil</a></li>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuH"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "        <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "menu"), "lien"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "nom"), "html", null, true);
            echo "</a></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "        Il n'y a que l'accueil pas de bundle sur le serveur
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesFrontOfficeBundle:Accueil:navigation_horizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  31 => 4,  26 => 3,  22 => 2,  19 => 1,  175 => 81,  172 => 80,  165 => 44,  162 => 43,  158 => 41,  151 => 39,  148 => 37,  143 => 36,  140 => 35,  131 => 73,  120 => 60,  112 => 55,  103 => 48,  101 => 43,  98 => 42,  96 => 35,  91 => 33,  84 => 29,  80 => 27,  77 => 26,  67 => 21,  56 => 12,  53 => 11,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
