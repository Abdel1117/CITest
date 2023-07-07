<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use App\Entity\User;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            /* $password =  */
            $user = new User();
            $user->setFirstName('FistName ' . $i);
            $user->setLastName("LastName " . $i);
            $user->setEmail($i . "LastNameFirstname@live.fr");
            $password = $this->hasher->hashPassword($user, 'pass_1234');
            $user->setPassword($password);
            $user->setRoles(["User"]);
            $manager->persist($user);
        }


        $manager->flush();
    }
}