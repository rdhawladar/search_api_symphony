<?php

namespace App\Repository\Api\v5;

use App\Entity\Api\v5\Restaurants;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
Use Doctrine\Persistence\ManagerRegistry;

class RestaurantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurants::class);
    }

    public function fetchData($sortBy, $searchBy = '')
    {
        $entityManager = $this->getEntityManager();
        $sortValues = [
            'bestmatch' => 'bestMatch',
            'newest' => 'newestScore',
            'ratingaverage' => 'ratingAverage',
            'popularity' => 'popularity',
            'averageproductprice' => 'averageProductPrice',
            'deliverycosts' => 'deliveryCosts',
            'minimumorderamountcosts' => 'minimumOrderAmount'
        ];
        if ($sortBy) {
            $value = preg_replace('/\s/', '', $sortBy);
            isset($sortValues[$value]) && $sortBy = strtolower($sortValues[$value]);
        } else {
            $sortBy = 'open';
        }
        $query = $entityManager->createQueryBuilder()
            ->select('r')
            ->from(Restaurants::class, 'r')
            ->where('r.name LIKE :searchBy')
            ->setParameter('searchBy', "%$searchBy%")
            ->orderBy("r.$sortBy", 'ASC')
            ->getQuery()
            ->getResult();
        return $query;
    }
}
