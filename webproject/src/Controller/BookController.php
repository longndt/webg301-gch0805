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
            //code upload và xử lý tên ảnh
            //B1: lấy tên ảnh từ file upload
            $image = $book->getCover();
            /*B2: đặt tên mới cho file ảnh 
            => đảm bảo tên ảnh là duy nhất */
            $imgName = uniqid(); //unique id
            //B3: lấy đuôi ảnh (image extension)
            $imgExtension = $image->guessExtension();
            //Note: cần sửa lại code getter/setter của Book Entity
            //B4: nối tên mới và đuôi thành tên file ảnh hoàn thiện
            $imageName = $imgName . "." . $imgExtension;
            //B5: copy ảnh vào thư mục chỉ định
            try {
              $image->move(
                  $this->getParameter('book_cover'), $imageName
                  /* Note: cần khai báo đường dẫn thư mục chứa ảnh
                  ở file config/services.yaml */
              ); 
            } catch (FileException $e) {
                throwException($e);
            }
            //B6: lưu tên ảnh vào DB
            $book->setCover($imageName);

            //add dữ liệu vào DB
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($book);
            $manager->flush();

            //hiển thị thông báo và redirect về book index
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
            //code upload và xử lý tên ảnh
            //B1: lấy dữ liệu ảnh từ form
            $file = $form['cover']->getData(); 
            //B2: check xem dữ liệu ảnh có null không
            if ($file != null) { //người dùng bấm select file để update ảnh mới
                //B3: lấy tên ảnh từ file upload
                $image = $book->getCover();
                /*B4: đặt tên mới cho file ảnh 
                => đảm bảo tên ảnh là duy nhất */
                $imgName = uniqid(); //unique id
                //B5: lấy đuôi ảnh (image extension)
                $imgExtension = $image->guessExtension();
                //Note: cần sửa lại code getter/setter của Book Entity
                //B6: nối tên mới và đuôi thành tên file ảnh hoàn thiện
                $imageName = $imgName . "." . $imgExtension;
                //B7: copy ảnh vào thư mục chỉ định
                try {
                $image->move(
                    $this->getParameter('book_cover'), $imageName
                    /* Note: cần khai báo đường dẫn thư mục chứa ảnh
                    ở file config/services.yaml */
                ); 
                } catch (FileException $e) {
                    throwException($e);
                }
                //B8: lưu tên ảnh vào DB
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
