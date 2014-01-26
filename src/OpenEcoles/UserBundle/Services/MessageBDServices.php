<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 10/01/14
 * Time: 17:28
 */

namespace OpenEcoles\UserBundle\Services;
use \Doctrine\ORM\EntityManager;
use OpenEcoles\UserBundle\Entity\Message;
use OpenEcoles\UserBundle\Entity\User;

class MessageBDServices {
    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }
   // retourne la liste des messages reçus par un utilisateur
    public function getAllMessagesByUser($id){
        $message_repository = $this->em->getRepository("OpenEcolesUserBundle:Message");
        $query = $message_repository->createQueryBuilder('m')
            ->leftJoin('m.destinataire', 'd')
            ->where('d.id =:id')
            ->setParameter('id', $id)
            ->orderBy('m.date', 'ASC')
            ->getQuery();

        return $query->getResult();
    }
    //retourne la liste de x messages les plus recents
    public function getMostRecentMessagesByUser($id,$nbmessages){
        $message_repository = $this->em->getRepository("OpenEcolesUserBundle:Message");
        $query = $message_repository->createQueryBuilder('m')
            ->leftJoin('m.destinataire','d')
            ->where('d.id =:id')
            ->setParameter('id',$id)
            ->setMaxResults($nbmessages)
            ->orderBy('m.date','ASC')
            ->getQuery();

        return $query->getResult();
    }

    public function delete(Message $message){
         $this->em->remove($message);
         $this->em->flush();
    }

    public function save(Message $message){
        $this->em->persist($message);
        $this->em->flush();
    }
}