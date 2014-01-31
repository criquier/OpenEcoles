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
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" >s'inscrire</a>
    </section>

";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    <section class=\"diaporama\">
        Diaporama
    </section>
    <section class=\"previsu\">
        element intéréssant
    </section>
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
        return array (  89 => 28,  86 => 27,  78 => 22,  70 => 17,  65 => 15,  62 => 14,  56 => 12,  54 => 11,  50 => 10,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
