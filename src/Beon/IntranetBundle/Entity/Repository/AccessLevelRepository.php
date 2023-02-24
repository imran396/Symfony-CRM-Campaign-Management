<?php

namespace Beon\IntranetBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Beon\IntranetBundle\Enums\UserGroupEnum;

/**
 * AccessLevelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AccessLevelRepository extends EntityRepository
{

    public function getAccessLevelsForGroup($group) {
        $qb = $this->createQueryBuilder('al');
        if ($group == UserGroupEnum::EMPLOYEES) {
            $qb->where('al.forEmployees <> 0');
        } else if ($group == UserGroupEnum::CUSTOMERS) {
            $qb->where('al.forCustomers <> 0');
        } else {
            $qb->where('al.forOthers <> 0');
        }
        return $qb;
    }
}
