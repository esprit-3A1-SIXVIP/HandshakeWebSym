<?php

namespace DonBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class DonNatureType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typeDon',TextType::class,['attr'=>['readonly'=>true]])->add('cibleDon',TextType::class,['attr'=>['placeholder'=>"Entrez la cible de votre don"]])->add('libelleDonNature',TextType::class,['attr'=>['placeholder'=>"détails de votre don"]])->add('categorieDonNature',ChoiceType::class,['choices'=>['Alimentaires'=>"Alimentaires",'Vestimentaires'=>"Vestimentaires",'Autres'=>"Autres"]])->add('dateDon');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DonBundle\Entity\DonNature'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'donbundle_donnature';
    }


}
