<?php

namespace App\Controller;

use App\Form\QuestionType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends AbstractController
{
    #[Route('/question/ask', name: 'question_form')]
    public function index(Request $request): Response
    {
        $formQuestion = $this->createForm(QuestionType::class);
        $formQuestion->handleRequest($this->$request);
        if($formQuestion->isSubmitted() && $formQuestion->isValid()){
            dump($formQuestion->getData());
        }


        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }
}
