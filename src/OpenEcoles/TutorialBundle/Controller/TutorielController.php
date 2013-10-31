<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 20/10/13
 * Time: 19:16
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\TutorialBundle\Controller;

use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Forms\TutorielType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TutorielController extends Controller{

    public function accueilAction(){
        $manager = $this->container->get("open_ecoles_tutorial.gestiontutoriel");
        $tutoriels = $manager->getAllValidateTutoriel();

        $managerCategorie = $this->container->get("open_ecoles_tutorial.gestionCategorie");
        $categories = $managerCategorie->getAllCategories();

        return $this->render("OpenEcolesTutorialBundle:Tutoriel:index.html.twig",array(
        	"tutoriels" => $tutoriels,
            "categories" => $categories,
        ));
    }

    public function backAccueilAction(){
        $managerTuto = $this->container->get("open_ecoles_tutorial.gestiontutoriel");
        $tutoriels = $managerTuto->getAllValidateTutoriel();

        $managerCategorie = $this->container->get("open_ecoles_tutorial.gestionCategorie");
        $categories = $managerCategorie->getAllCategories();

        return $this->render("OpenEcolesTutorialBundle:Tutoriel:backIndex.html.twig",array(
            "tutoriels" => $tutoriels,
            "categories" => $categories,
        ));
    }

    public function creerTutorielAction(Request $request){
        //creation de l'objet tutoriel
        $tutoriel = new Tutoriel();
        $tutoriel->setCategorie("Informatique");

        // création du formulaire
        $form = $this->createForm(new TutorielType("Créer"), $tutoriel);

        //validation des données du formulaire
        $validation = $this->get("open_ecoles_tutorial.validationTutoriel");
        if($validation->validateTutoriel($tutoriel,$form,$request)){
            $manager = $this->container->get("open_ecoles_tutorial.gestiontutoriel");
            $manager->save($tutoriel);
            $view = $this->forward("OpenEcolesTutorialBundle:Tutoriel:accueil");
            return $view;
        }

        //Envoie du template associé à l'action => template du formulaire.
        return $this->render("OpenEcolesTutorialBundle:Tutoriel:formulaire_tutoriel.html.twig",array(
           "form" => $form->createView(),
            "action" => "Créer"
        ));
    }

    public function modifierTutorielAction(Tutoriel $tutoriel,Request $request){
        // création du formulaire
        $form = $this->createForm(new TutorielType("Modifier"), $tutoriel);

        //validation des données du formulaire
        $validation = $this->get("open_ecoles_tutorial.validationTutoriel");
        if($validation->validateTutoriel($tutoriel,$form,$request)){
            $manager = $this->container->get("open_ecoles_tutorial.gestiontutoriel");
            $manager->save($tutoriel);
            $view = $this->forward("OpenEcolesTutorialBundle:Tutoriel:accueil");

            return $view;
        }

        return $this->render("OpenEcolesTutorialBundle:Tutoriel:formulaire_tutoriel.html.twig",array(
            "form" => $form->createView(),
            "action" => "Modifier"
            )
        );
    }

    public function supprimerTutorielAction(Tutoriel $tutoriel){
        $manager = $this->container->get("open_ecoles_tutorial.gestiontutoriel");

        $manager->delete($tutoriel);

        return new Response("ok");
    }

    public function validerTutorielAction(Tutoriel $tutoriel){
        $manager = $this->container->get("open_ecoles_tutorial.gestiontutoriel");

        $manager->validate($tutoriel);
        $manager->save($tutoriel);

        return new Response("ok");
    }

    public function visualiserTutorielAction(Tutoriel $tutoriel){
        return $this->render("OpenEcolesTutorialBundle:Tutoriel:visualiserTutoriel.html.twig",array(
            "tutoriel" => $tutoriel,
        ));
    }
}