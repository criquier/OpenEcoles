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
        $builder->add('titre',null,array("required"=>true));
        $builder->add('description',null,array("required"=>true,"attr"=>array("class"=>"tinymce")));
        $builder->add('dateDebut',"text",array("required"=>true));
        $builder->add('dateFin',"text",array("required"=>true));
        $builder->add('organisateur',null,array("required"=>true));
    }

    public function getName()
    {
        return 'openseance';
    }
}

