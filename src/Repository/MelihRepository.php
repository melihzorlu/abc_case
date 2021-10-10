<?php

namespace App\Repository;

use App\Entity\Melih;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Melih|null find($id, $lockMode = null, $lockVersion = null)
 * @method Melih|null findOneBy(array $criteria, array $orderBy = null)
 * @method Melih[]    findAll()
 * @method Melih[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MelihRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Melih::class);
    }

    // /**
    //  * @return Melih[] Returns an array of Melih objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Melih
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
