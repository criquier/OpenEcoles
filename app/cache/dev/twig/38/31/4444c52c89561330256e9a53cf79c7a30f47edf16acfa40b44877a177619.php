<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_38314444c52c89561330256e9a53cf79c7a30f47edf16acfa40b44877a177619 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  38 => 13,  26 => 5,  55 => 13,  21 => 2,  92 => 21,  79 => 18,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  123 => 47,  117 => 44,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  66 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  33 => 6,  30 => 3,  145 => 35,  141 => 28,  138 => 57,  133 => 55,  129 => 23,  126 => 22,  115 => 43,  109 => 36,  102 => 33,  98 => 40,  90 => 30,  87 => 20,  85 => 19,  82 => 26,  80 => 19,  77 => 24,  75 => 17,  70 => 20,  59 => 14,  57 => 16,  52 => 11,  44 => 10,  40 => 8,  35 => 7,  31 => 5,  25 => 3,  136 => 56,  124 => 47,  121 => 46,  114 => 36,  111 => 35,  107 => 35,  104 => 32,  96 => 40,  94 => 22,  91 => 31,  89 => 20,  83 => 29,  76 => 25,  72 => 16,  69 => 25,  62 => 23,  51 => 15,  48 => 10,  42 => 14,  37 => 4,  34 => 3,);
    }
}
