<?php

namespace OpenEcoles\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutoriel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\TutorialBundle\Entity\TutorielRepository")
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
     */
    private $titre;

    /**
     *@var boolean
     *
     *@ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    public function __construct(){
        $this->valide = false;
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
}
