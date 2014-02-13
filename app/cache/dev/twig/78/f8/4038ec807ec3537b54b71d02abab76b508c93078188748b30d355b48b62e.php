<?php

/* OpenEcolesUserBundle:Message:visualiserMessages.html.twig */
class __TwigTemplate_78f84038ec807ec3537b54b71d02abab76b508c93078188748b30d355b48b62e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/openecolesuser/css/user.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        // line 9
        echo "    <h4>Vos messages</h4>
    <div class=\"bulleDest\">bjr <div class=\"arrow_inner_dest\"></div></div>
    <div class=\"bulleExp\">bjt ca va<div class=\"arrow_inner_exp\"></div></div>
    <div class=\"bulleDest\">oui et toi? <div class=\"arrow_inner_dest\"></div></div>
    <div class=\"bulleExp\">ca va<div class=\"arrow_inner_exp\"></div></div>

    ";
        // line 16
        echo "
    <section class=\"conversations\" >
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <article class=\"conversation\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_ecoles_user_conversation_messsage", array("idauteur" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "id"), "iddestinataire" => $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "auteur"), "id"))), "html", null, true);
            // line 21
            echo "\">
                    <span>
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "auteur"), "username"), "html", null, true);
            echo "
                        ";
            // line 24
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "contenu"), 50), "html", null, true);
            echo "
                        ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "date"), "d/m/Y H:i:s"), "html", null, true);
            echo "
                    </span>
                </a>
            </article>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <p>Votre boite de reception est vide</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </section>
    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(\"#detailmessage\").click(function(){
            \$.ajax({
                type:\"POST\",
            ";
        // line 43
        echo "                data:{
                    //'idauteur':";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "

                },
                success:function(data){
                    \$('sel').load('visualiserConversation.html.twig');//,{ id:50, nom: 'durand'});
                },
                error: function() {
                    alert('La requête n\\'a pas abouti'); }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OpenEcolesUserBundle:Message:visualiserMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  115 => 43,  106 => 37,  103 => 36,  98 => 32,  91 => 30,  81 => 25,  77 => 24,  73 => 23,  69 => 21,  67 => 20,  64 => 19,  59 => 18,  55 => 16,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,);
    }
}
