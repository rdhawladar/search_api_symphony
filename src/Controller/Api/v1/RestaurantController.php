<?php

namespace App\Controller\Api\v1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Restaurants;

/**
 * Movie controller.
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
        $restaurants = $this->getDoctrine()
            ->getRepository(Restaurants::class)
            ->findall();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RestaurantController.php',
            'data' => $restaurants
        ]);
    }
}
