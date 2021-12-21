<?php

namespace App\Form;

use App\Entity\Author;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            [
                'label' => 'Author name',
                'required' => true,
                'attr' => [
                    'minlength' => 5,
                    'maxlength' => 30
                ]
            ])
            ->add('birthday', DateType::class,
            [
                'label' => 'Author birthday',
                'required' => true,
                'widget' => 'single_text'
            ])
            ->add('address', TextType::class,
            [
                'label' => 'Author name',
                'required' => true,
                'attr' => [
                    'minlength' => 5,
                    'maxlength' => 50
                ]
            ])
            ->add('mobile', NumberType::class,
            [
                'label' => 'Mobile number',
                'required' => true,
                'attr' => [
                    'minlength' => 10,
                    'maxlength' => 10
                ]
            ])
            // ->add('books')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Author::class,
        ]);
    }
}
