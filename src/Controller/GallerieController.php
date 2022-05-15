<?php

namespace App\Controller;

use App\Entity\Hotel;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class GallerieController 
{
     /**
     * @var Environment
     */
private $twig;
public function __construct(Environment $twig){
    $this->twig=$twig;
}
public function galerie(): Response
    {
        return new Response( $this->twig->render('hotel/galerieriu.html.twig')
          );
    }
}