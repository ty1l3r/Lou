<?php

namespace App\Form;

use App\Entity\Contact;
use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, $this->getConfiguration("Nom","Veuillez entrer votre adresse nom..."))
            ->add('prenom',TextType::class, $this->getConfiguration("Prénom","Veuillez entrer votre prénom..."))
            ->add('email', EmailType::class, $this->getConfiguration("Email","Veuillez entrer votre adresse email..."))
            ->add('message', TextareaType::class, $this->getConfiguration("Message","Veuillez entrer votre message..."))
            ->add('Confirmer', SubmitType::class); 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
