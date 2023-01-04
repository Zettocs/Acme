<?php

namespace App\Controller;


use App\Entity\Inscription;
use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;

class AcmeController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        return $this->render('acme/homepage.html.twig');
    }

    #[Route('/inscription', name:'app_inscription')]
    public function nouvelleInscription(Request $request, PersistenceManagerRegistry $doctrine)
    {
        $inscription = new Inscription();
        $form = $this->createForm(InscriptionType::class, $inscription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            //$inscription->setCreatedAt(new \DateTime());
            $em->persist($inscription);
            $em->flush();
        }

        return $this->render('acme/inscription.html.twig', [
            'formNouvelleInscription' => $form->createView()
        ]);
    }
}