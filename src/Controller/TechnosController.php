<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TechnosController extends AbstractController
{
    #[Route('/technos', name: 'app_technos')]
    public function index(): Response
    {
        return $this->render('technos/index.html.twig', [
            'controller_name' => 'TechnosController',
        ]);
    }
}
