<?php

/* OpenEcolesTutorialBundle:Note:visualiserMoyenne.html.twig */
class __TwigTemplate_a9bf374470aa49a2f4b7a30d16064f6db8b8e2096cd8a8b678a5ba760eba2ddd extends Twig_Template
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
    <header>
        <div id=\"message\"></div>
    </header>
    <article id=\"moyenne\">
        Moyenne: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "moyenne"), "html", null, true);
        echo "
    </article>
    <article id=\"staring\">
        <header>
            Noter :
        </header>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"0.5\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"1\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"1.5\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"2\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"2.5\" />
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"3\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"3.5\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"4\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"4.5\"/>
        <input type=\"radio\" name=\"star\" class=\"star {split:2}\" value=\"5\"/>
        <input type=\"button\" id=\"voter\" class=\"button_recherche\" value=\"voter!\" />
    </article>
</section>";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Note:visualiserMoyenne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,  119 => 39,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  94 => 30,  91 => 29,  82 => 23,  77 => 21,  70 => 17,  63 => 13,  55 => 12,  51 => 10,  48 => 9,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
