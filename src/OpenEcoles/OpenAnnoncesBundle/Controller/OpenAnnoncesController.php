<?php

namespace OpenEcoles\OpenAnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OpenAnnoncesController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenEcolesOpenAnnoncesBundle:Default:index.html.twig');
    }
}
