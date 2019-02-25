<?php

namespace HeavenTNBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionEventControllerTest extends WebTestCase
{
    public function testAfficherevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/afficherEvent');
    }

    public function testAjouterevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajouterEvent');
    }

    public function testSupprimerevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/supprimerEvent');
    }

    public function testModifierevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modifierEvent');
    }

    public function testRechercherevent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rechercherEvent');
    }

}
