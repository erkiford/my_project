<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Entity\PricingPlan;

class PricingPlanCrudController extends AbstractCrudController
{
public static function getEntityFqcn(): string
{
return PricingPlan::class;
}
}

