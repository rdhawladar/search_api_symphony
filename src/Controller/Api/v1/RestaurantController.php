<?php

namespace App\Controller\Api\v1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Api\v1\Restaurants;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Restaurants controller.
 * @Route("/api/v1", name="api_")
 */
class RestaurantController extends AbstractController
{
    /**
     * Lists Restaurants.
     * @Rest\Get("/restaurants")
     *
     * @return Response
     */
    public function getRestaurantsAction(Request $request)
    {
        $message = 'Data fetched successfully!';
        $sortBy = $request->get('sort_by');
        $searchBy = $request->get('search_by');
        
        if ($sortBy && $sortBy != 'open') {
            $sortBy = $this->getDoctrine()
                ->getRepository(Restaurants::class)
                ->sortByGenerator($sortBy);
        } 
        !$sortBy && $sortBy = 'open';

        $restaurants = $this->getDoctrine()
            ->getRepository(Restaurants::class)
            ->fetchData($sortBy, $searchBy);
        $result = [
            'message' => $message,
            'sort_by' => "Data sorted By '$sortBy'",
            'total' => count($restaurants),
            'code' => Response::HTTP_OK,
            'data' => $restaurants
        ];
        $encoders    = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer  = new Serializer($normalizers, $encoders);
        $result = $serializer->serialize($result, 'json');
        return JsonResponse::fromJsonString($result, Response::HTTP_OK);
    }
}
