<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionType;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class SecurityController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    /**
     * @Route("/inscription", name="security_inscription")
     */
    public function inscription(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $encoder)
    {
        $utilisateur  = new Utilisateur();

        $form = $this->createForm(InscriptionType::class, $utilisateur);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('Password')->getData();
            $passwordVerification = $form->get('PasswordVerification')->getData();

            if ($password !== $passwordVerification) {
                $this->addFlash('danger', 'Les mots de passe ne correspondent pas');
                return $this->redirectToRoute('security_inscription');
            }
            $hash = $encoder->hashPassword($utilisateur, $utilisateur->getPassword());

            $utilisateur->setPassword($hash);
            $manager->persist($utilisateur);
            $manager->flush();



            return $this->redirectToRoute('security_connexion');
        }

        return $this->render('security/inscription.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/connexion", name="security_connexion", methods={"GET", "POST"})
     */
    public function login()
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/deconnexion", name="security_deconnexion")
     */

    public function logout()
    {
    }
}
