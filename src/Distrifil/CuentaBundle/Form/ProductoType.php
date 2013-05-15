<?php

namespace Distrifil\CuentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descrip')
            ->add('precio')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrifil\CuentaBundle\Entity\Producto'
        ));
    }

    public function getName()
    {
        return 'distrifil_cuentabundle_productotype';
    }
}
