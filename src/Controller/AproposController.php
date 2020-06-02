<?php


namespace App\Controller;


use App\Entity\Apropos;
use App\Repository\AproposRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{

    /**
     * @var AproposRepository
     */
    private $repository;

    function __construct(AproposRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * @Route("/Apropos", name="Apropos.index")
     * @return Response
     */
    public function index(): Response
    {

        $repository =  $this->getDoctrine()->getRepository(Apropos::class);
        $Apropos = $this->repository->find('1');
        return $this->render('mes_pages/Apropos.html.twig', [
            'Apropos' => $Apropos
        ]);
    }

}
     $Apropos = new Apropos();
     $Apropos->setTitre('About me')
     ->setImage('image')
     ->setContenu('hello bob frontend developper');
     $em = $this->getDoctrine()->getManager();
     $em->persist($Apropos);
    $em->flush();









