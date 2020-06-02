<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RalisationController extends AbstractController
{
    /**
     * @Route("/Realisation", name="Realisation.index")
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('mes_pages/Realisation.html.twig');

    }


}