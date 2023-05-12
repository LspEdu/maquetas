<?php

namespace App\Repository;

use App\Entity\SalidaMayorEdad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SalidaMayorEdad>
 *
 * @method SalidaMayorEdad|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalidaMayorEdad|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalidaMayorEdad[]    findAll()
 * @method SalidaMayorEdad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalidaMayorEdadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SalidaMayorEdad::class);
    }

    public function save(SalidaMayorEdad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SalidaMayorEdad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SalidaMayorEdad[] Returns an array of SalidaMayorEdad objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SalidaMayorEdad
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
