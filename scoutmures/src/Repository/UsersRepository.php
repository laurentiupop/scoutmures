<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Created by PhpStorm.
 * User: florin
 * Date: 05.03.2019
 * Time: 17:40
 */

class UsersRepository extends EntityRepository {


    private $session;
    public function setSession(Session $session)
    {
        $this->session = $session;
    }

}