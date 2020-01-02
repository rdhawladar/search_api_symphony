<?php

namespace App\Controller\Api\v1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
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
     * @Rest\Get("/restaurant")
     *
     * @return Response
     */
    public function getMovieAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Restaurants::class);
        $restaurants = $repository->findall();
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RestaurantController.php',
            'data' => $restaurants
        ]);
    }
}
