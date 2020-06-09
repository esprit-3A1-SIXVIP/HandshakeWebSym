<?php

namespace AideBundle\Controller;

use AideBundle\Entity\Aide;
use AideBundle\Form\BeneficiaireType;
use AideBundle\Entity\Beneficiaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use UserBundle\Entity\User;

class BeneficiaireController extends Controller
{
    public function ajoutBenAction(Request $request)
    {
        $user = $this->getUser();

        $beneficiaire= new Beneficiaire();
        $beneficiaire->setUser($user);


        //mailling
        $message = \Swift_Message::newInstance()
            ->setSubject("test")
            ->setFrom('wajih.mejri@esprit.tn','Bertin Junior')
            ->setTo('tonleufowebong@gmail.com')
            ->setBody("Merci pour votre demande");
        $this->get('mailer')->send($message);


        $form = $this->createForm(BeneficiaireType::class, $beneficiaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($beneficiaire->getRole()=="besoin")
            {
                $beneficiaire->setBesoin($request->get('nom'));
                $beneficiaire->setNationalite(" ");
            }
            else
            {
                $beneficiaire->setNationalite($request->get('nom'));
                $beneficiaire->setBesoin(" ");

            }

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

        //pagination
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
        //pagination
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

    public function ajoutBenMobAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $beneficiaire= new Beneficiaire();
        $user=$this->getDoctrine()->getRepository(User::class)->find($request->get('iduser'));
        $beneficiaire->setUser($user);
        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($request->get('aide'));
        $beneficiaire->setAide($aide);
        $beneficiaire->setNombeneficiaire($request->get('nom'));
        $beneficiaire->setPrenombeneficiaire($request->get('pre'));
        $beneficiaire->setEmail($request->get('email'));
        $rest=substr($request->get('datenaiss'), 0, 20);
        $rest1=substr($request->get('datenaiss'), 30, 34);
        $res=$rest.$rest1;
        try {
            $date = new \DateTime($res);
            $beneficiaire->setDatenaissance($date);
        } catch (\Exception $e) {

        }
        $beneficiaire->setVille($request->get('ville'));
        $beneficiaire->setAdressegps($request->get('adress'));
        $beneficiaire->setTelephone($request->get('tel'));
        $beneficiaire->setRole($request->get('role'));
        $beneficiaire->setNationalite($request->get('nat'));
        $beneficiaire->setBesoin($request->get('besoin'));
        $em->persist($beneficiaire);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($beneficiaire);
        return new JsonResponse($formatted);
    }
    function suppBenCAction($beneficiaireid){
        $em=$this->getDoctrine()->getManager();
        $beneficiaire=$this->getDoctrine()->getRepository(Beneficiaire::class)->find($beneficiaireid);
        $em->remove($beneficiaire);
        $em->flush();
        return $this->redirectToRoute('affBenC');
    }
    public function affBenMobAction()
    {
        $ben = $this->getDoctrine()->getManager()
            ->getRepository('AideBundle:Beneficiaire')
            ->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($ben) {
            return $ben->getId();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($ben);
        return new JsonResponse($formatted);
    }

    public function findmyBenMobAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM AideBundle:Beneficiaire a WHERE a.user=:id ");
        $query->setParameter('id',$request->get('id'));
        $ben = $query->getResult();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ben);
        return new JsonResponse($formatted);
    }

    public function modifBenMobAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $beneficiaire = $em->getRepository(Beneficiaire::class)->find($request->get('id'));
        $user=$this->getDoctrine()->getRepository(User::class)->find($request->get('iduser'));
        $beneficiaire->setUser($user);
        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($request->get('aide'));
        $beneficiaire->setAide($aide);
        $beneficiaire->setNombeneficiaire($request->get('nom'));
        $beneficiaire->setPrenombeneficiaire($request->get('pre'));
        $beneficiaire->setEmail($request->get('email'));
        $rest=substr($request->get('datenaiss'), 0, 20);
        $rest1=substr($request->get('datenaiss'), 30, 34);
        $res=$rest.$rest1;
        try {
            $date = new \DateTime($res);
            $beneficiaire->setDatenaissance($date);
        } catch (\Exception $e) {

        }
        $beneficiaire->setVille($request->get('ville'));
        $beneficiaire->setAdressegps($request->get('adress'));
        $beneficiaire->setTelephone($request->get('tel'));
        $beneficiaire->setRole($request->get('role'));
        $beneficiaire->setNationalite($request->get('nat'));
        $beneficiaire->setBesoin($request->get('besoin'));
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($beneficiaire) {
            return $beneficiaire->getId();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($beneficiaire);
        return new JsonResponse($formatted);
    }
    function suppBenMobAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $ben=$this->getDoctrine()->getRepository(Beneficiaire::class)
            ->find($request->get('id'));
        $em->remove($ben);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ben);
        return new JsonResponse($formatted);
    }

}
