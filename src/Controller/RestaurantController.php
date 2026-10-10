<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Restaurant;
use App\Entity\User;
use App\Entity\Ville;
use App\Form\CommentaireType;
use App\Form\RestaurantType;
use App\Form\VilleType;
use App\Message\NouveauCommentaire;
use App\Repository\RestaurantRepository;
use App\Repository\VilleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class RestaurantController extends AbstractController
{
    #[Route('/restaurants', name: 'restaurant_list', methods: ['GET'])]
    public function list(Request $request, RestaurantRepository $restaurantRepository, VilleRepository $villeRepository): Response
    {
        $villeId = $request->query->get('ville');
        $ville = is_string($villeId) && ctype_digit($villeId)
            ? $villeRepository->find((int) $villeId)
            : null;
        $restaurants = $ville === null
            ? $restaurantRepository->findBy([], ['nom' => 'ASC'])
            : $restaurantRepository->findBy(['ville' => $ville], ['nom' => 'ASC']);

        return $this->render('restaurant/list.html.twig', [
            'restaurants' => $restaurants,
            'villes' => $villeRepository->findBy([], ['nom' => 'ASC']),
            'ville' => $ville,
        ]);
    }

    #[Route('/restaurants/{id}', name: 'restaurant_show', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function show(Restaurant $restaurant): Response
    {
        return $this->render('restaurant/show.html.twig', [
            'restaurant' => $restaurant,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/restaurants/ajouter', name: 'restaurant_add', methods: ['GET', 'POST'])]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $restaurant = new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user instanceof User) {
                throw $this->createAccessDeniedException();
            }

            $restaurant->setProprietaire($user);
            $entityManager->persist($restaurant);
            $entityManager->flush();
            $this->addFlash('success', 'Restaurant ajouté.');

            return $this->redirectToRoute('restaurant_show', ['id' => $restaurant->getId()]);
        }

        return $this->render('restaurant/add.html.twig', [
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/restaurants/{id}/modifier', name: 'restaurant_edit', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function edit(Restaurant $restaurant, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Restaurant modifié.');

            return $this->redirectToRoute('restaurant_show', ['id' => $restaurant->getId()]);
        }

        return $this->render('restaurant/edit.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/restaurants/{id}/supprimer', name: 'restaurant_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(Restaurant $restaurant, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete_restaurant_' . $restaurant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($restaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('restaurant_list');
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/restaurants/{id}/commentaires/ajouter', name: 'comment_add', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function addComment(Restaurant $restaurant, Request $request, EntityManagerInterface $entityManager, MessageBusInterface $bus): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            if (!$user instanceof User) {
                throw $this->createAccessDeniedException();
            }

            $restaurant->addCommentaire($commentaire);
            $commentaire->setAuteur($user);
            $entityManager->persist($commentaire);
            $entityManager->flush();
            $bus->dispatch(new NouveauCommentaire((int) $commentaire->getId()));
            $this->addFlash('success', 'Commentaire ajouté.');

            return $this->redirectToRoute('restaurant_show', ['id' => $restaurant->getId()]);
        }

        return $this->render('comment/add.html.twig', [
            'restaurant' => $restaurant,
            'form' => $form,
        ]);
    }

    #[Route('/commentaires/{id}/supprimer', name: 'comment_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function deleteComment(Commentaire $commentaire, Request $request, EntityManagerInterface $entityManager): Response
    {
        $restaurant = $commentaire->getRestaurant();
        $user = $this->getUser();

        if (!$this->isGranted('ROLE_ADMIN') && (!$user instanceof User || $commentaire->getAuteur()?->getId() !== $user->getId())) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete_comment_' . $commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
            $this->addFlash('success', 'Commentaire supprimé.');
        }

        return $restaurant === null
            ? $this->redirectToRoute('restaurant_list')
            : $this->redirectToRoute('restaurant_show', ['id' => $restaurant->getId()]);
    }

    #[Route('/villes/{id}/restaurants', name: 'ville_restaurants', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function restaurantsByCity(Ville $ville, RestaurantRepository $restaurantRepository, VilleRepository $villeRepository): Response
    {
        return $this->render('restaurant/list.html.twig', [
            'restaurants' => $restaurantRepository->findBy(['ville' => $ville], ['nom' => 'ASC']),
            'villes' => $villeRepository->findBy([], ['nom' => 'ASC']),
            'ville' => $ville,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/villes/ajouter', name: 'ville_add', methods: ['GET', 'POST'])]
    public function addCity(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ville = new Ville();
        $form = $this->createForm(VilleType::class, $ville);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ville);
            $entityManager->flush();
            $this->addFlash('success', 'Ville ajoutée.');

            return $this->redirectToRoute('restaurant_list');
        }

        return $this->render('ville/add.html.twig', [
            'form' => $form,
        ]);
    }
}
