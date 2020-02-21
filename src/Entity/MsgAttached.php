<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity @ORM\Table(name="msg_attached")
 **/
class MsgAttached
{
    /** @ORM\Id @ORM\Column(type="integer")*/
    private $user_id;

    /** @ORM\Id @ORM\Column(type="string")*/
    private $msg_id;

    /** @ORM\Column(type="boolean")*/
    private $readed;




}