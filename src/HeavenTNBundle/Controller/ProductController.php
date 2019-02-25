<?php

namespace HeavenTNBundle\Controller;

use HeavenTNBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    /**
     * Lists all product entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('HeavenTNBundle:Product')->findBy(array());

        foreach ($products as $e)
        {
            $diff =($e->getQuantite())-($e->getMinAlert());
            if ($diff <50) {
                $e->setStockstate("Warning");
            }

            if ($diff >=50 && $diff <=100) {
                $e->setStockstate("Check your Stock");
            }
            if ($diff>100){
                $e->setStockstate("Jawek behi");             }

        }

        return $this->render('product/index.html.twig', array(
            'products' => $products,
        ));
    }

    public function indexfrontAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('HeavenTNBundle:Product')->findBy(array());

        foreach ($products as $e)
        {
            $diff =($e->getQuantite())-($e->getMinAlert());
            if ($diff <50) {
                $e->setStockstate("Warning");
            }

            if ($diff >=50 && $diff <=100) {
                $e->setStockstate("Check your Stock");
            }
            if ($diff>100){
                $e->setStockstate("Jawek behi");             }

        }

        return $this->render('product/indexfront.html.twig', array(
            'products' => $products,
        ));
    }







    /**
     * Creates a new product entity.
     *
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm('HeavenTNBundle\Form\ProductType', $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('productimage')->getData();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->getExtension();

            // Move the file to the directory where brochures are stored
            $path = "http://127.0.0.1/" ;
            $file->move("C:\wamp64\www", $fileName);
            $product->setProductimage($path.$fileName);





            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_index', array('idproduct' => $product->getIdproduct()));
        }

        return $this->render('product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product entity.
     *
     */
    public function showAction(Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);

        return $this->render('product/show.html.twig', array(
            'product' => $product,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('HeavenTNBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $file = $editForm->get('productimage')->getData();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->getExtension();

            // Move the file to the directory where brochures are stored
            $path = "http://127.0.0.1/" ;
            $file->move("C:\wamp64\www", $fileName);
            $product->setProductimage($path.$fileName);

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index', array('idproduct' => $product->getIdproduct()));
        }

        return $this->render('product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('product_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('idproduct' => $product->getIdproduct())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
