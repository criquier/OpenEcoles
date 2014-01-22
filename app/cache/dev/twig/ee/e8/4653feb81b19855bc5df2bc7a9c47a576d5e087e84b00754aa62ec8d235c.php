<?php

/* OpenEcolesTutorialBundle:Chapitre:affichageChapitreSection.html.twig */
class __TwigTemplate_eee84653feb81b19855bc5df2bc7a9c47a576d5e087e84b00754aa62ec8d235c extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "chapitres"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 2
            echo "    <article>
            <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_visualiser_chapitre", array("id" => $this->getAttribute($this->getContext($context, "chapitre"), "getId"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chapitre"), "getTitre"), "html", null, true);
            echo "</a>
    </article>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "    <article>
        Pas de chapitre pour cette section
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Chapitre:affichageChapitreSection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  24 => 2,  37 => 6,  28 => 5,  23 => 2,  26 => 6,  19 => 1,  128 => 43,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  103 => 34,  100 => 33,  91 => 27,  86 => 25,  79 => 21,  72 => 17,  69 => 16,  61 => 14,  59 => 13,  55 => 12,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
