<?php

namespace App\Controller;

use App\Entity\Room;
use App\Entity\Owner;
use App\Form\RoomType;
use App\Repository\RoomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
/**
 * @Route("/room")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/", name="room_index", methods={"GET"})
     */
    public function index(RoomRepository $roomRepository): Response
    {
        return $this->render('room/index.html.twig', [
            'rooms' => $roomRepository->findAll(),
        ]);
    }
    
    /**
     * @Route("/panier", name="room_panier", methods={"GET"})
     */
    public function indexPanier(RoomRepository $roomRepository): Response
    {
        return $this->render('room/index_panier.html.twig', [
            'rooms' => $roomRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="room_new", methods={"GET","POST"})
     * @IsGranted("ROLE_USER")
     */
    public function new(Request $request): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($room);
            $entityManager->flush();
            
            $this->get('session')->getFlashBag()->add('message', 'Chambre bien ajouté');

            return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('room/new.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/addtoowner/{id}", name="room_addtoowner", methods="GET|POST")
     * @IsGranted("ROLE_USER")
     */
    public function addToowner(Request $request, Owner $owner): Response
    {
        $room = new Room();
        $room->setOwner($owner);
        
        $form = $this->createForm(RoomType::class, $room,
        ['display_owner' => false]
            );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($room);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('message', 'Chambre bien assignée au propriétaire');
            
            return $this->redirectToRoute('owner_show', array('id' => $owner->getId() ));
        }
        
        return $this->render('room/add.html.twig', [
            'owner' => $owner,
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="room_show", methods={"GET"})
     */
    public function show(Room $room): Response
    {
        return $this->render('room/show.html.twig', [
            'room' => $room,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="room_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_USER")
     */
    public function edit(Request $request, Room $room): Response
    {
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            
            $this->get('session')->getFlashBag()->add('message', 'Maj : Succès');

            return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('room/edit.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="room_delete", methods={"POST"})
     * @IsGranted("ROLE_USER")
     */
    public function delete(Request $request, Room $room): Response
    {
        if ($this->isCsrfTokenValid('delete'.$room->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($room);
            $entityManager->flush();
        }

        return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
    }
    
    /**
     * Marque une chambre dans la session de l'utilisateur 
     *
     * @Route("/mark/{id}", name="room_mark", requirements={ "id": "\d+"}, methods="GET")
     */
    public function markAction(Room $room): Response
    {
        $panier = $this->get('session')->get('panier');
        // Si le tableau des rooms dans le panier n'existe pas on le créer:
        if( ! is_array($panier) ){
            $panier = array();
        }
        
        $id = $room->getId();
        //Si on marque  une seconde fois la room, on la retire du panier.
        if( ! in_array($id, $panier) )
        {
            $panier[] = $id;
        }
        else
        {
            $panier = array_diff($panier, array($id));
        }
        
        $this->get('session')->set('panier', $panier);
        dump($panier);
        
        return $this->redirectToRoute('room_index', [], Response::HTTP_SEE_OTHER);
    }
}
