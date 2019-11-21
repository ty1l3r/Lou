<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MusicController extends AbstractController
{
    /**
     * @Route("/music", name="music")
     */
    public function index()
    {
        return $this->render('music/index.html.twig', [
            'controller_name' => 'MusicController',
        ]);
    }
}
