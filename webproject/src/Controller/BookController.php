<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\Request;
use function PHPUnit\Framework\throwException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class BookController extends AbstractController
{
    /**
     * @Route("/books/api", methods={"GET"}, name="book_api")
     */
    public function bookAPI() : JsonResponse {
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();
        return $this->json(['books' => $books], 200);
    }
 
    public function bookIndex() {
        $books = $this->getDoctrine()->getRepository(Book::class)->findAll();
        return $this->render("book/index.html.twig",
        [
            'books' => $books
        ]);
    }

    /**
     * @Route("/book/detail/{id}", name="book_detail")
     */
    public function bookDetail($id) {
        $book = $this->getDoctrine()->getRepository(Book::class)->find($id);
        if ($book == null) {
            $this->addFlash("Error","Book not found");
            return $this->redirectToRoute("book_index");
        }
        return $this->render("book/detail.html.twig",
        [
            "book" => $book
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/book/delete/{id}", name="book_delete")
     */
    public function bookDelete($id) {
        $book = $this->getDoctrine()->getRepository(Book::class)->find($id);
        if ($book == null) {
            $this->addFlash("Error","Delete book failed");
        } else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($book);
            $manager->flush();
            $this->addFlash("Success","Delete book succeed");
        }
        return $this->redirectToRoute("book_index");
    }

   /**
    * @IsGranted("ROLE_ADMIN")
     * @Route("/book/add", name="book_add")
     */
    public function bookAdd(Request $request) {
        $book = new Book();
        $form = $this->createForm(BookType::class,$book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //code upload v?? x??? l?? t??n ???nh
            //B1: l???y t??n ???nh t??? file upload
            $image = $book->getCover();
            /*B2: ?????t t??n m???i cho file ???nh 
            => ?????m b???o t??n ???nh l?? duy nh???t */
            $imgName = uniqid(); //unique id
            //B3: l???y ??u??i ???nh (image extension)
            $imgExtension = $image->guessExtension();
            //Note: c???n s???a l???i code getter/setter c???a Book Entity
            //B4: n???i t??n m???i v?? ??u??i th??nh t??n file ???nh ho??n thi???n
            $imageName = $imgName . "." . $imgExtension;
            //B5: copy ???nh v??o th?? m???c ch??? ?????nh
            try {
              $image->move(
                  $this->getParameter('book_cover'), $imageName
                  /* Note: c???n khai b??o ???????ng d???n th?? m???c ch???a ???nh
                  ??? file config/services.yaml */
              ); 
            } catch (FileException $e) {
                throwException($e);
            }
            //B6: l??u t??n ???nh v??o DB
            $book->setCover($imageName);

            //add d??? li???u v??o DB
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($book);
            $manager->flush();

            //hi???n th??? th??ng b??o v?? redirect v??? book index
            $this->addFlash("Success","Add book succeed !");
            return $this->redirectToRoute("book_index");
        }

        return $this->renderForm("book/add.html.twig",
        [
            'form' => $form
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/book/edit/{id}", name="book_edit")
     */
    public function bookEdit(Request $request, $id) {
        $book = $this->getDoctrine()->getRepository(Book::class)->find($id);
        $form = $this->createForm(BookType::class,$book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //code upload v?? x??? l?? t??n ???nh
            //B1: l???y d??? li???u ???nh t??? form
            $file = $form['cover']->getData(); 
            //B2: check xem d??? li???u ???nh c?? null kh??ng
            if ($file != null) { //ng?????i d??ng b???m select file ????? update ???nh m???i
                //B3: l???y t??n ???nh t??? file upload
                $image = $book->getCover();
                /*B4: ?????t t??n m???i cho file ???nh 
                => ?????m b???o t??n ???nh l?? duy nh???t */
                $imgName = uniqid(); //unique id
                //B5: l???y ??u??i ???nh (image extension)
                $imgExtension = $image->guessExtension();
                //Note: c???n s???a l???i code getter/setter c???a Book Entity
                //B6: n???i t??n m???i v?? ??u??i th??nh t??n file ???nh ho??n thi???n
                $imageName = $imgName . "." . $imgExtension;
                //B7: copy ???nh v??o th?? m???c ch??? ?????nh
                try {
                $image->move(
                    $this->getParameter('book_cover'), $imageName
                    /* Note: c???n khai b??o ???????ng d???n th?? m???c ch???a ???nh
                    ??? file config/services.yaml */
                ); 
                } catch (FileException $e) {
                    throwException($e);
                }
                //B8: l??u t??n ???nh v??o DB
                $book->setCover($imageName);
            }
            
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($book);
            $manager->flush();
            $this->addFlash("Success","Edit book succeed !");
            return $this->redirectToRoute("book_index");
        }

        return $this->renderForm("book/edit.html.twig",
        [
            'form' => $form
        ]);
    }

    /**
     * @Route("/book/sort/asc", name="sort_book_id_asc")
     */
    public function sortBookByIdAsc (BookRepository $repository) {
        $books = $repository->sortIdAsc();
        return $this->render("book/index.html.twig",
        [
            'books' => $books
        ]);
    }

     /**
     * @Route("/book/sort/desc", name="sort_book_id_desc")
     */
    public function sortBookByIdDesc (BookRepository $repository) {
        $books = $repository->sortIdDesc();
        return $this->render("book/index.html.twig",
        [
            'books' => $books
        ]);
    }

    /**
     * @Route("/book/search", name="search_book_title")
     */
    public function searchBookByTitle (BookRepository $repository, Request $request) {
        $title = $request->get("title");
        $books = $repository->searchBook($title);
        return $this->render("book/index.html.twig",
        [
            'books' => $books
        ]);
    }
}
