<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class HomeController extends AbstractController
{
    #[Route('/', 'home_index')]
    public function index(): Response
    {
        return new Response('Hello, world');
    }

    // Créer une route /hello qui affiche bonjour 
    #[Route('/hello/{name}', name: 'home_hello')]

    public function hello(Request $request)
    {
        $request->get('name');
        return new Response('Bonjour ' . $request->get('name'));
    }
    // Je veux une nvl route qui affiche bonjouur, j'ai XX (vient de l'url) ans
    #[Route('/ang/{ans}', name: 'home_annee', requirements: ['ans' => Requirement::DIGITS])]
    // Autre méthode
    public function annee($ans)
    {
        return new Response("Bonjour j'ai " . $ans . " ans");
    }
    // Créer une route /template vouloir un paramettre dynamique et l'affichez dans un paragraphe dans la vue
    #[Route('/template/{id}', name: 'home_template')]
    public function template($id): Response
    {
        $animals = ['lion', 'tigre', 'loup', 'aigle', 'chevre'];
        return $this->render('home/index.html.twig', [
            'name' => 'kenzizi',
            "idi" => $id,
            "animals" => $animals,
        ]);
    }
}
