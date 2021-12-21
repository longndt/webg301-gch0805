<?php

namespace App\Controller;

use App\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{
    /**
     * @Route("/genres", name="genre_index")
     */
    public function genreIndex() {
        $genres = $this->getDoctrine()->getRepository(Genre::class)->findAll();
        return $this->render("genre/index.html.twig",
        [
            'genres' => $genres
        ]);
    }

    /**
     * @Route("/genre/detail/{id}", name="genre_detail")
     */
    public function genreDetail($id) {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->find($id);
        if ($genre == null) {
            $this->addFlash("Error", "Genre not found");
            return $this->redirectToRoute("genre_index");
        }
        return $this->render("genre/detail.html.twig",
        [
            'genre' => $genre
        ]);
    }

    /**
     * @Route("/genre/delete/{id}", name="genre_delete")
     */
    public function genreDelete($id) {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->find($id);
        if ($genre = null) {
            $this->addFlash("Error", "Genre delete failed");
            return $this->redirectToRoute("genre_delete");
        } else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($genre);
            $manager->flush();
        }
        return $this->redirectToRoute("genre_index");
    }

    /**
     * @Route("/genre/add", name="genre_add")
     */
    public function genreAdd(Request $request) {

    }

    /**
     * @Route("/genre/edit/{id}", name="genre_edit")
     */
    public function genreEdit(Request $request, $id) {

    }
}
