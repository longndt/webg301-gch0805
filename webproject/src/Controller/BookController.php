<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book/api", methods={"GET"}, name="book_api")
     */
    public function bookAPI() : JsonResponse {
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();
        return $this->json(
            ['books' => $books ],
            200 //HTTP: OK
        );
    }

    /**
     * @Route("/books", name="book_index")
     */
    public function bookIndex() {
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();
        return $this->render("book/index.html.twig",
        [
            'books' => $books
        ]);
    }

    /**
     * @Route("/book/{id}", name="book_detail")
     */
    public function bookDetail($id) {

    }

    /**
     * @Route("/book/delete/{id}", name="book_delete")
     */
    public function bookDelete($id) {

    }

    /**
     * @Route("/book/add", name="book_add")
     */
    public function bookAdd(Request $request) {

    }

    /**
     * @Route("/book/edit/{id}", name="book_edit")
     */
    public function bookEdit(Request $request, $id) {
        
    }
}
