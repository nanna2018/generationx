<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/inicio", name="main_inicio")
     */
    public function inicio()
    {
        return $this->render('main/inicio.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
