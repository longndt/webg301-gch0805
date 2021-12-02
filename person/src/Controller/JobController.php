<?php

namespace App\Controller;

use App\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    #[Route('/job', name : 'job_index')]
    public function jobIndex () {
        $job = $this->getDoctrine()->getRepository(Job::class)->findAll();
        return $this->render("/job/index.html.twig",
        [
            'job' => $job
        ]);
    }

    #[Route('/job/detail/{id}', name : 'job_detail')]
    public function jobDetail ($id) {
        $job = $this->getDoctrine()->getRepository(Job::class)->find($id);
        if ($job != null) {
            return $this->render("/job/detail.html.twig",
            [
                'job' => $job
            ]);
        } else {
            return $this->redirectToRoute("job_index");
        }
       
    }

    #[Route('/job/delete/{id}', name : 'job_delete')]
    public function jobDelete ($id) {
        $job = $this->getDoctrine()->getRepository(Job::class)->find($id);
        if ($job != null) {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($job);
            $manager->flush();
        }
        return $this->redirectToRoute('job_index');
    }

    #[Route('/job/add', name : 'job_add')]
    public function jobAdd (Request $request) {

    }

    #[Route('/job/edit/{id}', name : 'job_edit')]
    public function jobEdit (Request $request, $id) {
        
    }
}
