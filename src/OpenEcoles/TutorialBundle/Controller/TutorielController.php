<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 20/10/13
 * Time: 19:16
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\TutorialBundle\Controller;

use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TutorielController extends Controller{

    public function accueilAction(){
        $this->container->get("open_ecoles_tutorial.gestiontutoriel");
        return $this->render("OpenEcolesTutorialBundle:Default:index.html.twig",array(
            "name"=>"Camille"
        ));
    }

    public function creerTutorielAction(){

    }

    public function modifierTutorielAction(Tutoriel $tutoriel){

    }

    public function supprimerTutorielAction(Tutoriel $tutoriel){

    }

    public function validerTutorielAction(Tutoriel $tutoriel){

    }
}