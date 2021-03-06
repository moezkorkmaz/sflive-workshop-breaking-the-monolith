<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PagesTest extends WebTestCase
{
    /**
     * @dataProvider providePaths
     */
    public function testPagesThrowNoError($path)
    {
        $client = static::createClient();

        $crawler = $client->request('GET', $path);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function providePaths()
    {
        return [
            ['/'],
            ['/users/11111111-1111-1111-1111-111111111111'],
            ['/recipes/33333333-3333-3333-3333-333333333333']
        ];
    }
}
