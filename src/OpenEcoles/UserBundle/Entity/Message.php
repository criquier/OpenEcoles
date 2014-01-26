<?php

namespace OpenEcoles\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Message
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=9999999)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur; // La personne ayant redigé le message

    /**
     * @ORM\ManyToOne(targetEntity="OpenEcoles\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $destinataire; // La personne à qui le message est destiné

    /**
     * @ORM\Column(name="lu", type="boolean")
     */
    private $lu; // Si le message est lu ou non

    /**
     * Contructeur par defaut. La date du message correspond à la date du jour
     *
     */
    public function __construct()
    {
        $this->date         = new \Datetime;
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
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Message
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set destinataire
     *
     * @param \OpenEcoles\UserBundle\Entity\User $destinataire
     * @return Message
     */
    public function setDestinataire(\OpenEcoles\UserBundle\Entity\User $destinataire)
    {
        $this->destinataire = $destinataire;
        $destinataire->addMessage($this);
    
        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \OpenEcoles\UserBundle\Entity\User 
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }


    /**
     * Set lu
     *
     * @param boolean $lu
     * @return Message
     */
    public function setLu($lu)
    {
        $this->lu = $lu;
    
        return $this;
    }

    /**
     * Get lu
     *
     * @return boolean 
     */
    public function getLu()
    {
        return $this->lu;
    }
}