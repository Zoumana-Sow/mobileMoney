<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        $user = new User();
        $password = $this->encoder->encodePassword($user, 'passer');
        $user->setPrenom($faker->firstName())
            ->setNom($faker->lastName())
            ->setEmail($faker->email)
            ->setPassword($password)
            ->setNumero($faker->phoneNumber)
            ->SetCNI('Adjfiekxkx')
            ->setAdresse($faker->city)
            ->setRoles('ROLE_AdminSysteme');

        $manager->persist($user);

        $manager->flush();
    }
}
