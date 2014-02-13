<?php

namespace OpenEcoles\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\UserBundle\Entity\User;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * Note
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\TutorialBundle\Entity\NoteRepository")
 *
 *  @UniqueEntity(fields="tutoriel,user",message="Vous ne pouvez noter qu'une seule fois un tutoriel")
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="OpenEcoles\TutorialBundle\Entity\Tutoriel")
     */
    private $tutoriel;

    /**
    * @ORM\OneToOne(targetEntity="OpenEcoles\UserBundle\Entity\User")
    */
    private $user;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /*
     * Set user
     *
     * @param \stdClass $user
     * @return Note
     */
   /* public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }*/

    /*
     * Get user
     *
     * @return \stdClass 
     */
    /*public function getUser()
    {
        return $this->user;
    }*/

    /**
     * Set note
     *
     * @param float $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set tutoriel
     *
     * @return Tutoriel
     */
    public function setTutoriel(Tutoriel $tutoriel)
    {
        $this->tutoriel = $tutoriel;

        return $this->tutoriel;
    }

    /**
     * Get tutoriel
     *
     * @return Tutoriel
     */
    public function getTutoriel()
    {
        return $this->tutoriel;
    }

    /**
     * Set user
     *
     * @param \OpenEcoles\UserBundle\Entity\User $user
     * @return Note
     */
    public function setUser(\OpenEcoles\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \OpenEcoles\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}