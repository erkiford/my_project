<?php

namespace App\Controller;

use App\Entity\PricingPlan;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{

    #[Route('/pricing', name: 'pricing')]
    public function index(): Response
    {
        $PricingPlans = $this->getDoctrine()
            ->getRepository(PricingPlan::class)
            ->findAll();

        return $this->render('pricing/index', [
        'pricing_plans' => $pricingPlans,
        ]);


     }
}