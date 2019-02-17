<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 17.02.2019
 * Time: 14:40
 */

namespace App\Controller\Site;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/members")
 */
class MembersController extends AbstractController
{
    /**
     * @Route("/", name="members_home")
     */
    public function indexAction()
    {
        if(is_null($this->getUser())){
            return $this->render('layouts/site/login.html.twig');
        }

        return $this->render('layouts/admin/index.html.twig');
    }
}