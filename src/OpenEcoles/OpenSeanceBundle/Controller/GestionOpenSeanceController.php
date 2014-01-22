<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 16/01/14
 * Time: 15:24
 */
namespace OpenEcoles\OpenSeanceBundle\Controller;

use OpenEcoles\OpenSeanceBundle\Entity\OpenSeance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionOpenSeanceController extends Controller
{
    public function AccueilAction()
    {

        return $this->render('OpenEcolesOpenSeanceBundle:GestionOpenSeance:index.html.twig', array('name' => "camille"));
    }

    public function ajouterAction(){
        //creation de l'objet tutoriel
        $openseance = new OpenSeance();

        // création du formulaire
        $form = $this->createForm(new OpenSeanceType("Créer"), $tutoriel);

        //validation des données du formulaire

        if($validation->validateTutoriel($tutoriel,$form,$request)){
            $tutoriel->setAuteur($this->getUser());
            $manager = $this->container->get("open_ecoles_tutorial.gestiontutoriel");
            $manager->save($tutoriel);
            $view = $this->forward("OpenEcolesTutorialBundle:Tutoriel:accueil");
            return $view;
        }

        //Envoie du template associé à l'action => template du formulaire.
        return $this->render("OpenEcolesTutorialBundle:GestionOpenSeance:formulaire_tutoriel.html.twig",array(
            "form" => $form->createView(),
            "action" => "Créer"
        ));
    }

    public function modifierAction(){

    }

    public function supprimerAction(){

    }

    public function visualiserAction(){

    }
}