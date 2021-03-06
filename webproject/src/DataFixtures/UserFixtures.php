<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    //khai báo constructor với tham số là UserPasswordHasherInterface để mã hóa password
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;        
    }

    public function load(ObjectManager $manager): void
    {
        //tạo user với role User
        $user = new User();
        $user->setUsername("User");
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->hasher->hashPassword($user,"123456"));
        $manager->persist($user);

        //tạo user với role Staff
        $user = new User();
        $user->setUsername("Staff");
        $user->setRoles(['ROLE_STAFF']);
        $user->setPassword($this->hasher->hashPassword($user,"123456"));
        $manager->persist($user);

        //tạo user với role Admin
        $user = new User();
        $user->setUsername("Admin");
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->hasher->hashPassword($user,"123456"));
        $manager->persist($user);

        $manager->flush();
    }
}
