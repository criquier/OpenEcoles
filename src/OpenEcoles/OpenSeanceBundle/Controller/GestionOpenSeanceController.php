<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 16/01/14
 * Time: 15:24
 */
namespace OpenEcoles\OpenSeanceBundle\Controller;

use OpenEcoles\OpenSeanceBundle\Entity\OpenSeance;
use OpenEcoles\OpenSeanceBundle\Forms\OpenSeanceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionOpenSeanceController extends Controller
{
    public function modifierAction(){

    }

    public function supprimerAction(){

    }

    public function visualiserAction(OpenSeance $openSeance){
        return $this->render("OpenEcolesOpenSeanceBundle:gestionOpenSeance:visualiser.html.twig",array(
            "openseance" => $openSeance,
        ));
    }

    public function visualiserAllAction(){
        $manager = $this->get("open_ecoles_open_seance.gestionOpenSeance");
        $openseances = $manager->getAllOpenSeance();
        return $this->render("OpenEcolesOpenSeanceBundle:gestionOpenSeance:visualiserAll.html.twig",array(
            "openseances" => $openseances,
        ));
    }

    public function ajouterAdminAction(){
        $openseance = new OpenSeance();

        $form = $this->createForm(new OpenSeanceType("Créer"), $openseance);
        $form->handleRequest($request);

        if($form->isValid()){
            $manager = $this->container->get("open_ecoles_open_seance.gestionOpenSeance");
            $manager->save($openseance);
            $view = $this->forward("OpenEcolesOpenSeanceBundle:gestionOpenSeance:accueilA");

            return $view;
        }

        return $this->render("OpenEcolesOpenSeanceBundle:GestionOpenSeance:ajouterAdmin.html.twig",array(
                "form" => $form->createView(),
                "action" => "Créer"
            )
        );

    }
}