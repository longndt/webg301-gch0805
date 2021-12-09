<?php

namespace App\Repository;

use App\Entity\Person;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Person|null find($id, $lockMode = null, $lockVersion = null)
 * @method Person|null findOneBy(array $criteria, array $orderBy = null)
 * @method Person[]    findAll()
 * @method Person[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Person::class);
    }

    /**
     * @return Person[]
     */
    public function sortNameAsc () {
        return $this->getEntityManager()
                    ->createQuery(
                        'SELECT p
                        FROM App\Entity\Person p
                        ORDER BY p.name ASC')
                    ->getResult()
        ;
    }

     /**
     * @return Person[]
     */
    public function sortNameDesc () {
        return $this->getEntityManager()
                    ->createQuery(
                        'SELECT p
                        FROM App\Entity\Person p
                        ORDER BY p.name DESC')
                    ->getResult()
        ;
    }
}
