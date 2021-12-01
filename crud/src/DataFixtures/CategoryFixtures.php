<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i<=5; $i++) {
            $category = new Category();
            $category->setCategoryName("Category " . $i);
            $category->setCategoryDescription("This is a category description");
            $manager->persist($category);
        }

        $manager->flush();
    }
}
