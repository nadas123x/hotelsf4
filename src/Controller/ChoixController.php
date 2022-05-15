<?php

namespace App\Controller;

use App\Entity\Hotel;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ChoixController 
{
     /**
     * @var Environment
     */
private $twig;
public function __construct(Environment $twig){
    $this->twig=$twig;
}
public function choix(): Response
    {
        return new Response( $this->twig->render('pages/choix.html.twig')
          );
    }
}