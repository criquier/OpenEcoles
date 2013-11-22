<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Camille
 * Date: 29/10/13
 * Time: 01:03
 * To change this template use File | Settings | File Templates.
 */

namespace OpenEcoles\TutorialBundle\Forms;

use \Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType{

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OpenEcoles\TutorialBundle\Entity\Categorie',
            'cascade_validation' => true,
        ));
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom',null,array("required"=>true));
    }

    public function getName()
    {
        return 'categorie';
    }
}