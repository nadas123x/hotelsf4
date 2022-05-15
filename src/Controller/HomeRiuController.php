<?php

namespace App\Controller;

use App\Entity\HotelRiuTikidaSearch;
use App\Form\HotelRiuTikidaSearchType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\HotelRiuTikidaRepository;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class HomeRiuController extends AbstractController
{
    
        public function index(HotelRiuTikidaRepository $repository): Response
        {   
            $hotel_riu_tikida = $repository->findAll();
            return $this->render('pages/homeriutikida.html.twig', [
                'properties' => $hotel_riu_tikida,
              

            ]);
        }    }
