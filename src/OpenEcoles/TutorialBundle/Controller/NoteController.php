<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 02/11/13
 * Time: 09:37
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\TutorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\JsonResponse;

use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Entity\Note;


class NoteController extends Controller{

    public function noterTutorielAction(Tutoriel $tutoriel){
        $note = new Note();
        $request = $this->getRequest();
        if($request->isXmlHttpRequest()){
            $value = $request->request->get("note");
            $note->setTutoriel($tutoriel);
            $note->setNote($value);

            $manager = $this->get("open_ecoles_tutorial.gestionNote");
            $manager->save($note);
            return new JsonResponse(array('moyenne' => $manager->getMoyenneByTutoriel($tutoriel), "message"=>"La note a bien été prise en compte"));
        }
        return new Response("Erreur, il faut une requete ajax",404);
    }

    public function visualiserMoyenneAction(Tutoriel $tutoriel){
        $manager = $this->get("open_ecoles_tutorial.gestionNote");
        return $this->render("OpenEcolesTutorialBundle:Note:visualiserMoyenne.html.twig",array(
            "moyenne" => $manager->getMoyenneByTutoriel($tutoriel),
        ));
    }
}