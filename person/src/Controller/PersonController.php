<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    /**
     * @Route("/person", name = "person_index")
     */
    public function personIndex() {
        $person = $this->getDoctrine()->getRepository(Person::class)->findAll();
        return $this->render("person/index.html.twig",
        [
            'person' => $person
        ]);
    }

    /**
     * @Route("/person/detail/{id}", name = "person_detail")
     */
    public function personDetail ($id) {
        $person = $this->getDoctrine()->getRepository(Person::class)->find($id);
        if ($person != null) {
            return $this->render("person/detail.html.twig",
            [
                'person' => $person
            ]);
        } else {
            return $this->redirectToRoute("person_index");
        }  
    }

    /**
     * @Route("/person/delete/{id}", name = "person_delete")
     */
    public function personDelete ($id) {
        $person = $this->getDoctrine()->getRepository(Person::class)->find($id);
        if ($person != null) {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($person);
            $manager->flush();
        }
        return $this->redirectToRoute("person_index");
    }

    /**
     * @Route("/person/add", name = "person_add")
     */
    public function personAdd (Request $request) {

    } 

    /**
     * @Route("/person/edit/{id}", name = "person_edit")
     */
    public function personEdit (Request $request, $id) {
        
    }
}
