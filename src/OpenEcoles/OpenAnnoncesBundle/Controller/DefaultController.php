<?php

namespace OpenEcoles\OpenAnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpenEcolesOpenAnnoncesBundle:Default:index.html.twig', array('name' => $name));
    }
}
