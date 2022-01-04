<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerguntasController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('');
    }

    /**
     * @Route("/perguntas/{slug}")
     */
    public function show($slug)
    {

        $respostas = [
            'Resposta 1',
            'Resposta 2',
            'Resposta 3',
        ];

        return $this->render('perguntas/exibe.html.twig',[
            'titulo' => ucwords(str_replace('-',' ', $slug)),
            'respostas' => $respostas
            ]);
    }
}