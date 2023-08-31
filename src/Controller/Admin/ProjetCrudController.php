<?php

namespace App\Controller\Admin;

use App\Controller\Form\Type\ImageProjetType;
use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }


    public function configureFields(string $pageName): iterable
    {

            yield TextField::new('titre');
            yield TextEditorField::new('description');
            yield TextField::new('date');
            yield CollectionField::new('image')->setEntryType(ImageProjetType::class);
            yield TextField::new('lien');
            yield AssociationField::new('technos')
                ->autocomplete();

    }

}
