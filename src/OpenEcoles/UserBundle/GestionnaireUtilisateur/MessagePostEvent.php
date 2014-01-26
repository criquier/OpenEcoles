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
use OpenEcoles\UserBundle\Entity\User;


class MessagePostEvent extends Event {
    protected $message;
    protected $auteur;
    protected $destinataire;

    public function __construct(Message $message,$auteur, User $destinataire)
    {
        $this->message  = $message;
        $this->auteur=$auteur;
        $this->destinataire     = $destinataire;
    }


    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }


    /**
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * @return \OpenEcoles\UserBundle\Entity\Message
     */
    public function getMessage()
    {
        return $this->message;
    }


} 