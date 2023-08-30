<?php

namespace App\Controller\Admin;

use App\Entity\Filler;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FillerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Filler::class;
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
