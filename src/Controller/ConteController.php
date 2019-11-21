<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConteController extends AbstractController
{
    /**
     * @Route("/conte", name="conte")
     */
    public function index()
    {
        return $this->render('conte/index.html.twig', [
            'controller_name' => 'ConteController',
        ]);
    }
}
