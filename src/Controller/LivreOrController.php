<?php

namespace App\Controller;

use App\Entity\LivreOr;
use App\Form\LivreOrType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LivreOrController extends AbstractController
{   
    /**
     * @Route("/livre-d'or", name="livre_or")
     */
    public function index()
    {   
        $repo = $this->getDoctrine()->getRepository(LivreOr::class);
        $mess = $repo->findAll();
        return $this->render('livre_or/livreOr.html.twig', [
            'messages' => $mess
        ]);
    }

    /**
     * @Route("/livre-d'or/nouveau-message", name="livre_or_form")
     */
    public function formulaire(Request $request, ObjectManager $manager)
    {   

       
        $livreOr = new LivreOr();
 

        $form = $this->createForm(LivreOrType::class, $livreOr);
        $form->handleRequest(($request));

        if($form->isSubmitted() && $form->isValid()){
            $livreOr->setCreatedAt(new \DateTime());
            $manager->persist($livreOr);
            $manager->flush();

            // Message Flash Success
            $this->addFlash(
                'success',
                'Merci pour votre commentaire ! ');
                return $this->redirectToRoute('livre_or');
        }
        return $this->render('livre_or/formulaire.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
