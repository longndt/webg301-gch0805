<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i<=10; $i++) {
            $product = new Product();
            $product->setProductName("Product " . $i);
            $product->setProductBrand("Samsung");
            $product->setProductPrice(999.99);
            //rand(min, max): randomize an integer from min to max value
            $product->setProductQuantity(rand(30,50));
            //default date format in MySQL: YYYY-mm-dd
            $product->setProductDate(\DateTime::createFromFormat('Y-m-d','2021-10-10'));
            $manager->persist($product);
        }

        $manager->flush();
    }
}
