<?php

namespace App\Controller;

use App\Entity\Hotel;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class DemandevalideController 
{
     /**
     * @var Environment
     */
private $twig;
public function __construct(Environment $twig){
    $this->twig=$twig;
}
public function valide(): Response
    {
        return new Response( $this->twig->render('pages/valide.html.twig')
          );
    }
}