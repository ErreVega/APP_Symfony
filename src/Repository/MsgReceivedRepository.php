<?php

namespace App\Repository;
use Doctrine\ORM\EntityRepository;

class  MsgReceivedRepository extends EntityRepository
{
    public function findMsgBy($user_id)
    {
        $qb = $this->createQueryBuilder("msg_alias")
            ->select("m.msg_id")
            ->from(" App\Entity\MsgReceived", "m")
            ->where('m.user_id = :user')
            ->setParameter('user', $user_id)
            ->distinct();

        $query = $qb->getQuery();
        $message = $query->execute();

        if (!$message){
            return false;
        }
        Return $message;
    }

}
