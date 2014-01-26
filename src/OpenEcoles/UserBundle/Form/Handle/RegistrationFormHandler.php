<?php

namespace OpenEcoles\UserBundle\Form\Handler;


use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use Doctrine\Common\Collections\ArrayCollection;
use SDR\ProfileCenterBundle\Entity\Profil;

class RegistrationFormHandler extends BaseHandler
{
    public function process($confirmation = false)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);

        if ('POST' === $this->request->getMethod()) {
            $this->form->bindRequest($this->request);

            if ($this->form->isValid()) {

                //On donne l'email comme valeur à username
                $user->setUsername($user->getEmail());
                $user->setUsernameCanonical($user->getEmailCanonical());

                $this->onSuccess($user, $confirmation);

                return true;
            }
        }

        return false;
    }
} 