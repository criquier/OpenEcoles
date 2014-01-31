<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 31/01/14
 * Time: 14:28
 */

namespace OpenEcoles\UserBundle\Controller;

class ConnexionController extends Controller{

    public function connexionAction(Request $request){
        $elements = $this->container->getParameter("elements");

        $response = $this->forward("FOSUserBundle:Security:login",$request);
        $response;
        return $response;
    }
}