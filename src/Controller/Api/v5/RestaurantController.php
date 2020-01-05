<?php

namespace App\Controller\Api\v5;

use App\Entity\Api\v5\Restaurants;
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
    public function getMovieAction(Request $request)
    {
        $message = 'Data fetched successfully!';
        $sortBy  = 'open';

        $restaurants = $this->getDoctrine()
            ->getRepository(Restaurants::class)
            ->fetchData($request->get('sort_by'), $request->get('search_by'));

        $encoders    = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer  = new Serializer($normalizers, $encoders);
        $restaurants = $serializer->serialize($restaurants, 'json');
        return JsonResponse::fromJsonString($restaurants, 400);
        return $this->json($restaurants);
        return $this->json([
            'message'  => $message,
            'sorty_by' => "Data sorted By '$sortBy'",
            // 'total' => count($restaurants),
            'data'     => $restaurants,
        ], Response::HTTP_OK, [], [
            // ObjectNormalizer::GROUPS => ['v5']
        ]);
    }
}
