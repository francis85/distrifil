<?php

namespace Distrifil\CuentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LineaFacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cant')
            ->add('precio_un')
            ->add('factura')
            ->add('producto')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrifil\CuentaBundle\Entity\LineaFactura'
        ));
    }

    public function getName()
    {
        return 'distrifil_cuentabundle_lineafacturatype';
    }
}
