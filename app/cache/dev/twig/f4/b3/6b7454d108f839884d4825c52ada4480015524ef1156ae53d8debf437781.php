<?php

/* OpenEcolesBackOfficeBundle:Accueil:navigation_horizontal.html.twig */
class __TwigTemplate_f4b36b7454d108f839884d4825c52ada4480015524ef1156ae53d8debf437781 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "bundles"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
            // line 4
            echo "        <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getContext($context, "bundle"), "accueil"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "bundle"), "menu_name"), "html", null, true);
            echo "</a></li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "    Il n'y a que l'accueil pas de bundle sur le serveur
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesBackOfficeBundle:Accueil:navigation_horizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  41 => 6,  31 => 4,  26 => 3,  22 => 2,  19 => 1,  39 => 8,  37 => 5,  32 => 4,  29 => 3,  72 => 17,  69 => 16,  64 => 19,  62 => 16,  55 => 12,  51 => 11,  47 => 6,  44 => 5,  38 => 5,  33 => 4,  30 => 3,);
    }
}
