<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', TextType::class, 
                [
                    'required' => true,
                    'label' => "Student Name",
                    'attr' => [
                        'minlength' => 3,
                        'maxlength' => 30
                    ]
                ])
            ->add('Age', IntegerType::class,
                [
                    'attr' => [
                        'min' => 20,
                        'max' => 80
                    ]
                ])
            ->add('Birthday', DateType::class,
                [
                    'widget' => 'single_text'
                ])
            ->add('Mobile', NumberType::class,
            [
                'required' => false,
                'attr' => [
                    'minlength' => 10,
                    'maxlength' => 10
                ]
            ])    
            ->add('Gender', ChoiceType::class,
                [
                    'choices' => [ 
                        "Male" => "Male",
                        "Female" => "Female"
                    ],
                    'expanded' => true,
                    'multiple' => false
                    /* 
                        drop-down list: expanded => false & multiple => false
                        radio button: expanded => true & multiple => false
                        checkbox: expanded => true & multiple => true
                    */
                ])        
            ->add('Add', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
