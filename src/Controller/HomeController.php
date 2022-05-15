<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\HotelRepository;
use Twig\Environment;

class HomeController extends AbstractController
{
  
    
        public function index(HotelRepository $repository): Response
        {
            $hotel = $repository->findAll();
            return $this->render('pages/home.html.twig', [
                'properties' => $hotel
            ]);
        }    }
