<?php

namespace DonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DonEspeceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typeDon',TextType::class,['attr'=>['readonly'=>true]])->add('montantDon')->add('cibleDon',TextType::class,['attr'=>['placeholder'=>"Entrez la cible de votre don"]])->add('dateDon',DateType::class,['attr'=>['disabled'=> true]]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DonBundle\Entity\DonEspece'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'donbundle_donespece';
    }


}
