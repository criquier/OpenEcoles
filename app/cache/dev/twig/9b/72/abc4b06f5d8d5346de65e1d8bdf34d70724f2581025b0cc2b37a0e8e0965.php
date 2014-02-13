<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9b72abc4b06f5d8d5346de65e1d8bdf34d70724f2581025b0cc2b37a0e8e0965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesuser/css/user.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        // line 9
        echo "    <section class=\"formConnexion\">
        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 11
        if ($this->getContext($context, "error")) {
            // line 12
            echo "                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "error")), "html", null, true);
            echo "</div>
            ";
        }
        // line 14
        echo "
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "csrf_token"), "html", null, true);
        echo "\" />

            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" required=\"required\" />
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            <input type=\"submit\" value=\"Ok\" class=\"valider\"/>
            <br/>
        </form>
        <a id=\"inscription\" href=\"#\" >s'inscrire</a>
        <section class=\"inscription\">
            <div class=\"bandeauVert\"></div>
            <article class=\"formulaireInscription\">
            </article>
        </section>
    </section>

";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "    <section class=\"diaporama\">
        Diaporama
    </section>
    <section class=\"previsu\">
        element intéréssant
    </section>
";
    }

    // line 41
    public function block_javascript($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  102 => 41,  92 => 33,  89 => 32,  71 => 17,  66 => 15,  63 => 14,  57 => 12,  55 => 11,  51 => 10,  48 => 9,  45 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
