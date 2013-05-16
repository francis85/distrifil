<?php

namespace Distrifil\CuentaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReciboType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('forma_pago')
            ->add('cuenta')
            ->add('cheques',
                        'collection',
                            array(
                                'type' => new ChequeType(),
                                'allow_add' => true,
                                'by_reference' => false
                            )
                    )
            ->add('total')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrifil\CuentaBundle\Entity\Recibo',
            'cascade_validation' => true
        ));
    }

    public function getName()
    {
        return 'distrifil_cuentabundle_recibotype';
    }
}
