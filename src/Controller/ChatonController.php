<?php
namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ChatonController extends AbstractController
{

    /**
     * @Route("/Symfony/chaton")
     */
    public function mignon()
    {


        
        return $this->render('chaton.html.twig', [

        ]);
    }
} ?>
