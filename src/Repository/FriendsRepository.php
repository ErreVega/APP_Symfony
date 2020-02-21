<?php

namespace App\Repository;
use Doctrine\ORM\EntityRepository;

class FriendsRepository extends EntityRepository
{
    public function getFriends($user_id)
    {
        $qb = $this->createQueryBuilder("user")
            ->select("f.user_id1 as user_id")
            ->from(" App\Entity\Friends", "f")
            ->where("f.user_id2 = :user and f.status = 'acepted'")
            ->setParameter('user', $user_id)
            ->distinct();

        $query = $qb->getQuery();
        $res1 = $query->execute();

        $qb = $this->createQueryBuilder("user")
            ->select("f.user_id2 as user_id")
            ->from(" App\Entity\Friends", "f")
            ->where("f.user_id1 = :user and f.status = 'acepted'")
            ->setParameter('user', $user_id)
            ->distinct();

        $query = $qb->getQuery();
        $res2 = $query->execute();

        if (!$res1 && !$res2){
            return false;
        }
        Return array_merge($res1, $res2);
    }

}
