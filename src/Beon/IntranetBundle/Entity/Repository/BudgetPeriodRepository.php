<?php
namespace Beon\IntranetBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Beon\IntranetBundle\Entity\BudgetPeriod;


/**
 * CompanyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BudgetPeriodRepository extends EntityRepository
{

    public function getCurrentBudget($customer_id){

        return  $this
            ->createQueryBuilder('b')
            ->where('b.start <= :currentDate AND b.end >= :currentDate AND b.customer = :customer')
            ->setParameter('currentDate', new \DateTime())
            ->setParameter('customer', $customer_id)
            ->getQuery()
            ->getResult();

     }

     public function getAllByCustomer($customer_id){

        return  $this
            ->createQueryBuilder('b')
            ->where('b.customer = :customer')
            ->setParameter('customer', $customer_id)
            ->orderBy('b.end', 'DESC')
            ->getQuery()
            ->setMaxResults(10)
            ->getResult();

    }



}