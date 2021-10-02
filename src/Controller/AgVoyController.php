<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\Room;

/**
 * Controleur Todo
 * @Route("/agvoy")
 */
class AgVoyController extends AbstractController
{
    /**
     * @Route("/", name="home", methods="GET")
     */
    public function home(): Response
    {
        return $this->render('ag_voy/index.html.twig', [
            'controller_name' => 'AgVoyController',
        ]);
    }
    
    /**
     * @Route("/room/list", name="room_index", methods="GET")
     */
    public function indexRoom(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository(Room::class)->findAll();
        return $this->render('ag_voy/room/index.html.twig', [
            'rooms' => $rooms
        ]);
    }
    
    /**
     * @Route("/room/{id}", name="room_show", requirements={ "id": "\d+"}, methods="GET")
     */
    public function showRoom($room): Response
    {
        //visiblement mettre uniqument l'id de la room dans l'url ne suffit pas
        //Peut être est-ce lié à un fichier de config inconnu encore
        //en attendant il faut modifier pour faire un filtrage classique.
        return $this->render('ag_voy/room/show.html.twig', [
            'room' => $room
        ]);
    }
}
