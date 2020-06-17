<?php

namespace DonBundle\Controller;

use DonBundle\Entity\DonEspece;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Donespece controller.
 *
 * @Route("Don/donespece")
 */
class DonEspeceController extends Controller
{
    /**
     * Lists all donEspece entities.
     *
     * @Route("/", name="donespece_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $donEspeces = $em->getRepository('DonBundle:DonEspece')->findBy(['typeDon'=>'espece']);

        /**
         * @var $paginators \Knp\Component\Pager\Paginator
         */
        $paginators = $this->get('knp_paginator');
        $donEspeces = $paginators->paginate($donEspeces,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 3));

        return $this->render('donespece/index.html.twig', array(
            'donEspeces' => $donEspeces,
        ));
    }

    /**
     * Creates a new donEspece entity.
     *
     * @Route("/new", name="donespece_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $donEspece = new Donespece();
        $donEspece->setUserId($this->getUser()->getId());
        $donEspece->setTypeDon("espece");
        $donEspece->setDateDon(new \DateTime('now'));
        $form = $this->createForm('DonBundle\Form\DonEspeceType', $donEspece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($donEspece);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject("test")
                ->setFrom('lelouchlelouch9@gmail.com','HandShake')
                ->setTo($this->getUser()->getEmail())
                ->setBody("Merci pour votre don de {$donEspece->getMontantDon()} Dt");
            $this->get('mailer')->send($message);
            return $this->redirectToRoute('donespece_index', array('id' => $donEspece->getId()));
        }

        return $this->render('donespece/new.html.twig', array(
            'donEspece' => $donEspece,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a donEspece entity.
     *
     * @Route("/{id}", name="donespece_show")
     * @Method("GET")
     */
    public function showAction(DonEspece $donEspece)
    {
        $deleteForm = $this->createDeleteForm($donEspece);

        return $this->render('donespece/show.html.twig', array(
            'donEspece' => $donEspece,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing donEspece entity.
     *
     * @Route("/{id}/edit", name="donespece_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DonEspece $donEspece)
    {
        $deleteForm = $this->createDeleteForm($donEspece);
        $editForm = $this->createForm('DonBundle\Form\DonEspeceType', $donEspece);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('donespece_index', array('id' => $donEspece->getId()));
        }

        return $this->render('donespece/edit.html.twig', array(
            'donEspece' => $donEspece,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a donEspece entity.
     *
     * @Route("/{id}", name="donespece_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DonEspece $donEspece)
    {
        $form = $this->createDeleteForm($donEspece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($donEspece);
            $em->flush();
        }

        return $this->redirectToRoute('donespece_index');
    }

    /**
     * Creates a form to delete a donEspece entity.
     *
     * @param DonEspece $donEspece The donEspece entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DonEspece $donEspece)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('donespece_delete', array('id' => $donEspece->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
