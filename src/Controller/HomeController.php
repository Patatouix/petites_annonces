<?php 

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{   
    /**
     * @Route("/", name="home")
     */
    public function index(): HttpFoundationResponse
    {
        return $this->render('home/home.html.twig', [
            'title' => 'Mon site d\'annonces'
        ]);
    }
}