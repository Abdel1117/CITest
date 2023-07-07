<?php

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\User;
use App\Controller\RegistrationController;



class RegistrationControllerTest extends WebTestCase
{

    private $client;
    private $entityManager;

    public function testRegisterRenderingTest()
    {
        $client = static::createClient();

        $crawler = $client->request("GET", "/register");


        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains("h1", "Register");

    }




}