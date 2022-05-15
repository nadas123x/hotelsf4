<?php

namespace App\DataFixtures;
use App\Entity\HotelRiuTikida;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class HotelRiuTikidaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
     $hotel_riu_tikida = new HotelRiuTikida();
     $hotel_riu_tikida
                ->setTypeChambre($faker->words(3, true))
                ->setDescription($faker->words(3, true))
                ->setprix($faker->words(3, true))
                ->setSurface($faker->words(3, true))
                ->setUpdatedAt($faker->dateTime())
                ;
                $manager->persist($hotel_riu_tikida);

        }
    
        $manager->flush();
    }
}
