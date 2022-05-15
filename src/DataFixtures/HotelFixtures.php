<?php

namespace App\DataFixtures;
use App\Entity\Hotel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class HotelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
     $hotel = new Hotel();
     $hotel
                ->setNom($faker->words(3, true))
                ->setAdresse($faker->words(3, true))
                ->setRang($faker->numberBetween(20, 350))
                ->setToiles($faker->numberBetween(2, 10))
                ->setDescription($faker->words(3, true))
                ->setServices($faker->words(3, true))
                ->setUpdatedAt($faker->dateTime())
                ;
                $manager->persist($hotel);

        }
    
        $manager->flush();
    }
}
