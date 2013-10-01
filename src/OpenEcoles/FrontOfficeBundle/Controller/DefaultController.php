<?php

namespace OpenEcoles\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenEcolesFrontOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
