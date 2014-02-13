<?php

namespace OpenEcoles\AnnexeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenEcolesAnnexeBundle:Default:index.html.twig', array('name' => $name));
    }
}
