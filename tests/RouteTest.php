<?php

// tests/Repository/RestaurantRepositoryTest.php
namespace tests;

use App\Entity\Api\v1\Restaurants;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RestaurantsRepositoryTest extends KernelTestCase
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testSearchByRestaurantsName()
    {
        $restaurants = $this->entityManager
            ->getRepository(\App\Entity\Api\v1\Restaurants::class)
            ->findByName('foo');

        $this->assertCount(0, $restaurants);
    }

    /**
     * {@inheritDoc}
     */
/*    protected function tearDown()
    {
        parent::tearDown();

        $this->entityManager->close();
        $this->entityManager = null; // avoid memory leaks
    }*/
}
