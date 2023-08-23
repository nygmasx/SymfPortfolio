<?php

namespace App\Controller\Admin;

use App\Controller\Form\Type\ImageTechnoType;
use App\Entity\Techno;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TechnoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Techno::class;
    }


    public function configureFields(string $pageName): iterable
    {
           yield TextField::new('nom');
            yield CollectionField::new('image')
            ->setEntryType(ImageTechnoType::class);

    }

}
