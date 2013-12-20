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
        return array (  41 => 6,  26 => 3,  22 => 2,  19 => 1,  145 => 35,  141 => 28,  138 => 27,  129 => 23,  126 => 22,  115 => 5,  109 => 36,  107 => 35,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  87 => 29,  85 => 27,  82 => 26,  77 => 24,  75 => 22,  70 => 20,  62 => 15,  59 => 14,  57 => 13,  52 => 11,  44 => 9,  40 => 8,  35 => 6,  31 => 4,  25 => 1,  133 => 25,  121 => 13,  118 => 46,  111 => 36,  108 => 35,  104 => 33,  101 => 32,  93 => 40,  91 => 35,  88 => 34,  86 => 32,  80 => 25,  73 => 25,  69 => 23,  66 => 22,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
