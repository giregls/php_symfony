<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Form\ArticleType;
use App\Entity\Article;
use App\Entity\Restaurant;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use APP\EntityArticle;
use App\Form\ArticleFormType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;

final class BddController extends AbstractController
{
    #[Route('/create', name: 'create_bdd')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $article = new Article();
        $article->setTitre('New Article!');

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($article);
            $em->flush();
            return $this->render('bdd/index.html.twig', [
                'controller_name' => 'BddController',
                
                'form' => $form,
            ]);
        }
        return $this->render('bdd/index.html.twig', [
            'controller_name' => 'BddController',
            'form' => $form,
        ]);
    }

    #[Route('/Article', name: 'app_article')]
    public function show_article(ArticleRepository $articleRepository, Article $article): Response
    {
        $titre = $article->getTitre();
        return new Response('This is the title of the first article' . $titre);
    }

    #[Route('/modifier/{id}', name: 'app_modifier')]
    public function modifier_article(Article $article, EntityManagerInterface $em): Response
    {
        $article->setTitre('New titre after modification');

        $em->persist($article);
        $em->flush();
        return new Response('element avec id modifie');
    }

    #[Route('/supprimer/{id}', name: 'app_supprimer')]
    public function supprimer_article(Article $article, EntityManagerInterface $em): Response
    {
        $em->remove($article);
        $em->flush();
        return new Response('element avec id supprimer');
    }

    // --------------------------------------------------------------------------------------------------------------------

    #[Route('/create_restaurant', name: 'create_restaurant_bdd')]
    public function create_restaurant(EntityManagerInterface $em): Response
    {
        $restaurant = new Restaurant();
        $restaurant->setnom('La pizza de la mama !');
        $restaurant->setDescription('Très bon');
        $em->persist($restaurant);
        $em->flush();
        return $this->render('bdd/index.html.twig', [
            'controller_name' => 'BddController',
        ]);
    }

    #[Route('/modifier_restaurant/{id}', name: 'app_modifier_restaurant')]
    public function modifier_restaurant(Restaurant $restaurant, EntityManagerInterface $em): Response
    {
        $restaurant->setnom('Pizza de la padre !');

        $em->persist($restaurant);
        $em->flush();
        return new Response('restaurant avec id spécifiqué modifié');
    }

    #[Route('/supprimer_restaurant/{id}', name: 'app_supprimer_restaurant')]
    public function supprimer_restaurant(Restaurant $restaurant, EntityManagerInterface $em): Response
    {
        $em->remove($restaurant);
        $em->flush();
        return new Response('element avec id supprimer');
    }

    #[Route('/Restaurant', name: 'app_restaurant', methods: ['GET'])]
    public function list_restaurants(): Response
    {
        return $this->redirectToRoute('restaurant_list');
    }

    // --------------------------------------------------------------------------------------------------------------------

    #[Route('/create_commentaire', name: 'create_commentaire_bdd')]
    public function create_commentaire(EntityManagerInterface $em): Response
    {
        $commentaire = new Commentaire();
        $commentaire->setcontenue('très bonne pizza');
        $commentaire->setrating(3.5);
        $em->persist($commentaire);
        $em->flush();
        return $this->render('bdd/index.html.twig', [
            'controller_name' => 'BddController',
        ]);
    }

    #[Route('/Register', name: 'app_register', methods: ['GET'])]
    public function register(RegisterRepository $registerRepository): Response
    {
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $registerRepository->findBy([], ['nom' => 'ASC']),
        ]);
    }

    #[Route('/Login', name: 'app_login', methods: ['GET'])]
    public function login(): Response
    {
        return $this->render('registration/login.html.twig');
    }
}