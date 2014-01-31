<?php

namespace OpenEcoles\OpenSeanceBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class OpenSeanceType extends AbstractType{

    private $action;

    public function __construct($action){
        $this->action = $action;
    }

   /* public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OpenEcoles\TutorialBundle\Entity\Tutoriel',
        ));
    }*/

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Titre',null,array("required"=>true));
        $builder->add('Description',null,array("required"=>true,"attr"=>array("class"=>"tinymce")));
        $builder->add('Date de Debut',"text",array("required"=>true));
        $builder->add('Date de Fin',"text",array("required"=>true));
        $builder->add('Lieu',null,array("required"=>true));
        $builder->add('Organisateur',null,array("required"=>true));
    }

    public function getName()
    {
        return 'openseance';
    }
}

