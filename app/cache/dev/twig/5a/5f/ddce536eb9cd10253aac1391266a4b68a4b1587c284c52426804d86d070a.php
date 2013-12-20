<?php

/* OpenEcolesTutorialBundle:Tutoriel:visualiserTutorielParCategory.html.twig */
class __TwigTemplate_5a5fddce536eb9cd10253aac1391266a4b68a4b1587c284c52426804d86d070a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpenEcolesFrontOfficeBundle:Accueil:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "    Voici toute la liste
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tutoriels"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 6
            echo "    <article>
        <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getTitre"), "html", null, true);
            echo "</h1>
        <section>";
            // line 8
            echo $this->getAttribute($this->getContext($context, "tutoriel"), "getDescription");
            echo "
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_tutorial_visualiser", array("id" => $this->getAttribute($this->getContext($context, "tutoriel"), "getId"))), "html", null, true);
            echo "\" >Consulter</a> </section>
    </article>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    Il n'y a rien t'es bouché ou quoi?
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:visualiserTutorielParCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  50 => 9,  46 => 8,  42 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
