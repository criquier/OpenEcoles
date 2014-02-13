<?php

/* OpenEcolesUserBundle:Message:visualiserConversation.html.twig */
class __TwigTemplate_334bdba29808228eee1fc09d321077f9ca7c7f4d39dac2c094fabfa08d52ff6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpenEcolesFrontOfficeBundle:Accueil:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'section' => array($this, 'block_section'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" charset=\"UTF-8\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolestutorial/css/tutoriel.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 7
    public function block_section($context, array $blocks = array())
    {
        // line 8
        echo "    <h6>Liste des messages echangé avec ";
        echo twig_escape_filter($this->env, (isset($context["idauteur"]) ? $context["idauteur"] : $this->getContext($context, "idauteur")), "html", null, true);
        echo " dest: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</h6>
    ";
        // line 10
        echo "    <p id=\"conversation\">

    </p>
    ";
        // line 14
        echo "    <input id=\"message\" type=\"text\"  >

";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesuser/js/conversation.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\">

       // On recuprère l'URL d'envoie de messages
       urlpost= \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_envoie_messsage", array("idauteur" => (isset($context["idauteur"]) ? $context["idauteur"] : $this->getContext($context, "idauteur")), "iddestinataire" => (isset($context["iddestinataire"]) ? $context["iddestinataire"] : $this->getContext($context, "iddestinataire")))), "html", null, true);
        // line 26
        echo "\";

       // URL de consultation de message
       urlreceive=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_consulte_messsage", array("idauteur" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"), "iddestinataire" => (isset($context["iddestinataire"]) ? $context["iddestinataire"] : $this->getContext($context, "iddestinataire")))), "html", null, true);
        // line 30
        echo "\";

       initializeVar(urlpost, urlreceive);
      // on ecoute les envoies de messages
       postListener();
       // On ecoute les notifications de messages
       setMessageListener();

    </script>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesUserBundle:Message:visualiserConversation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  88 => 29,  83 => 26,  81 => 25,  74 => 21,  68 => 19,  65 => 18,  59 => 14,  54 => 10,  47 => 8,  44 => 7,  38 => 5,  33 => 4,  30 => 3,);
    }
}
