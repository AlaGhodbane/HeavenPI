<?php

namespace HeavenTNBundle\Controller;

use HeavenTNBundle\Entity\Lignedecommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Lignedecommande controller.
 *
 */
class LignedecommandeController extends Controller
{
    /**
     * Lists all lignedecommande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lignedecommandes = $em->getRepository('HeavenTNBundle:Lignedecommande')->findAll();

        return $this->render('lignedecommande/index.html.twig', array(
            'lignedecommandes' => $lignedecommandes,
        ));
    }

    /**
     * Creates a new lignedecommande entity.
     *
     */
    public function newAction(Request $request)
    {
        $lignedecommande = new Lignedecommande();
        $form = $this->createForm('HeavenTNBundle\Form\LignedecommandeType', $lignedecommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lignedecommande);
            $em->flush();

            return $this->redirectToRoute('lignedecommande_show', array('id' => $lignedecommande->getId()));
        }

        return $this->render('product/newlc.html.twig', array(
            'lignedecommande' => $lignedecommande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lignedecommande entity.
     *
     */
    public function showAction(Lignedecommande $lignedecommande)
    {
        $deleteForm = $this->createDeleteForm($lignedecommande);

        return $this->render('lignedecommande/show.html.twig', array(
            'lignedecommande' => $lignedecommande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lignedecommande entity.
     *
     */
    public function editAction(Request $request, Lignedecommande $lignedecommande)
    {
        $deleteForm = $this->createDeleteForm($lignedecommande);
        $editForm = $this->createForm('HeavenTNBundle\Form\LignedecommandeType', $lignedecommande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lignedecommande_edit', array('id' => $lignedecommande->getId()));
        }

        return $this->render('lignedecommande/edit.html.twig', array(
            'lignedecommande' => $lignedecommande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lignedecommande entity.
     *
     */
    public function deleteAction(Request $request, Lignedecommande $lignedecommande)
    {
        $form = $this->createDeleteForm($lignedecommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lignedecommande);
            $em->flush();
        }

        return $this->redirectToRoute('lignedecommande_index');
    }

    /**
     * Creates a form to delete a lignedecommande entity.
     *
     * @param Lignedecommande $lignedecommande The lignedecommande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lignedecommande $lignedecommande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lignedecommande_delete', array('id' => $lignedecommande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
