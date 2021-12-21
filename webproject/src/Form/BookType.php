<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Genre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class,
            [
                'label' => 'Book title',
                'required' => true,
                'attr' => [
                    'minlength' => 3,
                    'maxlength' => 30
                ]
            ])
            ->add('price', MoneyType::class,
            [
                'label' => 'Book price',
                'required' => true,
                'currency' => 'USD'
            ])
            ->add('year', IntegerType::class,
            [
                'label' => 'Published year',
                'required' => true,
                'attr' => [
                    'min' => 2000,
                    'max' => 2021
                ]
            ])
            // ->add('cover')
            ->add('genre', EntityType::class,
            [
                'label' => 'Genre',
                'required' => true,
                'class' => Genre::class,
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => true
            ])
            ->add('authors', EntityType::class,
            [
                'label' => 'Author(s)',
                'required' => true,
                'class' => Author::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
