<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage(): Response
    {
        return new Response('This is my response');
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug): Response
    {
        return new Response(
            sprintf('This is my new page for question"%s"!',
                ucwords(str_replace('-', ' ', $slug))
            ));
    }
}