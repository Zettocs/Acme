<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Email', null, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('username', null, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('firstname', null, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('Password', PasswordType::class, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('PasswordVerification', PasswordType::class, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('Adresse', null, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('Ville', null, [
                'label_attr' => ['class' => 'sr-only']
            ])
            ->add('Pays', null, [
                'label_attr' => ['class' => 'sr-only']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}