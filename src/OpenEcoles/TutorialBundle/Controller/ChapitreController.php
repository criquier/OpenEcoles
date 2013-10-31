<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 20/10/13
 * Time: 19:17
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\TutorialBundle\Controller;

use OpenEcoles\TutorialBundle\Entity\Chapitre;
use OpenEcoles\TutorialBundle\Entity\UniteTexte;
use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use OpenEcoles\TutorialBundle\Forms\ChapitreType;
use OpenEcoles\TutorialBundle\Forms\UniteTextType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Request;

class ChapitreController extends Controller{

    public function accueilAction(Tutoriel $tutoriel){
        $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
        $chapitres = $manager->getAllSectionChapitreByTutoriel($tutoriel);
        return $this->render("OpenEcolesTutorialBundle:Chapitre:index.html.twig",array(
            "chapitres" => $chapitres,
        ));
    }

    public function affichageChapitreSectionAction(Chapitre $section){

        $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
        $chapitres = $manager->getChapitreBySection($section);
        return $this->render("OpenEcolesTutorialBundle:Chapitre:affichageChapitreSection.html.twig",array(
            "chapitres"=>$chapitres,
        ));
    }

    public function visualiserChapitreAction(Chapitre $chapitre){
        $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
        $unitetext = $manager->getUniteTextByChapitre($chapitre);

        return $this->render("OpenEcolesTutorialBundle:Chapitre:visualiserChapitre.html.twig",array(
            "unitetext" => $unitetext,
        ));
    }

    public function creerSectionAction(Tutoriel $tutoriel, Request $request){
        $chapitre = new Chapitre();
        $chapitre->setTutoriel($tutoriel);
        $chapitre->setOrdre(1);
        $chapitre->setTitre("Un titre");

        $unitetext = new UniteTexte();
        $unitetext->setChapitre($chapitre);

        $form = $this->createForm(new UniteTextType(),$unitetext);

        $validator = $this->get("open_ecoles_tutorial.validationTutoriel");
        if($validator->validateChapterWithUniteText($unitetext, $form, $request)){
            $manager = $this->get("open_ecoles_tutorial.gestionChapitre");

            $manager->saveChapitre($unitetext->getChapitre());
            $manager->saveTexte($unitetext);
            return $this->forward("OpenEcolesTutorialBundle:Tutoriel:visualiserTutoriel",array(
                "id"=>$tutoriel->getId()
            ));
        }
        return $this->render("OpenEcolesTutorialBundle:Chapitre:formulaireChapitre.html.twig",array(
            "form" => $form->createView(),
        ));
    }

    public function creerChapitreAction(Chapitre $chapter, Request $request){
        $chapitre = new Chapitre();
        $chapitre->setTutoriel($chapter->getTutoriel());
        $chapitre->setParent($chapter);
        $chapitre->setOrdre(1);
        $chapitre->setTitre("Un titre");

        $unitetext = new UniteTexte();
        $unitetext->setChapitre($chapitre);

        $form = $this->createForm(new UniteTextType(),$unitetext);

        $validator = $this->get("open_ecoles_tutorial.validationTutoriel");
        if($validator->validateChapterWithUniteText($unitetext, $form, $request)){
            $manager = $this->get("open_ecoles_tutorial.gestionChapitre");

            $manager->saveChapitre($unitetext->getChapitre());
            $manager->saveTexte($unitetext);
            return $this->forward("OpenEcolesTutorialBundle:Chapitre:visualiserChapitre",array(
                "id" => $chapter->getId()
            ));
        }
        return $this->render("OpenEcolesTutorialBundle:Chapitre:formulaireChapitre.html.twig",array(
            "form" => $form->createView(),
        ));
    }

    public function modifierChapitreAction(Chapitre $chapitre, Request $request){
        $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
        $unitetext = $manager->getUnitetextByChapitre($chapitre);

        $form = $this->createForm(new UniteTextType(),$unitetext);

        $validator = $this->get("open_ecoles_tutorial.validationTutoriel");
        if($validator->validateChapterWithUniteText($unitetext, $form, $request)){
            $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
            $manager->saveChapitre($unitetext->getChapitre());
            $manager->saveTexte($unitetext);
            return $this->forward("OpenEcolesTutorialBundle:Chapitre:visualiserChapitre",array(
                "id"=>$chapitre->getId()
            ));
        }
        return $this->render("OpenEcolesTutorialBundle:Chapitre:formulaireChapitre.html.twig",array(
            "form" => $form->createView(),
        ));
    }

    public function supprimerChapitreAction(Chapitre $chapitre){
        $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
        $manager->delete($chapitre);
    }

    public function supprimerSectionAction(Chapitre $chapitre){
        $manager = $this->get("open_ecoles_tutorial.gestionChapitre");
        $manager->deleteSection($chapitre);
    }
}