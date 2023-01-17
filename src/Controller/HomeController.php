<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index($gameRepository): Response
    {


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'games' => $gameRepository->findAll()

        ]);
    }
}
