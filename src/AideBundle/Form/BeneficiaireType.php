<?php

namespace AideBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BeneficiaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('aide',EntityType::class,
            array('class'=>'AideBundle\Entity\Aide',
                'choice_label'=>'categorieAide',
                'disabled'   => false
            ) )
            ->add('nombeneficiaire')
            ->add('prenombeneficiaire')
            ->add('email')
            ->add('datenaissance')
            ->add('ville')
            ->add('telephone')
            ->add('adressegps')
            ->add('role')
            ->add('role', ChoiceType::class, [
                'choices'  => [
                    'besoin' => 'besoin',
                    'nationalite' => 'nationalite',
                ],
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AideBundle\Entity\Beneficiaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'aidebundle_beneficiaire';
    }


}
