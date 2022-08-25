<?php

namespace App\Form;

use App\Entity\Movie;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
=======
>>>>>>> 959fd2a4a3a9679595c802c7772674a48a37b82e
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

<<<<<<< HEAD


=======
>>>>>>> 959fd2a4a3a9679595c802c7772674a48a37b82e
class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('title', TextType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter Title...'
                ),
                'label' => false

            ])
            ->add('releaseYear', IntegerType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter Release Year...'
                ),
                'label' => false
            ])
            ->add('description', TextareaType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-60 text-6xl outline-none',
                    'placeholder' => 'Enter Description...'
                ),
                'label' => false
            ])
            ->add('imagePath', FileType::class, array(
                'required' => false,
                'mapped' => false,
            ))
=======
            ->add('title')
            ->add('releaseYear')
            ->add('description')
            ->add('ImagePath')
>>>>>>> 959fd2a4a3a9679595c802c7772674a48a37b82e
            //->add('actors')
        ;
    }

<<<<<<< HEAD

=======
>>>>>>> 959fd2a4a3a9679595c802c7772674a48a37b82e
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
