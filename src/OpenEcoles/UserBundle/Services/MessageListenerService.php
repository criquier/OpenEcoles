<?php
/**
 * Created by PhpStorm.
 * User: barry
 * Date: 10/01/14
 * Time: 15:14
 */

namespace OpenEcoles\UserBundle\Services;
use OpenEcoles\UserBundle\Entity\Message;
use OpenEcoles\UserBundle\GestionnaireUtilisateur\MessagePostEvent;


class MessageListenerService {
    private  $messageRepository;
    private  $userRepository;
    public function __construct(MessageBDServices $msgrepository,UserBDServices $userrepository)
    {
        $this->userRepository = $userrepository;
        $this->messageRepository  = $msgrepository;
    }
    // on intercepte l'envoie de message et on effectue une action
    public function onMessagePost(MessagePostEvent $event)
    {
       // $message=$event->getMessage();
        $message=new Message();

        $auteur=$this->userRepository->getUserById($event->getIdauteur());
        $destinataire=$this->userRepository->getUserById($event->getIddestinataire());

        $message->setAuteur($auteur);
        $message->setDestinataire($destinataire);
        $message->setContenu($event->getContenu());
        //return new Response('bienvenue');
       //on ajoute le nouveau message à la liste des messages du destinataire

       $this->messageRepository->save($message);
    }

} 