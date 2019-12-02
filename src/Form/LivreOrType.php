<?php

namespace App\Form;

use App\Entity\LivreOr;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LivreOrType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, $this->getConfiguration("Nom",""))
         ->add('prenom', TextType::class, $this->getConfiguration("Prénom",""))
         ->add('mail', EmailType::class, $this->getConfiguration("Email","Veuillez entrer votre adresse email"))
        ->add('title', TextType::class,$this->getConfiguration("Titre", "Veuillez indiquer un titre"))
            ->add('comment', TextareaType::class, $this->getConfiguration("Commentaire","Veuillez entrer votre message")
            )
            ->add('Confirmer', SubmitType::class); 
            
            
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LivreOr::class,
        ]);
    }
}
