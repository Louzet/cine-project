<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CineController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('cine/index.html.twig', [
            'site_name' => 'Cine Project',
        ]);
    }

    /**
     * @Route("/news", name="news")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function news()
    {
        return $this->render('cine/nouveaute.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/reservation", name="reservation")
     */
    public function reservation()
    {
        return $this->render('cine/reservation.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/tarifs", name="tarifs")
     */
    public function tarifs()
    {
        return $this->render('cine/tarifs.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('cine/contact.html.twig');
    }
}
