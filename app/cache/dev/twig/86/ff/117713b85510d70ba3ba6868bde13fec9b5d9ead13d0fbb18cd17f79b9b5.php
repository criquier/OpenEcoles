<?php

/* OpenEcolesTutorialBundle:Chapitre:index.html.twig */
class __TwigTemplate_86ff117713b85510d70ba3ba6868bde13fec9b5d9ead13d0fbb18cd17f79b9b5 extends Twig_Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 2
            echo "    <article class=\"accueilChapitre\">
       <header>
           <h5>
               <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_visualiser_section", array("id" => $this->getAttribute($this->getContext($context, "chapitre"), "getId"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "chapitre"), "getTitre"), "html", null, true);
            echo "</a>
           </h5>
       </header>
        <section>
            ";
            // line 9
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OpenEcolesTutorialBundle:Chapitre:affichageChapitreSection", array("id" => $this->getAttribute($this->getContext($context, "chapitre"), "getId"))));
            echo "
        </section>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Chapitre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  28 => 5,  23 => 2,  26 => 6,  19 => 1,  119 => 39,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  94 => 30,  91 => 29,  82 => 23,  77 => 21,  70 => 17,  63 => 13,  55 => 12,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
