<?php

namespace OpenEcoles\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OpenEcoles\UserBundle\Entity\Message;
use OpenEcoles\UserBundle\GestionnaireUtilisateur\UserEvents;
use OpenEcoles\UserBundle\Form\MessageType;
use OpenEcoles\UserBundle\GestionnaireUtilisateur\MessagePostEvent;

class MessageController extends Controller
{
    /**
     * @param $id
     * Permet d'afficher la liste des messages les plus recents
     */
    public function indexMessageAction($id){
        return $this->render('OpenEcolesUserBundle:Message:visualiserMessages.html.twig');
    }

    /**
     * @param $name
     * Cette fonction est mapper àl'URl d'envoie de message
     */
    public function envoyerMessageAction()
    {
        $message = new Message();
        $form = $this->createForm(new MessageType(), $message);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                // On déclenche l'évènement en passant en parametre  le nom de l'auteur et le destinataire
               // $event = new MessagePostEvent($message,$auteur,$destinataire));
                $this->get('event_dispatcher')
                    ->dispatch(UserEvents::onMessagePost, $event);
            }
        }
        return $this->render('OpenEcolesUserBundle:Message:visualiserMessages.html.twig',array(
        'form' => $form->createView(),
    ));

    }

    /**
     * @param $id
     * A travers l'id on accède à la page personnelle de l'utilisateur
     */
    public function consulterMessageAction($id){

    }
}
