<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
     /**
      * @Route("/task/new" , name = "new_task")
      */
      public function newTask(Request $request) {
          $task = new Task();
          $taskForm = $this->createFormBuilder($task)
                           ->add("Title", TextType::class, 
                                [
                                    'required' => false,
                                    'label' => "Tiêu đề"
                                ])
                           ->add("Content", TextType::class,
                                [
                                    'label' => "Nội dung",
                                    'attr' => [
                                        'minlength' => 10,
                                        'maxlength' => 30
                                    ]
                                ])
                           ->add("Deadline", DateType::class,
                                [
                                    'widget' => 'single_text'
                                ])
                           ->add("Add", SubmitType::class)
                           ->getForm();
          $taskForm->handleRequest($request);
          if ($taskForm->isSubmitted() && $taskForm->isValid()) {
              $data = $taskForm->getData();
              $title = $data->Title; //truy xuất đến attribute (cần phải set public modifier)
              $content = $data->getContent(); //truy xuất đến method (không cần sửa code Entity)
              $deadline = $data->getDeadline();
              return $this->render("task/success.html.twig",
                [
                    'title' => $title,
                    'content' => $content,
                    'deadline' => $deadline
                ]);
          }
          return $this->render("task/new.html.twig",
          [
                'taskForm' => $taskForm->createView()
          ]);
      }
}
