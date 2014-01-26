<?php

namespace OpenEcoles\TutorialBundle\Services;

use \Doctrine\ORM\EntityManager;

use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Entity\Chapitre;
use OpenEcoles\TutorialBundle\Entity\UniteTexte;

class ActionBDChapitre{

    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function getAllSectionChapitreByTutoriel(Tutoriel $tutoriel){
        $chapters_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Chapitre");
        $chapters = $chapters_repository->findBy(array("tutoriel"=>$tutoriel,"parent"=>null));
        return $chapters;
    }

    public function getUnitetextByChapitre(Chapitre $chapitre){
        $unitetext_repository = $this->em->getRepository("OpenEcolesTutorialBundle:UniteTexte");
        $unitetext = $unitetext_repository->findOneByChapitre($chapitre);
        return $unitetext;
    }

    public function getChapitreBySection(Chapitre $chapitre){
        $chapters_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Chapitre");
        $chapters = $chapters_repository->findBy(array("tutoriel"=>$chapitre->getTutoriel(),"parent"=>$chapitre));
        return $chapters;    }

    public function saveChapitre(Chapitre $chapitre){
        $this->em->persist($chapitre);
        $this->em->flush();
    }

    public function saveTexte(Unitetexte $uniteTexte){
        $this->em->persist($uniteTexte);
        $this->em->flush();
    }

    public function delete(Chapitre $chapitre){
        $unitetext = $this->getUnitetextByChapitre($chapitre);
        $this->em->remove($unitetext);
        $this->em->remove($chapitre);
        $this->em->flush();
    }

    public function deleteSection(chapitre $section){
        $chapitres = $this->getChapitreBySection($section);
        foreach($chapitres as $chapitre){
            $this->delete($chapitre);
        }
        $this->delete($section);
    }


}