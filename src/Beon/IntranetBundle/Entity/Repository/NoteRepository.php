<?php
namespace Beon\IntranetBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Beon\IntranetBundle\Entity\Note;
use Beon\IntranetBundle\Entity\Customer;
use Beon\IntranetBundle\Enums\NoteTypeEnum;
use Beon\IntranetBundle\Enums\CustomerLevelEnum;


/**
 * CompanyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NoteRepository extends FilteredRepository
{
    public function getAllByCustomer($customer_ids = null, $showNotes = false)
    {

        $qb = $this
            ->createQueryBuilder('n')
            ->select('n.text as title, n.id, n.createdat as note,n.createdat,n.internalUseOnly')
            ->where('n.customer IN (:customers)')
            ->setParameter('customers', $customer_ids)
            ->orderBy('n.createdat', 'DESC');

        if (!$showNotes) {
            $qb->andWhere('n.type NOT IN (:specialTypes)')->setParameter(':specialTypes', NoteTypeEnum::getSpecialTypes());
        }

        return $qb
            ->getQuery()
            ->getResult();

    }

    public function forCustomerView($customer)
    {
        $qb = $this->createQueryBuilder('n');

        /** @var $customerRepository CustomerRepository */
        $customerRepository = $this->getEntityManager()->getRepository('IntranetBundle:Customer');
        $customers = $customerRepository->findStakeholdersRegardingToLevel($customer);

        if ($customers) {
            $qb->andWhere('n.customer IN (:customerChildren)')->setParameter(':customerChildren', $customers);
        }

        $qb->andWhere('n.type NOT IN (:specialTypes)')->setParameter(':specialTypes', NoteTypeEnum::getSpecialTypes());
        $qb->orderBy('n.createdat', 'ASC');
        
        return $qb->getQuery()->getResult();
    }

    public function repeatYearlyFixedDates() {
        $qb = $this->createQueryBuilder('n');
        $qb->andWhere('n.type = ' . NoteTypeEnum::FIXED_DATE_YEARLY);
        $qb->andWhere('n.date1 < :now AND (n.date2 IS NULL OR n.date2 < :now)')->setParameter(':now', date('Y-m-d'));
        foreach ($qb->getQuery()->getResult() as $fixed_date) {
            $year = $fixed_date->getDate1()->format('Y');
            $temp = clone $fixed_date->getDate1();
            $fixed_date->setDate1($temp->add(new \DateInterval('P1Y')));
            if ($fixed_date->getDate2()) {
                $temp = clone $fixed_date->getDate2();
                $fixed_date->setDate2($temp->add(new \DateInterval('P1Y')));
            }
            if ($fixed_date->getText()) {
                $fixed_date->setText(str_replace($year, $year+1, $fixed_date->getText()));
            }
            $this->getEntityManager()->persist($fixed_date);
            $this->getEntityManager()->flush();
        }
    }

    public function getFutureFixedDates($customer)
    {
        $this->repeatYearlyFixedDates();
        $qbn = $this->createQueryBuilder('n');

        /** @var $customerRepository CustomerRepository */
        $customerRepository = $this->getEntityManager()->getRepository('IntranetBundle:Customer');

        $cids = $customerRepository->getCompleteChildParentMapUp($customer->getId());
        $cids = array_values($cids);
        $cids[] = $customer->getId();
        $qbn->andWhere('n.customer IN (:customerChildren)')->setParameter(':customerChildren', $cids);
        $qbn->andWhere('(n.date1 >= :now AND n.date2 IS NULL) OR n.date2 >= :now')->setParameter(':now', date('Y-m-d'));
        $qbn->andWhere('n.type IN (:fixedDateTypes)')->setParameter(':fixedDateTypes', NoteTypeEnum::getFixedDateTypes());

        $results = array();
        foreach ($qbn->getQuery()->getResult() as $row) {
            $results[] = $row;
        }

        if ($customer->getLevel() >= CustomerLevelEnum::CUSTOMER) {        
            $qbc = $customerRepository->createQueryBuilder('c');        
            $cids = $customerRepository->getCompleteChildParentMapDown($customer->getLevel() == CustomerLevelEnum::CUSTOMER ? $customer->getId() : $customer->getParent()->getId());
            $cids = array_keys($cids);
            $qbc->andWhere('c.id IN (:customerChildren)')->setParameter(':customerChildren', $cids);
            $qbc->andWhere('c.level = ' . CustomerLevelEnum::PROJECT);
            $qbc->andWhere('c.fixedDate != 0');
            $qbc->andWhere('(c.contractstart >= :now AND c.contractend IS NULL) OR c.contractend >= :now')->setParameter(':now', date('Y-m-d'));
            foreach ($qbc->getQuery()->getResult() as $row) {
                $results[] = $row;
            }
        }

        usort($results, function($a, $b) {
            $a = $a instanceof Note ? $a->getDate1() : $a->getContractstart();
            $b = $b instanceof Note ? $b->getDate1() : $b->getContractstart();
            $a = $a->format('Y-m-d');
            $b = $b->format('Y-m-d');
            if ($a == $b) {
                return 0;
            } else {
                return $a < $b ? -1 : 1;
            }
        });

        return $results;
    }

    public function getAgendaDates($customer)
    {
        $qb = $this->createQueryBuilder('n');

        /** @var $customerRepository CustomerRepository */
        $customerRepository = $this->getEntityManager()->getRepository('IntranetBundle:Customer');
        $cids = $customerRepository->getCompleteChildParentMapDown($customer->getId());
        $cids = array_keys($cids);
        $cids[] = $customer->getId();

        if ($customer) {
            $qb->andWhere('n.customer IN (:customerChildren)')->setParameter(':customerChildren', $cids);
        }

        $qb->orderBy('n.date1', 'ASC');
        //$qb->andWhere('(n.date1 >= :now AND n.date2 IS NULL) OR n.date2 >= :now')->setParameter(':now', date('Y-m-d'));
        $qb->andWhere('n.type = ' . NoteTypeEnum::AGENDA);
        
        return $qb->getQuery()->getResult();
    }
}
