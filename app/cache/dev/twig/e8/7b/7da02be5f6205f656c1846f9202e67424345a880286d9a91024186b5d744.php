<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_e87b7da02be5f6205f656c1846f9202e67424345a880286d9a91024186b5d744 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  55 => 13,  21 => 2,  92 => 21,  79 => 18,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  123 => 47,  117 => 44,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  66 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 5,  30 => 3,  145 => 35,  141 => 28,  138 => 57,  133 => 55,  129 => 23,  126 => 22,  115 => 43,  109 => 36,  102 => 33,  98 => 40,  90 => 30,  87 => 20,  85 => 19,  82 => 26,  80 => 19,  77 => 24,  75 => 17,  70 => 20,  59 => 14,  57 => 14,  52 => 11,  44 => 10,  40 => 8,  35 => 4,  31 => 5,  25 => 4,  136 => 56,  124 => 47,  121 => 46,  114 => 36,  111 => 35,  107 => 35,  104 => 32,  96 => 40,  94 => 22,  91 => 31,  89 => 20,  83 => 29,  76 => 25,  72 => 16,  69 => 25,  62 => 23,  51 => 12,  48 => 10,  42 => 5,  37 => 4,  34 => 3,);
    }
}
