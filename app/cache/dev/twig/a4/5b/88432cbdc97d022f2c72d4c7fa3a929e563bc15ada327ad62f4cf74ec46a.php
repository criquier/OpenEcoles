<?php

/* OpenEcolesWhatsupBundle:Whatsup:whatsup.html.twig */
class __TwigTemplate_a45b88432cbdc97d022f2c72d4c7fa3a929e563bc15ada327ad62f4cf74ec46a extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "publications"));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 2
            echo "    <article class=\"publication ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "publication"), "type"), "html", null, true);
            echo "Publication\">
        <header>
           <h3> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "publication"), "object"), "getTitre", array(), "method"), "html", null, true);
            echo "</h3>
            <span>le ";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "publication"), "object", array(), "array"), "getDateCreation", array(), "method"), "d-m-Y h:i"), "html", null, true);
            echo "</span>
        </header>
        <p>
            ";
            // line 8
            echo twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "publication"), "object", array(), "array"), "getDescription", array(), "method"), 100, "...");
            echo "
        </p>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OpenEcolesWhatsupBundle:Whatsup:whatsup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  33 => 5,  29 => 4,  49 => 8,  28 => 4,  23 => 2,  50 => 8,  43 => 6,  31 => 4,  26 => 3,  22 => 2,  19 => 1,  186 => 99,  178 => 93,  175 => 92,  153 => 41,  150 => 40,  143 => 36,  140 => 34,  137 => 33,  128 => 85,  117 => 72,  109 => 67,  100 => 60,  98 => 40,  94 => 38,  92 => 33,  86 => 30,  79 => 26,  75 => 24,  72 => 23,  62 => 18,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,);
    }
}
