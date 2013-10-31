<?php

namespace OpenEcoles\TutorialBundle\Services;

use \Doctrine\ORM\EntityManager;

class ActionBDCategorie{

    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function getAllCategories(){
        $category_repository = $this->em->getRepository("OpenEcolesTutorialBundle:Categorie");
        $categories = $category_repository->findAll();
        return $categories;
    }

    public function delete(Categorie $categorie){
        $this->em->getRepository("OpenEcolesTutorialBundle:Categorie");

       /* $this->em->remove($categorie);
        $this->em->flush();*/
    }

    public function save(Categorie $categorie){
        $this->em->persist($categorie);
        $this->em->flush();
    }
}