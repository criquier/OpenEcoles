<?php

namespace OpenEcoles\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('date')
            ->add('contenu')
            ->add('auteur')
           // ->add('lu')
            ->add('destinataire')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OpenEcoles\UserBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'openecoles_userbundle_message';
    }
}
