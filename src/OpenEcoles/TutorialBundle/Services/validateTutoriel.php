<?php

namespace OpenEcoles\TutorialBundle\Services;

use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;

use OpenEcoles\TutorialBundle\Entity\Tutoriel;
use \OpenEcoles\TutorialBundle\Entity\UniteTexte;


class ValidateTutoriel{

    private $errors;
    public function __construct(){
    }

    public function validateTutoriel(Tutoriel $tutoriel, Form $form, Request $request){
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if($form->isValid()){
                return $tutoriel;
            }else{
                return null;
            }
        }
        else{
            return null;
        }
    }

    public function getErrorValidation(){
        return $this->errors;
    }

    public function validateChapter(Chapitre $chapitre,Form $form, Request $request){
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if($form->isValid()){
                return $chapitre;
            }else{
                return null;
            }
        }
        else{
            return null;
        }
    }

    public function validateChapterWithUniteText(UniteTexte $chapitre,Form $form, Request $request){
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if($form->isValid()){
                return $chapitre;
            }else{
                return null;
            }
        }
        else{
            return null;
        }
    }
}