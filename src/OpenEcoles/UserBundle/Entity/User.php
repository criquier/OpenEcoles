<?php

namespace OpenEcoles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /*
     *
     */

    /*
     * @var integer
     * @ORM\Column(name="pi", type="integer")
     */
//    protected $PI;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
