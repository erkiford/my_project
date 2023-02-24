<?php

namespace App\Controller;

use App\Entity\PricingPlan;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
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

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    #[Route('/pricing', name: 'pricing')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(PricingPlan::class);
        $pricingPlans = $repository->findAll();

        return $this->render('pricing/index', [
            'pricing_plans' => $pricingPlans,
        ]);


     }
}