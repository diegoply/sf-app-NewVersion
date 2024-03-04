<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{
    #[Route('/app', name: 'app')]
    public function index(): Response
    {
        $data = "Diego";
        $age = 18;
        $city = "Avignon";
        $pays = "France";
        return $this->render('app/index.html.twig', [
            'data' => $data,
            'age' => $age,
            'city' => $city,
            'pays' => $pays
        ]);
    }
}
