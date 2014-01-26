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
    /**
     * @ORM\OneToMany(targetEntity="OpenEcoles\UserBundle\Entity\Message", mappedBy="destinataire")
     */
    private $messages; // Listes des messages reçus

    /**
     * @ORM\Column(name="nbNouveauxMessages", type="integer")
     */
    private $nbNouveauxMessages;

    public function __construct()
    {
        parent::__construct();
        //$this->roles = new ArrayCollection();
        $this->roles = array("ROLE_AUTEUR");

    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add messages
     *
     * @param \OpenEcoles\UserBundle\Entity\Message $messages
     * @return User
     */
    public function addMessage(\OpenEcoles\UserBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;
       // $messages->setDestinataire($this);
    
        return $this;
    }

    /**
     * Remove messages
     *
     * @param \OpenEcoles\UserBundle\Entity\Message $messages
     */
    public function removeMessage(\OpenEcoles\UserBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set nbNouveauxMessages
     *
     * @param integer $nbNouveauxMessages
     * @return User
     */
    public function setNbNouveauxMessages($nbNouveauxMessages)
    {
        $this->nbNouveauxMessages = $nbNouveauxMessages;
    
        return $this;
    }

    /**
     * Get nbNouveauxMessages
     *
     * @return integer 
     */
    public function getNbNouveauxMessages()
    {
        return $this->nbNouveauxMessages;
    }
}