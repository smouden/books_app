<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyCommandsController extends AbstractController
{
    #[Route('/my/commands', name: 'app_my_commands')]
    public function index(): Response
    {
        return $this->render('my_commands/index.html.twig', [
            'controller_name' => 'MyCommandsController',
        ]);
    }
}
