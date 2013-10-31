<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 28/10/13
 * Time: 19:40
 * To change this template use File | Settings | File Templates.
 */


namespace OpenEcoles\TutorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller {


    public function indexAction(){
       $manager =  $this->container->get("open_ecoles_tutorial.gestioncategorie");
       $categories = $manager->getAllCategories();

        return $this->render("OpenEcolesTutorialBundle:Categorie:index.html.twig",array(
            "categories" => $categories,
        ));
    }
}