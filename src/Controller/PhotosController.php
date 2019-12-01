<?php

namespace App\Controller;

use DateTime;
use App\Entity\Pictures;
use App\Form\PicturesType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints as Assert;

class PhotosController extends AbstractController
{
    /**
     * @Route("/vos-photos", name="photos")
     */
    public function photos()
    {      
        $repo = $this->getDoctrine()->getRepository(Pictures::class);
        $album = $repo->findAll();

        return $this->render('photos/photos.html.twig', [
            'album' => $album
        ]);
    }

    /**
     * @Route("/vos-photos-formulaire", name="photos_Form")
     */
    public function photosForm(Request $request,ObjectManager $manager)
    {
        
        $photos = new Pictures();
        $form = $this->createForm(PicturesType::class, $photos);
        $form->handleRequest(($request));

        if($form->isSubmitted() && $form->isValid()){

            $photos->setCreatedAt(new \DateTime());
            $photos->setImageSize(100100);
            $manager->persist($photos);
            $manager->flush();

            $this->addFlash(
                'success',
                "           Votre annonce a bien été enregistré !");
            return $this->redirectToRoute('photos');
        }


        return $this->render('photos/photoForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
