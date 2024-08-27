<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Productsfix extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $product = new Produits();
            $product->setName($faker->word);
            $product->setPrix($faker->randomFloat(2, 10, 100));;
            $product->setQuantité($faker->numberBetween(1, 100));;
            $product->setPoids($faker->randomFloat(2, 10, 100));
            $product->setReference($faker->bothify());
            $product->setCategorie($faker->word);
            $product->setVendeur($faker->word);

            $manager->persist($product);
            $manager->flush();
        }
    }
}
