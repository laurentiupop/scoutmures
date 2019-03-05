<?php
namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

//        $entityManager = $this->getDoctrine()->getManager();
//        $user = $entityManager->getRepository(Users::class)->findAll();

        return $this->render('layouts/site/index.html.twig');
    }

}