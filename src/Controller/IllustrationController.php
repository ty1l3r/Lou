<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IllustrationController extends AbstractController
{
    /**
     * @Route("/illustration", name="illustration")
     */
    public function index()
    {
        return $this->render('illustration/index.html.twig', [
            'controller_name' => 'IllustrationController',
        ]);
    }
}
