<?php

namespace HeavenTNBundle\Controller;

use HeavenTNBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HeavenTNBundle\Form\EventType;
use Symfony\Component\HttpFoundation\Request;



class GestionEventController extends Controller
{
    public function ajouterEventAction(Request $request)
    {


        $event=new Event();
        $event->setStatut("In Progress");
        $form=$this->createForm(EventType::class,$event);
        $form=$form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted())
        {
            $file = $form->get('eventavatar')->getData();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->getExtension();

            // Move the file to the directory where brochures are stored
            $path = "http://127.0.0.1/" ;
            $file->move("C:\wamp64\www", $fileName);
            $event->setEventavatar($path.$fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('afficher_event');

        }

        return $this->render('@HeavenTN/GestionEvent/ajouter_event.html.twig', array(
            'form'=>$form->createView()



        ));


    }

    public function modifierEventAction($idevent, Request  $request)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository(Event::class)->find($idevent);
        $form=$this->createForm(EventType::class,$event);
        $form=$form->handleRequest($request);
        if($form->isValid()&& $form->isSubmitted())
        {
            $file = $form->get('eventavatar')->getData();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->getExtension();

            // Move the file to the directory where brochures are stored
            $path = "http://127.0.0.1/" ;
            $file->move("C:\wamp64\www", $fileName);
            $event->setEventavatar($path.$fileName);

            $em=$this->getDoctrine()->getManager();

            $em->flush();

            return $this->redirectToRoute('afficher_event');
        }


        return $this->render('@HeavenTN/GestionEvent/modifier_event.html.twig', array(
            'form'=>$form->createView() // ...
        ));
    }

    public function supprimerEventAction($idevent)
    {

        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository(Event::class)->find($idevent);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('afficher_event');


    }

    public function afficherEventAction()
    {
        $em=$this->getDoctrine()->getManager();
        $date=new \DateTime();
        $events=$this->getDoctrine()->getRepository(Event::class)->findAll();
        foreach ($events as $e)
        {
            $end=$e->getEnddate();

            if($date>$end)
            {

                $e->setStatut("Done");

                $em->flush();
            }
        }
        $statut="In Progress";
        $event=$this->getDoctrine()->getRepository(Event::class)->findByStatut($statut);
        return $this->render('@HeavenTN/GestionEvent/afficher_event.html.twig', array(
            'event'=>$event
        ));
    }


    public function afficherFrontEventAction()
    {
        $em=$this->getDoctrine()->getManager();
        $date=new \DateTime();
        $events=$this->getDoctrine()->getRepository(Event::class)->findAll();
        foreach ($events as $e)
        {
            $end=$e->getEnddate();

            if($date>$end)
            {

                $e->setStatut("Done");

                $em->flush();
            }
        }
        $statut="In Progress";
        $event=$this->getDoctrine()->getRepository(Event::class)->findByStatut($statut);
        return $this->render('@HeavenTN/GestionEvent/afficher_eventfront.html.twig', array(
            'event'=>$event
        ));
    }



    public function archiverAction()
    {

        $statut="Done";
        $event=$this->getDoctrine()->getRepository(Event::class)->findByStatut($statut);
        return $this->render('@HeavenTN/GestionEvent/archived_event.html.twig', array(
            'event'=>$event
        ));
    }

    public function reserverAction($idevent)
    {
        $em = $this->getDoctrine()->getManager();
        $e = $em->getRepository(Event::class)->find($idevent);

        $e->setNbrDesPlaces($e->getNbrDesPlaces()-1);
        $e->setNbrParticipant($e->getNbrParticipant()+1) ;


        $em->persist($e);
        $em->flush();
        return $this->redirectToRoute("afficher_eventfront");

    }

}
