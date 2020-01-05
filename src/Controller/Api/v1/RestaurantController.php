<?php

namespace App\Controller\Api\v1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Api\v1\Restaurants;
use FOS\RestBundle\Controller\Annotations\Version;

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
    public function getMovieAction(Request $request)
    {
        $message = 'Data fetched successfully!';
        $sortBy = 'open';

        $restaurants = $this->getDoctrine()
            ->getRepository(Restaurants::class)
            ->fetchData($request->get('sort_by'), $request->get('search_by'));
        return $this->json([
            'message' => $message,
            'sorty_by' => "Data sorted By '$sortBy'",
            'total' => count($restaurants),
            'data' => $restaurants
        ], Response::HTTP_OK);
    }
}
