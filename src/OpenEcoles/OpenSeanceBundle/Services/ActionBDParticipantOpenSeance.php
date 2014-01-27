<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 16/01/14
 * Time: 15:41
 */

namespace OpenEcoles\OpenSeanceBundle\Services;

use \Doctrine\ORM\EntityManager;

use OpenEcoles\OpenSeanceBundle\Entity\ParticipantOpenSeance;
use OpenEcoles\OpenSeanceBundle\Entity\OpenSeance;
use OpenEcoles\UserBundle\Entity\User;


class ActionBDParticipantOpenSeance{

    protected $repository;
    protected $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
        $this->repository = $this->em->getRepository("OpenEcolesOpenSeanceBundle:ParticipantOpenSeance");
    }

    public function save(ParticipantOpenSeance $particpantopenseance){
        $this->em->persist($particpantopenseance);
        $this->em->flush();
    }

    public function saveParticipant(User $user,OpenSeance $openseance){
        $participation = new ParticipantOpenSeance();
        $participation->setUser($user);
        $participation->setOpenseance($openseance);
        $this->save($participation);
    }

    public function getAllParticpantToOpenSeance($openseance){
        return $this->repository->findByOpenseance($openseance);
    }
}