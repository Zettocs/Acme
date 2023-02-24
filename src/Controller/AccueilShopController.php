<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilShopController extends AbstractController
{
    #[Route('/shop', name: 'accueil_shop')]
    public function index(Request $request, EntityManagerInterface $em, PaginatorInterface $paginator): Response
    {
        // Récupération des produits à partir de la base de données
        $produits = $em->getRepository(Produit::class)->findAll();

        // Pagination
        $pagination = $paginator->paginate(
            $produits, // Requête contenant les données à paginer
            $request->query->getInt('page', 1), // Numéro de la page en cours, 1 par défaut
            20 // Nombre de résultats par page
        );

        return $this->render('accueil_shop/index.html.twig', [
            'pagination' => $pagination,
            'produits' => $produits,
            'page' => $pagination->getCurrentPageNumber() // Define the 'page' variable
        ]);
    }

    /**
     * @Route("/produit/{id}", name="produit_detail")
     */
    public function produitDetail(Produit $produit): Response
    {
        // Trouvez le produit par son ID en utilisant une instance de Doctrine EntityManager

        return $this->render('accueil_shop/produit_detail.html.twig', [
            'produit' => $produit,
        ]);
    }
}
