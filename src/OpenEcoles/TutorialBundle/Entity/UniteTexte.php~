<?php

namespace OpenEcoles\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniteTexte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\TutorialBundle\Entity\UniteTexteRepository")
 */
class UniteTexte
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @ORM\OneToOne(targetEntity="OpenEcoles\TutorialBundle\Entity\Chapitre")
     */
    private $chapitre;

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
     * Set contenu
     *
     * @param string $contenu
     * @return UniteTexte
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
     * Set chapitre
     *
     * @param \OpenEcoles\TutorialBundle\Entity\Chapitre $chapitre
     * @return UniteTexte
     */
    public function setChapitre(\OpenEcoles\TutorialBundle\Entity\Chapitre $chapitre = null)
    {
        $this->chapitre = $chapitre;
    
        return $this;
    }

    /**
     * Get chapitre
     *
     * @return \OpenEcoles\TutorialBundle\Entity\Chapitre 
     */
    public function getChapitre()
    {
        return $this->chapitre;
    }
}