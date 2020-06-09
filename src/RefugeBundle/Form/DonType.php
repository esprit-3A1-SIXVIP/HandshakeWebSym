<?php

namespace RefugeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ruerefuge')->add('villerefuge')->add('paysrefuge')->add('longitude')->add('latitude')->add('disponibiliterefuge')->add('capaciterefuge')->add('datedebutrefuge')->add('datefinrefuge')->add('userid');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RefugeBundle\Entity\Don'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'refugebundle_don';
    }


}
