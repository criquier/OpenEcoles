<?php

namespace OpenEcoles\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction(){
        $parametres = $this->container->getParameter("contenu_central");
        return $this->render('OpenEcolesFrontOfficeBundle:Accueil:index.html.twig', array(
            "contenus" => $parametres,
        ));
    }

    public function navigationHorizontaleAction(){
        $parametres = $this->container->getParameter("menu_horizontal");
        return $this->render('OpenEcolesFrontOfficeBundle:Accueil:navigation_horizontal.html.twig', array(
            "menuH" => $parametres
        ));
    }

    public function navigationVerticaleAction(){
       $parametres = $this->container->getParameter("menu_vertical");
        return $this->render('OpenEcolesFrontOfficeBundle:Accueil:navigation_verticale.html.twig', array(
            "menuV" => $parametres
        ));
    }
}
