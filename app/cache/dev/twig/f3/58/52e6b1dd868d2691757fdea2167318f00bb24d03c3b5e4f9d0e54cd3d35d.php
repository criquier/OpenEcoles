<?php

/* OpenEcolesFrontOfficeBundle:Accueil:navigation_verticale.html.twig */
class __TwigTemplate_f35852e6b1dd868d2691757fdea2167318f00bb24d03c3b5e4f9d0e54cd3d35d extends Twig_Template
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
        echo "<ul class=\"nav nav-pills nav-stacked\">
    <li>Mon espace personnel</li>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menuV"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "menu"), "lien"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "nom"), "html", null, true);
            echo "</a></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "        Pas de données
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "OpenEcolesFrontOfficeBundle:Accueil:navigation_verticale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  28 => 4,  23 => 3,  41 => 6,  26 => 3,  22 => 2,  19 => 1,  124 => 47,  121 => 46,  114 => 36,  111 => 35,  107 => 33,  96 => 40,  94 => 35,  91 => 34,  89 => 32,  83 => 29,  76 => 25,  69 => 22,  62 => 18,  42 => 5,  37 => 4,  248 => 92,  245 => 91,  240 => 88,  234 => 84,  227 => 82,  218 => 78,  215 => 77,  208 => 75,  203 => 74,  199 => 72,  197 => 71,  193 => 69,  187 => 67,  183 => 65,  180 => 64,  172 => 62,  170 => 61,  164 => 60,  160 => 58,  157 => 57,  154 => 56,  151 => 55,  149 => 54,  144 => 53,  141 => 52,  138 => 51,  136 => 57,  131 => 49,  128 => 48,  125 => 47,  123 => 46,  118 => 45,  116 => 44,  112 => 42,  106 => 41,  104 => 32,  99 => 38,  95 => 36,  90 => 35,  72 => 23,  66 => 17,  64 => 16,  59 => 13,  53 => 11,  51 => 9,  48 => 8,  45 => 8,  39 => 5,  34 => 3,  31 => 4,);
    }
}
