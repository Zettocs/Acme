<?php

namespace App\Form;

use App\Entity\Inscription;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => "Adresse email",
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une adresse mail'
                    ])
                ]
            ])
            ->add('password', PasswordType::class,[
                'required' => true,
                'label' => "Mot de passe",
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un mot de passe'
                    ])
                ]
            ])

            ->add('adresse', TextareaType::class,[
                'required' => true,
                'label' => "Adresse",
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une adresse postale'
                    ])
                ]
            ])
            ->add('ville', TextareaType::class,[
                'required' => true,
                'label' => "Ville",
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une Ville'
                    ])
                ]
            ])
            ->add('pays', TextareaType::class,[
                'required' => true,
                'label' => "Pays",
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un Pays'
                    ])
                ]
            ])
            ->add('save', SubmitType::class,[
                'label' => "Valider"

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Inscription::class,
        ]);
    }
}
