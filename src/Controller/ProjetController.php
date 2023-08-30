<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    #[Route('/projet/all', name: 'projet_all', options: ['expose' => true])]
    public function All(ProjetRepository $projetRepository): JsonResponse
    {
        $projets = $projetRepository->findAll();
        return $this->json($projets);

    }
}
