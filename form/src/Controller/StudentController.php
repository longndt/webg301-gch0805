<?php

namespace App\Controller;

use App\Form\StudentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student/new', name: 'new_student')]
    public function newStudent (Request $request) {
        $studentForm = $this->createForm(StudentType::class);
        $studentForm->handleRequest($request);
        if ($studentForm->isSubmitted() && $studentForm->isValid()) {
            $student = $studentForm->getData();
            //đẩy dữ liệu từ form vào DB
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($student);
            $manager->flush();
            return $this->redirectToRoute('add_student_success');
        }
        return $this->renderForm("student/add.html.twig",
            [
                'studentForm' => $studentForm
            ]);
    }

    #[Route('/student/success', name: 'add_student_success')]
    public function addStudentSucess() {
        return $this->render("student/success.html.twig");
    }
}
