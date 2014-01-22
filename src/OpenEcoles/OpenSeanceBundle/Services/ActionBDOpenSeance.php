<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 16/01/14
 * Time: 15:41
 */

namespace OpenEcoles\OpenSeanceBundle\Service;

use OpenEcoles\OpenSeanceBundle\Entity\OpenSeance;

class ActionBDOpenSeance{

    protected $repository;
    protected $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
        $this->repository = $this->em->getRepository("OpenEcolesOpenSeanceBundle:OpenSeance");
    }

    public function save(OpenSeance $openseance){
        $this->em->persist($openseance);
        $this->em->flush();
    }

    public function getAllOpenSeance(){
        return $this->repository->findAll();
    }

    public function getOpenSeancesById($id){
        return $this->repository->findById($id);
    }

    public function getOpenSeancesByTitle($id){
        return $this->repository->findById($id);
    }

    public function getTopOpenSeance(){

    }
}