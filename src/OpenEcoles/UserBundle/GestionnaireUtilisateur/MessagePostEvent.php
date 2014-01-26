<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 10/01/14
 * Time: 12:59
 */

namespace OpenEcoles\UserBundle\GestionnaireUtilisateur;
use Symfony\Component\EventDispatcher\Event;
use OpenEcoles\UserBundle\Entity\Message;


class MessagePostEvent extends Event {
    protected $contenu;
    protected $idauteur;
    protected $iddestinataire;

    public function __construct($idauteur, $iddestinataire,$contenu)
    {
        $this->conteu  = $contenu;
        $this->auteur=$idauteur;
        $this->destinataire     = $iddestinataire;
    }


    /**
     * @return mixed
     */
    public function getIdauteur()
    {
        return $this->idauteur;
    }

    public function setIdauteur($id)
    {
        $this->idauteur=$id;
        return $this;
    }

    /**
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public function getIddestinataire()
    {
        return $this->destinataire;

    }

    public function setIddestinataire($id)
    {
        $this->iddestinataire=$id;
        return $this;
    }

    /**
     * @return \OpenEcoles\UserBundle\Entity\Message
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu=$contenu;
        return $this;
    }


} 