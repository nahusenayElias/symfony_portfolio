<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('page/home.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact(Request $request): Response
    {
        // Create the form
        $form = $this->createForm(\App\Form\ContactType::class);
        $form->handleRequest($request);

        $success = false;
        if ($form->isSubmitted() && $form->isValid()) {
    // ... handle the form (send mail, etc.)
    $this->addFlash('success', 'Thank you for your message!');
    return $this->redirectToRoute('contact');
}

        return $this->render('page/contact.html.twig', [
            'contactForm' => $form->createView(),
            'success' => $success,
        ]);
    }
}
