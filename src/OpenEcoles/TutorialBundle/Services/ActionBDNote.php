<?php

namespace OpenEcoles\TutorialBundle\Services;

use \Doctrine\ORM\EntityManager;

use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Entity\Note;

class ActionBDNote{

    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function getMoyenneByTutoriel(Tutoriel $tutoriel){
        $notes_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Note");
        $notes = $notes_repository->findByTutoriel($tutoriel);
        $moyenne = 0;
        if(count($notes) > 0 ){
            foreach($notes as $note){
                $moyenne += $note->getNote();
            }
            $moyenne = $moyenne / count($notes);
        }
        else{
            $moyenne = 2.5;
        }
        return number_format($moyenne,2);
    }

    public function save(Note $note){
        $this->em->persist($note);
        $this->em->flush();
    }

    public function delete(Note $note){
        $this->em->remove($note);
        $this->em->flush();
    }
}