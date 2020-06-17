<?php

namespace AideBundle\Controller;

use AideBundle\Form\BeneficiaireType;
use AideBundle\Entity\Beneficiaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BeneficiaireController extends Controller
{
    public function ajoutBenAction(Request $request)
    {
        $user = $this->getUser();

        $beneficiaire= new Beneficiaire();
        $beneficiaire->setUser($user);
        if($beneficiaire->getRole()=="besoin")
        {
            $beneficiaire->setBesoin($request->get('nom'));
        }
        else
        {
            $beneficiaire->setNationalite($request->get('nom'));
        }


        $form = $this->createForm(BeneficiaireType::class, $beneficiaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message = \Swift_Message::newInstance()
                ->setSubject("test")
                ->setFrom('bertinjunior.tonleufowebong@esprit.tn','Junior Tonleu')
                ->setTo($beneficiaire->getEmail())
                ->setBody("Merci pour votre demande");
            $this->get('mailer')->send($message);

            $em = $this->getDoctrine()->getManager();
            $em->persist($beneficiaire);
            $em->flush();
            return $this->redirectToRoute('affBenC');
        }

        return $this->render('@Aide/Beneficiaire/AjoutBen.html.twig', array(
            'Beneficiaire' => $beneficiaire,
            'form' => $form->createView(),
        ));
    }
    public function affBenAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $Beneficiaire=$em->getRepository('AideBundle:Beneficiaire')->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $Beneficiaire = $paginator->paginate($Beneficiaire,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4));

        return $this->render('@Aide/Beneficiaire/AffBen.html.twig',array('beneficiaire'=> $Beneficiaire));
    }

    public function affBenTousAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $Beneficiaire=$em->getRepository('AideBundle:Beneficiaire')->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $Beneficiaire = $paginator->paginate($Beneficiaire,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4));

        return $this->render('@Aide/Beneficiaire/AffBenTous.html.twig',array('Beneficiaire'=> $Beneficiaire));
    }
    public function affBenClientAction(Request $request){
        $id=$this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM AideBundle:Beneficiaire a WHERE a.user=:id ");
        $query->setParameter('id',$id);
        $beneficiaire = $query->getResult();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $beneficiaire = $paginator->paginate($beneficiaire,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4));

        $nb=count($beneficiaire);

        return $this->render("@Aide/Beneficiaire/AffBenClient.html.twig",array(
            'Beneficiaire'=>$beneficiaire,));
    }

    public function modifBenAction(Request $request,$beneficiaireid)
    {
        $beneficiaire=$this->getDoctrine()->getRepository(Beneficiaire::class)->find($beneficiaireid);

        if($beneficiaire->getRole()=="besoin")
        {
            $beneficiaire->setBesoin($request->get('nom'));
        }
        else
        {
            $beneficiaire->setNationalite($request->get('nom'));
        }

        $editForm = $this->createForm(BeneficiaireType::class, $beneficiaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('modifBen', array('beneficiaireid' => $beneficiaire->getBeneficiaireid()));
        }

        return $this->render('@Aide/Beneficiaire/ModifBen.html.twig', array(
            'Beneficiaire' => $beneficiaire,
            'edit_form' => $editForm->createView(),
            // 'delete_form' => $deleteForm->createView(),
        ));

    }
    function suppBenAction($beneficiaireid){
        $em=$this->getDoctrine()->getManager();
        $beneficiaire=$this->getDoctrine()->getRepository(Beneficiaire::class)->find($beneficiaireid);
        $em->remove($beneficiaire);
        $em->flush();        return $this->redirectToRoute('affBen');
    }

    function suppBenCAction($beneficiaireid){
        $em=$this->getDoctrine()->getManager();
        $beneficiaire=$this->getDoctrine()->getRepository(Beneficiaire::class)->find($beneficiaireid);
        $em->remove($beneficiaire);
        $em->flush();
        return $this->redirectToRoute('affBenC');
    }

}
