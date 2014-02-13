<?php

namespace OpenEcoles\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            //Retrait du champ username, qui sera égal à l'email
            //->add('username')
            ->add('prenom', 'prenom')
            ->add('nom', 'nom')
            ->add('email', 'email')
            ->add('plainPassword', 'repeated', array('type' => 'password'));

    }

    public function getName()
    {
        return 'OpenEcoles_user_registration';
    }
}

