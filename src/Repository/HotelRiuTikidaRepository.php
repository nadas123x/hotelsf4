<?php

namespace App\Repository;

use App\Entity\HotelRiuTikida;
use App\Entity\HotelRiuTikidaSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
/**
 * @extends ServiceEntityRepository<HotelRiuTikida>
 *
 * @method HotelRiuTikida|null find($id, $lockMode = null, $lockVersion = null)
 * @method HotelRiuTikida|null findOneBy(array $criteria, array $orderBy = null)
 * @method HotelRiuTikida[]    findAll()
 * @method HotelRiuTikida[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotelRiuTikidaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HotelRiuTikida::class);
    }

    /**
     * @return HotelRiuTikida[]
     */
    public function findAllVisibleQuery(HotelRiuTikidaSearch $search): Query
    {
        $query = $this->findVisibleQuery();

        if ($search->getMaxPrice()) {
            $query = $query
                ->andWhere('p.price <= :maxprice')
                ->setParameter('maxprice', $search->getMaxPrice());
        }

        if ($search->getMinSurface()) {
            $query = $query
                ->andWhere('p.surface >= :minsurface')
                ->setParameter('minsurface', $search->getMinSurface());
        }
        return $query->getQuery();
    }
    /**
     * @return HotelRiuTikida[]
     */
    private function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p')
            ->where('p.price = false');
    }


    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(HotelRiuTikida $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(HotelRiuTikida $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return HotelRiuTikida[] Returns an array of HotelRiuTikida objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HotelRiuTikida
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
