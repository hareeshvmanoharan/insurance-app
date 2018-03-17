<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:User:home.html.twig', array(
            // ...
        ));
    }

}
