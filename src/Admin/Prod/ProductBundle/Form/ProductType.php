<?php

namespace Admin\Prod\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('createAt')
            ->add('isNew')
            ->add('prodAlias')
            ->add('prodName')
            ->add('dphId','entity',array(
                'class' => 'AdminProdDphBundle:Dph',
                'query_builder' => function($repository) { return $repository->createQueryBuilder('p')->where('p.visible = 1'); },
                'property' => 'name'
            ))
            ->add('price','integer');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\Prod\ProductBundle\Entity\Product'
        ));
    }


    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_prod_productbundle_product';
    }
}
