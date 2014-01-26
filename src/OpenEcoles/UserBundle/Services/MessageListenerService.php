<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 10/01/14
 * Time: 15:14
 */

namespace OpenEcoles\UserBundle\GestionnaireUtilisateur;
use OpenEcoles\UserBundle\Services\MessageBDServices;
use OpenEcoles\UserBundle\Services\UserBDServices;

class MessageListenerService {
    private  $messageRepository;
    private  $userRepository;
    public function __construct(UserBDServices $userrepository, MessageBDServices $msgrepository)
    {
        $this->userRepository = $userrepository;
        $this->messageRepository  = $msgrepository;
    }
    // on intercepte l'envoie de message et on effectue une action
    public function onMessagePost(MessagePostEvent $event)
    {
       //on ajoute le nouveau message à la liste des messages du destinataire
        $this->messageRepository->save($event->getMessage());
       // $event->getDestinataire()->ad
    }

} 