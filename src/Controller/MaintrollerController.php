<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaintrollerController extends AbstractController
{
    #[Route('/ ', name: 'app_maintroller')]
    public function index(): Response
    {
        return $this->render('maintroller/index.html.twig', [
            'controller_name' => 'MaintrollerController',
        ]);
    }
}
