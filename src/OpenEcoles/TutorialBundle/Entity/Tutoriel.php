<?php

namespace OpenEcoles\TutorialBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use \OpenEcoles\UserBundle\Entity\User;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Tutoriel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\TutorialBundle\Entity\TutorielRepository")
 * @UniqueEntity(fields="titre",message="Il existe déja un tutoriel avec ce titre-ci")
 */
class Tutoriel
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     *
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity="OpenEcoles\TutorialBundle\Entity\Categorie")
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     *
     *
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="OpenEcoles\UserBundle\Entity\User")
     */
    private $auteur;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateDeCreation", type="datetime")
     */
    private $dateCreation;

    /**
     *@var boolean
     *
     *@ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    public function __construct(){
        $this->valide = false;
        $this->dateCreation = new \DateTime();
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
     * Set titre
     *
     * @param string $titre
     * @return Tutoriel
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Tutoriel
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Tutoriel
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Tutoriel
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Tutoriel
     */
    public function setDateCreation(\DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set auteur
     *
     * @param \OpenEcoles\UserBundle\Entity\User $auteur
     * @return Tutoriel
     */
    public function setAuteur(User $auteur = null)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return \OpenEcoles\UserBundle\Entity\User 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}