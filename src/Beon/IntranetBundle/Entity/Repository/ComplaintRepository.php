<?php

namespace Beon\IntranetBundle\Entity\Repository;

use Beon\IntranetBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use Beon\IntranetBundle\Enums\ComplaintStatusEnum;

/**
 * ComplaintRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ComplaintRepository extends FilteredRepository
{
    const ITEMS_ON_PAGE = 10;

    /**
     * @param $status
     * @param \Beon\IntranetBundle\Entity\User $chosenUser
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function qbWithStatus($status)
    {
        $qb = $this->createQueryBuilder('c')
	->where('c.status = :status')
	->setParameter(':status', $status);
	
	if ($this->getCustomerFilter()!=null) {
	    $customerEntity = $this->getCustomerFilter();
	    $qb = $qb->andWhere('c.customer IN (:customerIds)')->setParameter('customerIds', $customerEntity);
	    
        } 
        
        if ($this->getUserFilter()!=null) {
	    $userEntity = $this->getUserFilter();
	    $qb = $qb->andWhere('c.user=:userEntity')->setParameter('userEntity', $userEntity);
        }
        
        return $qb;
    }


    public function findClosed($page = 0, $User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        $qb = $this->qbWithStatus(ComplaintStatusEnum::CLOSED)
            ->setFirstResult($page * $itemsOnPage)
            ->setMaxResults($itemsOnPage);

        if ($User) {
            $qb = $qb->andWhere('c.customer = :customer')
                ->setParameter(':customer', $User);
        }

        $qb->orderBy('c.id', 'DESC');

        return $qb->getQuery()->getResult();
    }


    public function findInProgress($page = 0, $User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        $qb = $this->qbWithStatus(ComplaintStatusEnum::IN_PROGRESS)
            ->setFirstResult($page * $itemsOnPage)
            ->setMaxResults($itemsOnPage);

        if ($User) {
            $qb = $qb->andWhere('c.customer = :customer')
                ->setParameter(':customer', $User);
        }

        $qb->orderBy('c.id', 'DESC');

        return $qb->getQuery()->getResult();
    }


    public function findNotStarted($page = 0, $User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        $qb = $this->qbWithStatus(ComplaintStatusEnum::NOT_STARTED)
            ->setFirstResult($page * $itemsOnPage)
            ->setMaxResults($itemsOnPage);

        if ($User) {
            $qb = $qb->andWhere('c.customer = :customer')
                ->setParameter(':customer', $User);
        }

        $qb->orderBy('c.id', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function findAwaitingFeedBack($page = 0, $User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        $qb = $this->qbWithStatus(ComplaintStatusEnum::AWAITING_INTERNAL_FEEDBACK)
            ->setFirstResult($page * $itemsOnPage)
            ->setMaxResults($itemsOnPage);
        if ($User) {
            $qb = $qb->andWhere('c.customer = :customer')
                ->setParameter(':customer', $User);
        }

        $qb->orderBy('c.id', 'DESC');

        return $qb->getQuery()->getResult();
    }


    private function getItemsCountForStatus($status,$User)
    {

        $qb = $this->createQueryBuilder('c')
            ->select('count(c.id)')
            ->where('c.status = :status')
            ->setParameter(':status', $status);

         if ($User) {
            $qb = $qb->andWhere('c.customer = :customer')
                ->setParameter(':customer', $User);
        }

        $qb->orderBy('c.id', 'DESC');

        return $qb->getQuery()
            ->getSingleScalarResult();
    }


    public function getClosedPagesCount($User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        return ceil($this->getItemsCountForStatus(ComplaintStatusEnum::CLOSED, $User) / $itemsOnPage);
    }

    public function getInProgressPagesCount($User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        return ceil($this->getItemsCountForStatus(ComplaintStatusEnum::IN_PROGRESS, $User) / $itemsOnPage);
    }

    public function getNotStartedPagesCount($User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        return ceil($this->getItemsCountForStatus(ComplaintStatusEnum::NOT_STARTED, $User) / $itemsOnPage);
    }

    public function getAwaitingFeedbackPagesCount($User = null, $itemsOnPage = self::ITEMS_ON_PAGE)
    {
        return ceil($this->getItemsCountForStatus(ComplaintStatusEnum::AWAITING_INTERNAL_FEEDBACK, $User) / $itemsOnPage);
    }


}