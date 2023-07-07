<?php


namespace App\Test\UserTest;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Entity\User;


final class UserTest extends KernelTestCase
{
    public function testUser()
    {
        $user = new User();
        $user->setLastName("Doe");
        $user->setFirstName("John");
        $user->setEmail("abderahmane.adjali@live.fr");
        $user->setPassword("Charlie14?");
        $user->setRoles(["ROLE_ADMIN"]);

        $this->assertEquals("Doe", $user->getLastname());
        $this->assertEquals("John", $user->getFirstName());
        $this->assertEquals("abderahmane.adjali@live.fr", $user->getEmail());
        $this->assertEquals("abderahmane.adjali@live.fr", $user->getUserIdentifier());
        $this->assertEquals("Charlie14?", $user->getPassword());
        $this->assertContains("ROLE_ADMIN", $user->getRoles());

    }
}