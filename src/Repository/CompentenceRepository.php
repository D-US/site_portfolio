<?php

namespace App\Repository;

use App\Entity\Compentence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Compentence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compentence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compentence[]    findAll()
 * @method Compentence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompentenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Compentence::class);
    }

    // /**
    //  * @return Compentence[] Returns an array of Compentence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Compentence
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
