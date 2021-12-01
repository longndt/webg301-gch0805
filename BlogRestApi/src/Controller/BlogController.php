<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
    /**
    * @Route("/blog/viewall", methods = {"GET"}, name = "view_all_blog_api")
    */
    public function viewAllBlogs (SerializerInterface $serializer) {
       $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();  
       $json = $serializer->serialize($blogs,'json'); 
       $xml = $serializer->serialize($blogs,'xml');
       return new Response($json,
                           Response::HTTP_OK, //Code: 200
                           [
                               'content-type' => 'application/json'
                           ]
       );
    }

    /**
     * @Route("/blog/view/{id}", methods = {"GET"}, name = "view_blog_by_id_api")
     */
    public function viewBlogById(SerializerInterface $serializer, $id) {
       $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);
       if ($blog == null) {
           return new Response("Blog not found", Response::HTTP_NOT_FOUND);
       }
       $json = $serializer->serialize($blog,'json'); 
       $xml = $serializer->serialize($blog,'xml');
       return new Response($xml,
                            Response::HTTP_OK, //Code: 200
                            [
                                'content-type' => 'application/xml'
                            ]
       );     
    }

    #[Route('/blog/delete/{id}', methods: 'DELETE', name: 'delete_blog_api')]
    public function deleteBlog ($id) {
       $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);
       if ($blog == null) {
        return new Response("Not found", Response::HTTP_BAD_REQUEST);
       }
       $manager = $this->getDoctrine()->getManager();
       $manager->remove($blog);
       $manager->flush();
       return new Response("delete suceed !", Response::HTTP_OK); 
    }
    
    #[Route('/blog/add', methods: 'POST', name: 'add_blog_api')]
    public function addBlog (Request $request) {
        $blog = new Blog();
        $data = json_decode($request->getContent(),true);
        $blog->setTitle($data['Title']);
        $blog->setAuthor($data['Author']);
        $blog->setContent($data['Content']);
        $blog->setTotalPage($data['TotalPage']);
        $blog->setDate(\DateTime::createFromFormat('Y-m-d',$data['Date']));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($blog);
        $manager->flush();

        return new Response("Add succeed !",Response::HTTP_CREATED);
    }

    #[Route('/blog/edit/{id}', methods: 'PUT', name: 'edit_blog_api')]
    public function editBlog (Request $request, $id) {
        $blog = $this->getDoctrine()->getRepository(Blog::class)->find($id);
        if ($blog == null) {
            return new Response("Not found", Response::HTTP_BAD_REQUEST);
        }
        $data = json_decode($request->getContent(),true);
        $blog->setTitle($data['Title']);
        $blog->setAuthor($data['Author']);
        $blog->setContent($data['Content']);
        $blog->setTotalPage($data['TotalPage']);
        $blog->setDate(\DateTime::createFromFormat('Y-m-d',$data['Date']));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($blog);
        $manager->flush();

        return new Response("Edit succeed !",Response::HTTP_ACCEPTED);
    }
}
