<?php

namespace App\Controller\Api\v5;

use App\Entity\Api\v1\Restaurants;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Restaurants controller.
 * @Route("/api/v5", name="api_")
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
        if ($request->get('client_version') == '5.12.300') {
            return $this->json($result, Response::HTTP_OK);
        }
        $encoders    = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer  = new Serializer($normalizers, $encoders);
        $result = $serializer->serialize($result, 'json');
        return JsonResponse::fromJsonString($result, Response::HTTP_OK);
    }
}
