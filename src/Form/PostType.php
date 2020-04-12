<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('n1', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ]) 
            ->add('n2', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n3', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n4', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n5', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n6', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n7', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n8', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n9', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])
            ->add('n10', IntegerType::class, [
                'attr' => [
                    'min' => "1",
                    'max' => "99999",
                ]
            ])  
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'required' => false
        ]);
    }
}
