<?php

namespace App\Form;

use App\Entity\PersonDetail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PersonDetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', NumberType::class,
            [
                'label' => 'Person ID',
                'required' => true
            ])
            ->add('nationality', ChoiceType::class,
            [
                'label' => 'Person Nationality',
                'choices' => [
                    'Vietnam' => 'Vietnam',
                    'Thailand' => 'Thailand',
                    'Singapore' => 'Singapore'
                ]
            ])
            ->add('address', TextType::class,
            [
                'label' => 'Person Address',
                'required' => true
            ])
            ->add('mobile',  NumberType::class,
            [
                'label' => 'Mobile Number',
                'required' => true
            ])
            ->add('birthday', DateType::class,
            [
                'widget' => 'single_text'
            ])
            //->add('Save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PersonDetail::class,
        ]);
    }
}
