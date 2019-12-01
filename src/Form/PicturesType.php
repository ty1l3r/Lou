<?php

namespace App\Form;

use App\Entity\Pictures;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PicturesType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        
        ->add('imageFile', VichImageType::class,$this->getConfiguration("Votre image", "Veuillez uploader votre image"))
        ->add('title', TextType::class, $this->getConfiguration("Titre", "Titre de votre photo"))
            ->add('comment', TextareaType::class, $this->getConfiguration("Commentaire", "Entrez votre commentaire..."))
          
            ->add('Confirmer', SubmitType::class); 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pictures::class,
        ]);
    }
}
