<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilShopController extends AbstractController
{
    #[Route('/shop', name: 'accueil_shop')]
    public function index(): Response
    {
        return $this->render('accueil_shop/index.html.twig', [
            'controller_name' => 'AccueilShopController',
        ]);
    }
}
