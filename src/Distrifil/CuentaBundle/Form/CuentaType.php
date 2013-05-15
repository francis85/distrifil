<?php

namespace Distrifil\CuentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CuentaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('saldo')
            ->add('cliente')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrifil\CuentaBundle\Entity\Cuenta'
        ));
    }

    public function getName()
    {
        return 'distrifil_cuentabundle_cuentatype';
    }
}
