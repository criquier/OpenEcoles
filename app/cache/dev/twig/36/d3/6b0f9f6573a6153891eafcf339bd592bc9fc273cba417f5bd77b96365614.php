<?php

/* OpenEcolesFrontOfficeBundle:Accueil:navigation_horizontal.html.twig */
class __TwigTemplate_36d36b0f9f6573a6153891eafcf339bd592bc9fc273cba417f5bd77b96365614 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["menuH"]) ? $context["menuH"] : $this->getContext($context, "menuH")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 4
            echo "        <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "lien"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "nom"), "html", null, true);
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
        return array (  41 => 6,  31 => 4,  26 => 3,  22 => 2,  19 => 1,  178 => 84,  170 => 78,  167 => 77,  160 => 41,  157 => 40,  153 => 38,  146 => 36,  143 => 34,  138 => 33,  135 => 32,  126 => 70,  115 => 57,  107 => 52,  98 => 45,  96 => 40,  93 => 39,  91 => 32,  86 => 30,  79 => 26,  75 => 24,  72 => 23,  62 => 18,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
