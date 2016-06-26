<?php
/**
 * Created by PhpStorm.
 * User: Manuel
 * Date: 26/6/16
 * Time: 17:55
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormExampleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('language','language');
        $builder->add('treatment','treatment');
    }


    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'form_example';
    }
}