<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/Contact", name="Contact.index")
     * @return Response
     */
    public function index(): Response
    {

        return $this->render('mes_pages/Contact.html.twig');

    }
}