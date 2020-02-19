<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JoueursController extends AbstractController
{
    /**
     * @Route("/joueurs", name="joueurs")
     */
    public function home()
    {
        return $this->render('joueurs/home.html.twig', [
            'controller_name' => 'JoueursController',
        ]);
    }
}


