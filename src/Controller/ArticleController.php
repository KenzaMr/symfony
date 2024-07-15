<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', 'article_index')]
    public function index(): Response
    {
        // return new Response('Essaie');
        return $this->render('article/article.html.twig');
    }
}

// {# Crer un nouveau controler ArticleController methode index /article#}
// {# Affichez une vue #}
