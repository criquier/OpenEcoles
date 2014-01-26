<?php

namespace OpenEcoles\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenEcolesBackOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
