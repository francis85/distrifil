<?php

namespace Distrifil\CuentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descli')
            ->add('domici')
            ->add('cuit')
            ->add('cond_iva')
            ->add('locali')
            //->add('cuenta')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrifil\CuentaBundle\Entity\Cliente'
        ));
    }

    public function getName()
    {
        return 'distrifil_cuentabundle_clientetype';
    }
}
