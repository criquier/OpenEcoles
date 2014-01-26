<?php

namespace OpenEcoles\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OpenEcoles\UserBundle\Entity\Message;
use OpenEcoles\UserBundle\GestionnaireUtilisateur\UserEvents;
use OpenEcoles\UserBundle\Entity\User;
use \Symfony\Component\HttpFoundation\Response;
use \Symfony\Component\HttpFoundation\JsonResponse;
//use OpenEcoles\UserBundle\Entity\User;
use OpenEcoles\UserBundle\GestionnaireUtilisateur\MessagePostEvent;

class MessageController extends Controller
{
    /**
     * @param $id
     * Permet d'afficher la liste des messages les plus recents
     */
    public function indexMessageAction(){
        $messageService = $this->container->get("OpenEcoles_user.gestionBDMessages");
       $messages= $messageService->getAllMessagesByUser($this->getUser()->getId());

        return $this->render('OpenEcolesUserBundle:Message:visualiserMessages.html.twig',
            array('user' => $this->getUser(),
                 'messages'=>$messages,
            ));
    }

    /**
     * @param $name
     * Cette fonction est mapper àl'URl d'envoie de message
     */
    public function envoyerMessageAction($idauteur,$iddestinataire)
    {


        $request = $this->getRequest();
        if($request->isXmlHttpRequest()){
            $message=new Message();
            $messageText = $request->request->get("message");
            $message->setContenu($messageText);
            // On déclenche l'évènement en passant en parametre  le nom de l'auteur et le destinataire
             //$event = new MessagePostEvent($idauteur,$iddestinataire,$messageText);
             //$this->get('event_dispatcher')->dispatch(UserEvents::onMessagePost, $event);
             $userService = $this->container->get("OpenEcoles_user.gestionBDUsers");
             $messageService = $this->container->get("OpenEcoles_user.gestionBDMessages");
             $auteur=$userService->getUserById($idauteur);
             $destinataire=$userService->getUserById($iddestinataire);

             $message->setAuteur($auteur);
             $message->setDestinataire($destinataire);
             $messageService->save($message);

            return new JsonResponse(array('message'=> "message",
                //'auteur '=> $message->getAuteur()->getUsername()
            ));
        }



    }

    /**
     * Affiche les details d'une conversation
     */
    public function conversationMessageAction($idauteur,$iddestinataire){
       $messageService = $this->container->get("OpenEcoles_user.gestionBDMessages");
       $conversation=$messageService->getConversationBetweenUsers($idauteur,$iddestinataire);
      // $destinataire="said";
        return $this->render('OpenEcolesUserBundle:Message:visualiserConversation.html.twig',
            array('conversation' => $conversation,
                'idauteur' => $idauteur,
                'iddestinataire'=> $iddestinataire,
            ));

    }

    /**
     * @param $id
     * A travers l'id on accède à la page personnelle de l'utilisateur
     */
    public function consulterMessageAction($idauteur,$iddestinataire){
        /* On effectue la requête sur la table contenant les messages. On récupère
          les 100 derniers messages. Enfin, on affiche le tout. */

        $messageService = $this->container->get("OpenEcoles_user.gestionBDMessages");

        // on recupère tous les messages de la conversation
        $messages= $messageService->getConversationBetweenUsers($idauteur,$iddestinataire);
        $count = sizeof($messages);
        $resultat = '';
        if($count != 0) {


            // on recupère l'id du l'utilisateur courant
            foreach( $messages as $message )  {
              $resultat.='Auteur: '.$message->getAuteur()->getUsername().'   ';
              $resultat.=$message->getDate()->format('d/m/Y H:i:s').'  ';
              $resultat.=$message->getContenu().'</br>';
            }


        } else {
            $resultat = 'Aucun message n\'a été envoyé pour le moment.';
        }
        return new JsonResponse(array('messages' =>$resultat ));
    }
}
