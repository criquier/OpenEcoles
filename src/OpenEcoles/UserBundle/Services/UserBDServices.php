<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 10/01/14
 * Time: 17:29
 */


namespace OpenEcoles\UserBundle\Services;

use \Doctrine\ORM\EntityManager;
use OpenEcoles\UserBundle\Entity\User;
class UserBDServices {
    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

  ///  Extrait un utilisateur de la base de données à travers son id
    public function getUserById($id){
        $user_repository = $this->em->getRepository("OpenEcolesUserBundle:User");
        $user = $user_repository->findOneBy(array('id'=>$id));
       // $user = $user_repository->findOneByUser($id);
        return $user;
    }
} 