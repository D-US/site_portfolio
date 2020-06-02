<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetenceController extends AbstractController
{

    /**
     * @Route("/competence", name="competence.index")
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('mes_pages/competence.html.twig');

    }

}