<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PhotosController extends AbstractController
{
    /**
     * @Route("/photos", name="photos")
     */
    public function index()
    {
        return $this->render('photos/photos.html.twig', [
        
        ]);
    }
}
