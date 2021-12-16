<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i<=10; $i++) {
            $author = new Author; 
            $author->setName("Author $i");
            $author->setAddress("Ha Noi");
            $author->setMobile("0912345678");
            $author->setBirthday(\DateTime::createFromFormat('Y-m-d','2000-04-18'));
            $manager->persist($author);
        }
        $manager->flush();
    }
}
