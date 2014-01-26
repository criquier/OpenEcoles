<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 31/10/13
 * Time: 13:41
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller{

    public function indexAction(){
        return $this->render('OpenEcolesBackOfficeBundle:Accueil:index.html.twig', array(
        ));
    }

    public function navigationHorizontaleAction(){
        $parametres = $this->container->getParameter("backbundles");
        return $this->render('OpenEcolesBackOfficeBundle:Accueil:navigation_horizontal.html.twig', array(
            "bundles" => $parametres
        ));
    }
}