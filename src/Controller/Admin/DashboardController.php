<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use App\Entity\Techno;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {


         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(ProjetCrudController::class)->generateUrl());


    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('PortfolioV2 1');
    }

    public function configureMenuItems(): iterable
    {
        //yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Projet', 'fa-solid fa-diagram-project', Projet::class);
        yield MenuItem::linkToCrud('Technos', 'fa-brands fa-stack-overflow', Techno::class);

    }
}
