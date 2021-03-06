<?php

namespace OpenEcoles\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\TutorialBundle\Entity\ChapitreRepository")
 */
class Chapitre
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
     * @ORM\ManyToOne(targetEntity="OpenEcoles\TutorialBundle\Entity\Chapitre")
     */
    private $parent;

    /**
     * @ORM\ManyToOne(targetEntity="OpenEcoles\TutorialBundle\Entity\Tutoriel")
     */
    private $tutoriel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;


    /*
     * @var integer
     *
     * @ORM\Column(name="ordreParent", type="integer")
     */
    //private $orderParent;


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
     * @return Chapitre
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
     * Set parent
     *
     * @param Chapitre $parent
     * @return Chapitre
     */
    public function setParent(Chapitre $parent){
        $this->parent = $parent;

        return $this;
    }

    public function getParent(){
        return $this->parent;
    }

    /**
     * Set tutoriel
     *
     * @param \OpenEcoles\TutorialBundle\Entity\Tutoriel $tutoriel
     * @return Chapitre
     */
    public function setTutoriel(\OpenEcoles\TutorialBundle\Entity\Tutoriel $tutoriel = null)
    {
        $this->tutoriel = $tutoriel;
    
        return $this;
    }

    /**
     * Get tutoriel
     *
     * @return \OpenEcoles\TutorialBundle\Entity\Tutoriel 
     */
    public function getTutoriel()
    {
        return $this->tutoriel;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     * @return Chapitre
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set orderParent
     *
     * @param integer $orderParent
     * @return Chapitre
     */
    public function setOrderParent($orderParent)
    {
        $this->orderParent = $orderParent;
    
        return $this;
    }

    /**
     * Get orderParent
     *
     * @return integer 
     */
    public function getOrderParent()
    {
        return $this->orderParent;
    }
}