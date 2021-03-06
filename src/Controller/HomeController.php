<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }


    /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function dashboard()
    {
        return $this->render('home/dashboard.html.twig');
    }

}