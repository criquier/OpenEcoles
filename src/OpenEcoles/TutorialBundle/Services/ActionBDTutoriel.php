<?php

namespace OpenEcoles\TutorialBundle\Services;

use Doctrine\ORM\EntityManager;
use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Entity\Categorie;

class ActionBDTutoriel{

    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function getAllValidateTutoriel(){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>true));
        return $tutoriels;
    }

	public function getAllNotValidateTutoriel(){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>false));
        return $tutoriels;
    }
	
    public function getAllTutoriel(){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findAll();
        return $tutoriels;
    }

    public function getAllValidateTutorielByCategory(Categorie $category){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>true,"categorie"=>$category));
        return $tutoriels;
    }

    public function getAllNotValidateTutorielByCategory(Categorie $category){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>false,"categorie"=>$category));
        return $tutoriels;
    }

    public function getAllTutorielByCategory(Categorie $category){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findByCategorie($category);
        return $tutoriels;
    }

    public function save(Tutoriel $tuto){
        $this->em->persist($tuto);
        $this->em->flush();
        return $tuto;
    }

    public function delete(Tutoriel $tuto){
        $this->em->remove($tuto);
        $this->em->flush();
        return $tuto;
    }

    public function validateTutoriel(Tutoriel &$tutoriel){
        if(!$tutoriel->getValide())
            $tutoriel->setValide(true);
        return true;
    }
}