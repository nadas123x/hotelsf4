<?php

namespace App\Controller;

use App\Entity\HotelRiuTikida;
use App\Form\HotelRiuTikidaType;
use App\Repository\HotelRiuTikidaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hotel/riu/tikida")
 */
class HotelRiuTikidaController extends AbstractController
{
    /**
     * @Route("/", name="app_hotel_riu_tikida_index", methods={"GET"})
     */
    public function index(HotelRiuTikidaRepository $hotelRiuTikidaRepository): Response

    {
        
        return $this->render('hotel_riu_tikida/index.html.twig', [
            'hotel_riu_tikida' => $hotelRiuTikidaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_hotel_riu_tikida_new", methods={"GET", "POST"})
     */
    public function new(Request $request, HotelRiuTikidaRepository $hotelRiuTikidaRepository): Response
    {
        $hotelRiuTikida = new HotelRiuTikida();
        $form = $this->createForm(HotelRiuTikidaType::class, $hotelRiuTikida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hotelRiuTikidaRepository->add($hotelRiuTikida);
            return $this->redirectToRoute('app_hotel_riu_tikida_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotel_riu_tikida/new.html.twig', [
            'hotel_riu_tikida' => $hotelRiuTikida,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_hotel_riu_tikida_show", methods={"GET"})
     */
    public function show(HotelRiuTikida $hotelRiuTikida): Response
    {
        return $this->render('hotel_riu_tikida/show.html.twig', [
            'hotel_riu_tikida' => $hotelRiuTikida,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_hotel_riu_tikida_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, HotelRiuTikida $hotelRiuTikida, HotelRiuTikidaRepository $hotelRiuTikidaRepository): Response
    {
        $form = $this->createForm(HotelRiuTikidaType::class, $hotelRiuTikida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hotelRiuTikidaRepository->add($hotelRiuTikida);
            return $this->redirectToRoute('app_hotel_riu_tikida_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotel_riu_tikida/edit.html.twig', [
            'hotel_riu_tikida' => $hotelRiuTikida,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_hotel_riu_tikida_delete", methods={"POST"})
     */
    public function delete(Request $request, HotelRiuTikida $hotelRiuTikida, HotelRiuTikidaRepository $hotelRiuTikidaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hotelRiuTikida->getId(), $request->request->get('_token'))) {
            $hotelRiuTikidaRepository->remove($hotelRiuTikida);
        }

        return $this->redirectToRoute('app_hotel_riu_tikida_index', [], Response::HTTP_SEE_OTHER);
    }
}
