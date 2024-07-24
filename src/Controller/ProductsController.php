<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController
{

    #[Route('/products/{id}/lowest-price', name:'lowest-price', methods: ['POST'])]
    public function lowestPrice(int $id): Response
    {
        return new JsonResponse([

        ], 200);
    }


    #[Route('/products/{id}/promotions', name: 'promotions', methods: 'GET')]
    public function promotions()
    {

    }
}