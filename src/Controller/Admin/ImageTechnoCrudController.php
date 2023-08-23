<?php

namespace App\Controller\Admin;

use App\Entity\ImageTechno;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ImageTechnoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImageTechno::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
