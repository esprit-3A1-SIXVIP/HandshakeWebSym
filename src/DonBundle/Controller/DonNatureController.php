<?php

namespace DonBundle\Controller;

use DonBundle\Entity\DonNature;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Donnature controller.
 *
 * @Route("Don/donnature")
 */
class DonNatureController extends Controller
{
    /**
     * Lists all donNature entities.
     *
     * @Route("/", name="donnature_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $donNatures = $em->getRepository('DonBundle:DonNature')->findBy(['typeDon'=>'nature']);

        /**
         * @var $paginators \Knp\Component\Pager\Paginator
         */
        $paginators = $this->get('knp_paginator');
        $donNatures = $paginators->paginate($donNatures,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 3));

        return $this->render('donnature/index.html.twig', array(
            'donNatures' => $donNatures,
        ));
    }

    /**
     * Creates a new donNature entity.
     *
     * @Route("/new", name="donnature_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $donNature = new Donnature();
        $donNature->setUserId($this->getUser()->getId());
        $donNature->setTypeDon("nature");
        $donNature->setDateDon(new \DateTime('now'));
        $form = $this->createForm('DonBundle\Form\DonNatureType', $donNature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($donNature);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject("test")
                ->setFrom('lelouchlelouch9@gmail.com','HandShake')
                ->setTo($this->getUser()->getEmail())
                ->setBody("Merci pour votre don  {$donNature->getCategorieDonNature()} ");
            $this->get('mailer')->send($message);
            return $this->redirectToRoute('donnature_index', array('id' => $donNature->getId()));
        }

        return $this->render('donnature/new.html.twig', array(
            'donNature' => $donNature,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a donNature entity.
     *
     * @Route("/{id}", name="donnature_show")
     * @Method("GET")
     */
    public function showAction(DonNature $donNature)
    {
        $deleteForm = $this->createDeleteForm($donNature);

        return $this->render('donnature/show.html.twig', array(
            'donNature' => $donNature,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing donNature entity.
     *
     * @Route("/{id}/edit", name="donnature_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DonNature $donNature)
    {
        $deleteForm = $this->createDeleteForm($donNature);
        $editForm = $this->createForm('DonBundle\Form\DonNatureType', $donNature);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('donnature_index', array('id' => $donNature->getId()));
        }

        return $this->render('donnature/edit.html.twig', array(
            'donNature' => $donNature,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a donNature entity.
     *
     * @Route("/{id}", name="donnature_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DonNature $donNature)
    {
        $form = $this->createDeleteForm($donNature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($donNature);
            $em->flush();
        }

        return $this->redirectToRoute('donnature_index');
    }

    /**
     * Creates a form to delete a donNature entity.
     *
     * @param DonNature $donNature The donNature entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DonNature $donNature)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('donnature_delete', array('id' => $donNature->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
