<?php

namespace App\DataFixtures;

use App\Entity\PersonDetail;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PersonDetailFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1;$i<=20;$i++) {
            $personDetail = new PersonDetail;
            $personDetail->setAddress("Ha Noi");
            $personDetail->setMobile("0912345678");
            $personDetail->setNationality("Viet Nam");
            $personDetail->setBirthday(\DateTime::createFromFormat('Y-m-d','1998-03-25'));
            $manager->persist($personDetail);
        }

        $manager->flush();
    }
}
