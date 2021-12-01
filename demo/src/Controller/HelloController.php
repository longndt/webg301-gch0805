<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/demo1", name = "demo1")
     */
    public function demo1() {
        return $this->render("hello/demo1.html");
    }

    #[Route('/product/delete/{id}', name: 'demo2')]
    public function demo2($index) {
        $name = "Long";
        $age = 33;
        $sports = array('football', 'badminton', 'swimming');
        return $this->render("hello/demo2.html.twig",
        [
            'ten' => $name,
            'tuoi' => $age,
            'thethao' => $sports
        ]);
    }





    #[Route('/hello', name: 'hello')]
    public function index(): Response
    {
        return $this->render('hello/index.html.twig', 
        [
            'greenwich' => 'Greenwich University',
            'fpt' => 'FPT University'
        ]
    );
    }
}
