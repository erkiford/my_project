<?php

namespace App\Controller;

use App\Entity\PricingPlan;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/pricing', name: 'pricing')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(PricingPlan::class);
        $pricingPlans = $repository->findAll();

        return $this->render('pricing/index.html.twig', [
            'pricing_plans' => $pricingPlans,
            'features' => [],
        ]);
    }
}
