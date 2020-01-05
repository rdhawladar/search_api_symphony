<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
    /**
     * Route test -> home  url
     *
     * @return void
     */
    public function testHomeRoute()
    {
                $client = static::createClient();

        $client->request('GET', '/');
        // $response = $this->get("/");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

}
