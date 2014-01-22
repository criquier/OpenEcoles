<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_16b29762095dd107ded3516fac61ec4eee7dff6036c6a27f96ad4f8db1d184d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  43 => 8,  33 => 4,  30 => 3,  145 => 35,  141 => 28,  138 => 27,  133 => 25,  129 => 23,  126 => 22,  115 => 5,  109 => 36,  102 => 33,  98 => 32,  90 => 30,  87 => 29,  85 => 27,  82 => 26,  80 => 25,  77 => 24,  75 => 22,  70 => 20,  59 => 14,  57 => 12,  52 => 11,  44 => 9,  40 => 7,  35 => 6,  31 => 5,  25 => 1,  136 => 57,  124 => 47,  121 => 13,  114 => 36,  111 => 35,  107 => 35,  104 => 32,  96 => 40,  94 => 31,  91 => 34,  89 => 32,  83 => 29,  76 => 25,  72 => 23,  69 => 22,  62 => 15,  51 => 9,  48 => 10,  42 => 5,  37 => 4,  34 => 3,);
    }
}
