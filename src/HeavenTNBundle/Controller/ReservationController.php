<?php

namespace HeavenTNBundle\Controller;

use HeavenTNBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reservation controller.
 *
 */
class ReservationController extends Controller
{
    /**
     * Lists all reservation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('HeavenTNBundle:Reservation')->findAll();

        return $this->render('reservation/index.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * Creates a new reservation entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        $reservation = new \HeavenTNBundle\Entity\Reservation();
        $form = $this->createForm('HeavenTNBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setUser($user);
            $reservation->setPosition(1);
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('heaven_tn_homepage', array('idRes' => $reservation->getIdres()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }
    public function new2Action(Request $request)
    {
        $user = $this->getUser();
        $reservation = new Reservation();
        $form = $this->createForm('HeavenTNBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setUser($user);
            $reservation->setPosition(2);
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('heaven_homepage', array('idRes' => $reservation->getIdres()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }
    public function new3Action(Request $request)
    {
        $user = $this->getUser();
        $reservation = new Reservation();
        $form = $this->createForm('HeavenTNBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setUser($user);
            $reservation->setPosition(3);
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('heaven_homepage', array('idRes' => $reservation->getIdres()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }
    public function new4Action(Request $request)
    {
        $user = $this->getUser();
        $reservation = new Reservation();
        $form = $this->createForm('HeavenTNBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setUser($user);
            $reservation->setPosition(4);
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('heaven_homepage', array('idRes' => $reservation->getIdres()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }
    public function new5Action(Request $request)
    {
        $user = $this->getUser();
        $reservation = new Reservation();
        $form = $this->createForm('HeavenTNBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reservation->setUser($user);
            $reservation->setPosition(5);
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('heaven_homepage', array('idRes' => $reservation->getIdres()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a reservation entity.
     *
     */
    public function showAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('HeavenTNBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_edit', array('idRes' => $reservation->getIdres()));
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('idRes' => $reservation->getIdres())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
