<?php

namespace App\Form;

use App\Entity\Car;
use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('brand', ChoiceType::class,
            [
                'label' => 'Car Brand',
                'required' => true,
                'choices' => [
                    'Kia' => 'Kia',
                    'Huyndai' => 'Huyndai',
                    "Mazda" => "Mazda"
                ]
            ])
            ->add('name', TextType::class,
            [
                'label' => 'Car Name',
                'required' => true,
                'attr' => [
                    'minlength' => 3,
                    'maxlength' => 30
                ]
            ]) 
            ->add('model', IntegerType::class,
            [
                'label' => 'Car Model',
                'required' => true,
                'attr' => [
                    "min" => 2010,
                    "max" => 2021
                ]
            ])
            ->add('price', MoneyType::class,
            [
                'label' => 'Car Price',
                'required' => true,
                'currency' => 'USD'
            ])
            ->add('plate', TextType::class,
            [
                'label' => 'Car Plate',
                'required' => true
            ])
            ->add('person', EntityType::class,
            [
                'label' => 'Car Owner',
                'required' => true,
                'class' => Person::class,
                'choice_label' => 'name',
                // 'multiple' => false,
                // 'expanded' => false
            ])
            ->add('Save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
