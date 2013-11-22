<?php

namespace OpenEcoles\TutorialBundle\Services;

use Doctrine\ORM\EntityManager;
use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Entity\Categorie;

class ActionBDTutoriel{

    private $em;
    private $managerChapitre;
    public function __construct(EntityManager $em,ActionBDChapitre $managerChapitre){
        $this->em = $em;
        $this->managerChapitre = $managerChapitre;
    }

    public function getAllValidateTutoriel($orderby = null,$limit = null,$offset = null){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>true),$orderby,$limit,$offset);
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

    public function getAllValidateTutorielByCategory(Categorie $category,$orderBy = null,$limit = null,$offset = null){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>true,"categorie"=>$category),$orderBy,$limit,$offset);
        return $tutoriels;
    }

    public function getAllNotValidateTutorielByCategory(Categorie $category,$orderBy = null,$limit = null,$offset = null){
        $tutoriel_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Tutoriel");
        $tutoriels = $tutoriel_repository->findBy(array("valide"=>false,"categorie"=>$category),$orderBy,$limit,$offset);        return $tutoriels;
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
        $sections = $this->managerChapitre->getAllSectionChapitreByTutoriel($tuto);
/*        $chapitre_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Chapitre");
        $sections = $chapitre_repository->findBy(array("tutoriel"=>$tuto,"parent"=>null));
*/

        foreach($sections as $section){
            $this->managerChapitre->deleteSection($section);
/*            $chapitres = $chapitre_repository->findBy(array("tutoriel"=>$tuto,"parent"=>$section));
            foreach($chapitres as $chapitre){
                $unitetext_repository = $this->em->getRepository("OpenEcolesTutorialBundle:UniteTexte");
                $unite = $unitetext_repository->findOneByChapitre($chapitre);

                $this->em->remove($unite);
                $this->em->flush();

                $this->em->remove($chapitre);
            }
            $this->em->flush();
            $this->em->remove($section);*/
        }

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