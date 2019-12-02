<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, ObjectManager $manager)
    {   

               
        $contact = new Contact();
 

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest(($request));

        if($form->isSubmitted() && $form->isValid()){
            $contact->setCreatedAt(new \DateTime());
            $manager->persist($contact);
            $manager->flush();

            // Message Flash Success
            $this->addFlash(
                'success',
                'Merci ! Message envoyé.');
                return $this->redirectToRoute('home');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


}
