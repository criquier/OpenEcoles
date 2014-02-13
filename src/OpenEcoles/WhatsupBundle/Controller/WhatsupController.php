<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 28/01/14
 * Time: 17:15
 */

namespace OpenEcoles\WhatsupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WhatsupController extends Controller{

    public function whatsupAction(){
        $publications = array();

        $em = $this->getDoctrine()->getManager();
        $tutoRepo = $em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoRepo->findBy(array("valide"=>1),array("dateCreation"=>"ASC"),10,0);

        $opseRepo = $em->getRepository("OpenEcolesOpenSeanceBundle:OpenSeance");
        $openseances = $opseRepo->findBy(array(),array("dateCreation"=>"ASC"),10,0);

        foreach($tutoriels as $tutoriel){
            $publications[$tutoriel->getDateCreation()->format("Y-m-d h:i:s")] = array("type"=>"tutoriel","object"=>$tutoriel,"date"=>$tutoriel->getDateCreation());
        }
        foreach($openseances as $openseance){
            $publications[$openseance->getDateCreation()->format("Y-m-d h:i:s")] = array("type"=>"openseance","object"=>$openseance,"date"=>$openseance->getDateCreation());
        }

        krsort($publications);
        return $this->render("OpenEcolesWhatsupBundle:Whatsup:whatsup.html.twig",array(
            "publications" => $publications
        ));
    }
} 