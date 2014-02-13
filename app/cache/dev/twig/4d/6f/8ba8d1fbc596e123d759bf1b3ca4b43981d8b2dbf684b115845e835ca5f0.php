<?php

/* OpenEcolesTutorialBundle:Tutoriel:topTutorielCarousel.html.twig */
class __TwigTemplate_4d6f8ba8d1fbc596e123d759bf1b3ca4b43981d8b2dbf684b115845e835ca5f0 extends Twig_Template
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
    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tutoriels"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tutoriel"]) {
            // line 13
            echo "                <div class=\"item ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                echo " active ";
            }
            echo "\">
                    <article class=\"tutorielTopCarousel\">
                        <header>
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getTitre", array(), "method"), "html", null, true);
            echo "
                        </header>
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tutoriel"), "getAuteur", array(), "method"), "html", null, true);
            echo "
                    </article>
                    <div class=\"carousel-caption\">
                        plop
                    </div>
                </div>

            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                il n'y a pas de tutoriel en ce moment qui soit populaire
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutoriel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        ...
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "OpenEcolesTutorialBundle:Tutoriel:topTutorielCarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  85 => 26,  64 => 18,  59 => 16,  50 => 13,  32 => 12,  19 => 1,  239 => 79,  236 => 78,  229 => 73,  226 => 72,  221 => 69,  214 => 67,  205 => 63,  202 => 62,  195 => 60,  190 => 59,  186 => 57,  184 => 56,  180 => 54,  174 => 52,  170 => 50,  167 => 49,  159 => 47,  157 => 46,  151 => 45,  147 => 43,  144 => 42,  141 => 41,  138 => 40,  136 => 39,  131 => 38,  128 => 37,  125 => 36,  123 => 35,  118 => 34,  115 => 33,  112 => 32,  110 => 31,  105 => 30,  103 => 29,  99 => 27,  93 => 26,  91 => 25,  86 => 23,  82 => 21,  77 => 20,  72 => 18,  69 => 17,  63 => 15,  61 => 14,  57 => 12,  51 => 10,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
