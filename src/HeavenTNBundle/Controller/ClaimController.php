<?php

namespace HeavenTNBundle\Controller;

use HeavenTNBundle\Entity\Claim;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Claim controller.
 *
 */
class ClaimController extends Controller
{
    /**
     * Lists all claim entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $claims = $em->getRepository('HeavenTNBundle:Claim')->findAll();

        return $this->render('claim/index.html.twig', array(
            'claims' => $claims,
        ));
    }

    /**
     * Creates a new claim entity.
     *
     */
    public function newAction(Request $request)
    {
        $claim = new Claim();
        $form = $this->createForm('HeavenTNBundle\Form\ClaimType', $claim);
        $form->handleRequest($request);
        $claim->setStatut("Untreated");
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($claim);
            $em->flush();

            return $this->redirectToRoute('claim_new', array('idclaim' => $claim->getIdclaim()));
        }

        return $this->render('claim/new.html.twig', array(
            'claim' => $claim,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a claim entity.
     *
     */
    public function showAction(Claim $claim)
    {

        $deleteForm = $this->createDeleteForm($claim);

        return $this->render('claim/show.html.twig', array(
            'claim' => $claim,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing claim entity.
     *
     */
    public function editAction(Request $request, Claim $claim)
    {
        $em=$this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($claim);
        $editForm = $this->createForm('HeavenTNBundle\Form\ClaimType', $claim);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('claim_edit', array('idclaim' => $claim->getIdclaim()));
        }
        if(isset($_POST['approuve']))
        {
            $claim->setStatut("approuve");
            $em->flush();
        }

        return $this->render('claim/edit.html.twig', array(
            'claim' => $claim,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Deletes a claim entity.
     *
     */
    public function deleteAction(Request $request, Claim $claim)
    {
        $form = $this->createDeleteForm($claim);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($claim);
            $em->flush();
        }

        return $this->redirectToRoute('claim_index');
    }

    /**
     * Creates a form to delete a claim entity.
     *
     * @param Claim $claim The claim entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Claim $claim)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('claim_delete', array('idclaim' => $claim->getIdclaim())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function approveAction($idclaim)
    {

        $em=$this->getDoctrine()->getManager();
        $claim=$em->getRepository('HeavenTNBundle:Claim')->find($idclaim);
        $claim->setStatut('Approved');
        $em->persist($claim);
        $em->flush();



        return $this->redirectToRoute('claim_index');

        return $this->render('claim/index.html.twig', array(
            'claim' => $claim
        ));
    }


    public function ignoreAction($idclaim)
    {

        $em=$this->getDoctrine()->getManager();
        $claim=$em->getRepository('HeavenTNBundle:Claim')->find($idclaim);
        $claim->setStatut('Unapproved');
        $em->persist($claim);
        $em->flush();



        return $this->redirectToRoute('claim_index');
        return $this->render('claim/index.html.twig', array(
            'claim' => $claim
        ));
    }



}
