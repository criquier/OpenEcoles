<?php

namespace OpenEcoles\OpenAnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenEcolesOpenAnnonceBundle:Default:index.html.twig', array('name' => $name));
    }
}
