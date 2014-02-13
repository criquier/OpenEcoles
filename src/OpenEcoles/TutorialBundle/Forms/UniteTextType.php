<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 29/10/13
 * Time: 01:11
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\TutorialBundle\Forms;

use OpenEcoles\TutorialBundle\Forms\ChapitreType;

use \Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UniteTextType extends AbstractType{

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OpenEcoles\TutorialBundle\Entity\UniteTexte',
            'cascade_validation' => true,
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("chapitre",new ChapitreType());
        $builder->add('contenu',null,array("required"=>true,"attr"=>array("class"=>"tinymce")));
    }

    public function getName()
    {
        return 'unitetexte';
    }
}