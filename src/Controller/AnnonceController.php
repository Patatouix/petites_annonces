<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index(): Response
    {
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quam cum corrupti modi cupiditate nostrum odit illo veniam, nulla neque officia expedita rerum, aliquid libero incidunt rem iusto reprehenderit maxime!',
            'date' => new DateTime()
        ]);
    }
}
