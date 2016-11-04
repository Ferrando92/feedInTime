<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $NUMBER_OF_FEEDS_AT_FRONT_PAGE = 5;
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertCount($NUMBER_OF_FEEDS_AT_FRONT_PAGE, $crawler->filter('h2'), 'Fail, there are not enought feeds');
    }


}
