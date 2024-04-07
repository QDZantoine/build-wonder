<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $questions=[
            [
                'title' => 'je suis une super question ',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt maxime deserunt recusandae maiores temporibus, dicta dignissimos porro corrupti neque harum vitae velit laudantium veritatis et ad consequuntur commodi facere corporis!',
                'rating' => 20,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar'=>'https://randomuser.me/api/portraits/women/90.jpg'
                ],
                'nbrOfResponse' =>15

            ],   
            
            [
                'title' => 'je suis une super question ',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt maxime deserunt recusandae maiores temporibus, dicta dignissimos porro corrupti neque harum vitae velit laudantium veritatis et ad consequuntur commodi facere corporis!',
                'rating' => 0,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar'=>'https://randomuser.me/api/portraits/women/79.jpg'
                ],
                'nbrOfResponse' =>15

            ],
            [
                'title' => 'je suis une super question ',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt maxime deserunt recusandae maiores temporibus, dicta dignissimos porro corrupti neque harum vitae velit laudantium veritatis et ad consequuntur commodi facere corporis!',
                'rating' => -15,
                'author' => [
                    'name' => 'Jean Dupont',
                    'avatar'=>'https://randomuser.me/api/portraits/men/79.jpg'
                ],
                'nbrOfResponse' =>15

            ],
            

   

        ];
        return $this->render('home/index.html.twig', [
            'questions' => $questions,
        ]);
    }
}
