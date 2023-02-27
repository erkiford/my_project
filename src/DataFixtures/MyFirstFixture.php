<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class MyFirstFixture extends Fixture
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('johndoe');
        $user->setPassword(password_hash('secret', PASSWORD_DEFAULT));
        $user->setEmail('johndoe@example.com');

        $this->manager->persist($user);
        $this->manager->flush();
    }
}

