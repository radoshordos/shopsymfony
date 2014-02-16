<?php

namespace Admin\Tools\CalculatorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CalculatorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('string', 'text');
        $builder->add('md5', 'text', array('required' => false, 'disabled' => true));
        $builder->add('sha1', 'text', array('required' => false, 'disabled' => true));
        $builder->add('time', 'text', array('required' => false, 'disabled' => true));
        $builder->add('save', 'submit', array(
            'attr' => array('class' => 'btn btn-primary btn-lg center'),
            'label' => 'Spočítat'
        ));
    }

    public function getName()
    {
        return 'calculator';
    }
}
