<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServeurController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('serveur/index.html.twig', [
            'controller_name' => 'ServeurController',
        ]);
    }

    /**
     * @Route("/form", name="form")
     */
    public function form(): Response
    {
	return $this->render('serveur/form.html.twig', [
	    'controller_name' => 'ServeurController',
	]);
    }
} 

