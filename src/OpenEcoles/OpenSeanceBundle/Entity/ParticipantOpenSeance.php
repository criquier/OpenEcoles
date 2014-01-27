<?php

namespace OpenEcoles\OpenSeanceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipantOpenSeance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OpenEcoles\OpenSeanceBundle\Entity\ParticipantOpenSeanceRepository")
 */
class ParticipantOpenSeance
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
     *
     * @ORM\ManyToOne(targetEntity="OpenEcoles\UserBundle\Entity\User")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="OpenEcoles\OpenSeanceBundle\Entity\OpenSeance")
     */
    private $openseance;


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
     * Set user
     *
     * @param \OpenEcoles\UserBundle\Entity\User $user
     * @return ParticipantOpenSeance
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

    /**
     * Set openseance
     *
     * @param \OpenEcoles\OpenSeanceBundle\Entity\OpenSeance $openseance
     * @return ParticipantOpenSeance
     */
    public function setOpenseance(\OpenEcoles\OpenSeanceBundle\Entity\OpenSeance $openseance = null)
    {
        $this->openseance = $openseance;
    
        return $this;
    }

    /**
     * Get openseance
     *
     * @return \OpenEcoles\OpenSeanceBundle\Entity\OpenSeance 
     */
    public function getOpenseance()
    {
        return $this->openseance;
    }
}