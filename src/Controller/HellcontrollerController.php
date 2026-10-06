<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class HellcontrollerController extends AbstractController
{
   #[Route('/age', name: 'age', methods:['GET', 'POST'])]
    public function index(Request $request): Response
    {
     $age = $request->request->get('age',null);
     return $this->render('hellcontroller/index.html.twig',['age' => $age]);
    }
}