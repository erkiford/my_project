<?php

namespace App\Controller\Admin;

use App\Entity\PricingPlan;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PricingPlanCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PricingPlan::class;
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