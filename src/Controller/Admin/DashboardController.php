<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
/**
* @Route("/admin", name="admin")
*/
public function index(): Response
{
return parent::index();
}

public function configureMenuItems(): iterable
{
yield from [
['label' => 'Dashboard', 'route' => 'admin'],
['label' => 'Pricing Plans', 'route' => 'admin_app_pricingplan_index'],
];
}
}


