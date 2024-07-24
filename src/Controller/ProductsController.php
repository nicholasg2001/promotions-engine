<?php

namespace App\Controller;
use App\DTO\LowestPriceEnquiry;
use App\Service\Serializer\DTOSerializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{

    #[Route('/products/{id}/lowest-price', name:'lowest-price', methods: ['POST'])]
    public function lowestPrice(Request $request, int $id, DTOSerializer $serializer): Response
    {

        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry::class, 'json');

        $responseContent = $serializer->serialize($lowestPriceEnquiry, 'json');
        return new Response($responseContent, 200);
    }



    #[Route('/products/{id}/promotions', name: 'promotions', methods: 'GET')]
    public function promotions()
    {

    }
}