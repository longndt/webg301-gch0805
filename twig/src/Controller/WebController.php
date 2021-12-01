<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{
    /**
     * @Route("/demo", name = "demo")
     */
    public function demo() {
        $symfony = "Symfony framework";
        return $this->render("web/demo.html.twig", 
            [
               'symfony' => $symfony 
            ]
        );
    }

     /**
     * @Route("/home", name = "home")
     */
    public function home() {
        return $this->render("web/home.html.twig");
    }

    /**
     * @Route("/hanoi", name = "hanoi")
     */
    public function hanoi() {
        return $this->render("web/hanoi.html.twig");
    }
}
