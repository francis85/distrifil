<?php

namespace Distrifil\CuentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('letra')
            ->add('fecha')
            ->add('afecta')
            ->add('subtotal')
            ->add('montoIva')
            ->add('total')
            ->add('cliente')
            ->add('cuenta')
            ->add('recibos')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrifil\CuentaBundle\Entity\Factura'
        ));
    }

    public function getName()
    {
        return 'distrifil_cuentabundle_facturatype';
    }
}
