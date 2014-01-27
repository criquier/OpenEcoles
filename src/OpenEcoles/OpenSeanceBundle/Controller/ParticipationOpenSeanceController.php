<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 16/01/14
 * Time: 15:24
 */
namespace OpenEcoles\OpenSeanceBundle\Controller;

use OpenEcoles\OpenSeanceBundle\Entity\OpenSeance;
use OpenEcoles\OpenSeanceBundle\Entity\ParticipantOpenSeance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ParticipationOpenSeanceController extends Controller
{

    public function inscriptionAction(OpenSeance $openseance){
        $participation = new ParticipantOpenSeance();
        $participation->setOpenSeance($openseance);
        $participation->setUser($this->getUser());

        $manager = $this->get("open_ecoles_open_seance.participationOpenSeance");
        $manager->save($participation);

        return new Response("ok");
    }

    public function desinscriptionAction(OpenSeance $openseance){

    }
}