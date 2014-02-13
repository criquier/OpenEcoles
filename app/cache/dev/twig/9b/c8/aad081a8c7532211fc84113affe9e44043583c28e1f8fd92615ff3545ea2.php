<?php

/* OpenEcolesUserBundle:Amis:getAllPeopleByFilter.html.twig */
class __TwigTemplate_9bc8aad081a8c7532211fc84113affe9e44043583c28e1f8fd92615ff3545ea2 extends Twig_Template
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
        echo "<section>
    <h3>Recherche Correspondant à ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "filter"), "html", null, true);
        echo "</h3>
    <section class=\"friendsSearch\">
        <header>
            <h3>Amis</h3>
        </header>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "amis"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 8
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "friend"), "getUsername", array(), "method"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_supprimer_ami", array("id" => $this->getAttribute($this->getContext($context, "friend"), "getId", array(), "method"))), "html", null, true);
            echo "\">supprimer des amis</a><br/>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "            Il n'y a pas d'amis correspondant à votre recherche
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </section>

    <section class=\"PeopleSearch\">
        <header>
            <h3>Vous connaissez peut être...</h3>
        </header>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "other"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["people"]) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "people"), "getUsername", array(), "method"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_inviter_ami", array("id" => $this->getAttribute($this->getContext($context, "people"), "getId", array(), "method"))), "html", null, true);
            echo "\">inviter comme ami</a><br/>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "            Aucune personne n'a de nom identique à celui de la recherche
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['people'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </section>

</section>";
    }

    public function getTemplateName()
    {
        return "OpenEcolesUserBundle:Amis:getAllPeopleByFilter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  75 => 21,  65 => 19,  60 => 18,  52 => 12,  45 => 10,  35 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
