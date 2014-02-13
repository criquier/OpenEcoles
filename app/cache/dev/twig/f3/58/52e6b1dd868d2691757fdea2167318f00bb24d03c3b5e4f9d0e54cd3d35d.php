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
    <li class=\"titreMenuVertical\">Mon espace personnel</li>
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
            echo " ";
            if (($this->getAttribute($this->getContext($context, "menu"), "badge") == true)) {
                echo "<badge id=\"messageNonConsulte\" class=\"badge\">0</badge>";
            }
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
        return array (  49 => 8,  28 => 4,  23 => 3,  50 => 8,  43 => 6,  31 => 4,  26 => 3,  22 => 2,  19 => 1,  186 => 99,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  143 => 36,  140 => 34,  137 => 33,  128 => 85,  117 => 72,  109 => 67,  100 => 60,  98 => 40,  94 => 38,  92 => 33,  86 => 30,  79 => 26,  75 => 24,  72 => 23,  62 => 18,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,);
    }
}
