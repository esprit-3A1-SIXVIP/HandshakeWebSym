<?php

namespace AideBundle\Controller;

use AideBundle\Entity\Aide;
use AideBundle\Form\AideType;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use UserBundle\Entity\User;

class AideController extends Controller
{
    public function AjoutAideAction(Request $request)
    {
        $user = $this->getUser();
        $aide= new Aide();
        $aide->setUser($user);
        $aide->setStatutAide(0);
        $form = $this->createForm(AideType::class, $aide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aide);
            $em->flush();
            return $this->redirectToRoute('affAideClient');
        }

        return $this->render('@Aide/Aide/AjoutAide.html.twig', array(
            'Aide' => $aide,
            'form' => $form->createView(),
        ));
    }

    public function affAideAction(Request $request)
    {
        $pieChart = new PieChart();
        $em= $this->getDoctrine();

        $statutAides = $em->getRepository(Aide::class)->findAll();

        $statutAideA = $em->getRepository(Aide::class)->findBy(array('statutAide'=>1));
        $statutAideN= $em->getRepository(Aide::class)->findBy(array('statutAide'=>0));


        $total=count($statutAides);

        $total1=count($statutAideA);
        $total2=count($statutAideN);


        $data= array();
        $stat=['Les Aides', '%'];
        $nb=0;
        array_push($data,$stat);

        $stat=array();
        $nb1=($total1 *100)/$total;
        array_push($stat,'Approvée',($total1));
        $stat=['Approvée',$nb1];
        array_push($data,$stat);

        $stat=array();
        $nb2=($total2 *100)/$total;
        array_push($stat,'Non Approvée',($total2));
        $stat=['Non Approvée',$nb2];
        array_push($data,$stat);


        $pieChart->getData()->setArrayToDataTable(
            $data
        );



        $pieChart->getOptions()->setTitle('Les Aides');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        $em=$this->getDoctrine()->getManager();
        $Aide=$em->getRepository('AideBundle:Aide')->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $Aide = $paginator->paginate($Aide,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4));

        return $this->render('@Aide/Aide/AffAide.html.twig',array('Aide'=> $Aide,'piechart' => $pieChart));
    }

    public function affAideAppAction(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM AideBundle:Aide a WHERE a.statutAide = 1 ");
        $Aide = $query->getResult();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $Aide = $paginator->paginate($Aide,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4));

        return $this->render('@Aide/Aide/AffAideTous.html.twig',array('Aide'=> $Aide));
    }

    public function MaapAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $A = $em->getRepository('AideBundle:Aide')->findAll();
        $user = $this->getUser();
        $u1 = $user->getId();

        $Aide = $em->getRepository('AideBundle:Aide')->findAll();
        return $this->render('@Aide/Aide/maap.html.twig',array('Aide'=>$Aide , 'E' => $A
        ,'u1'=> $u1));
    }

    public function affAideClientAction(Request $request){
        $id=$this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM AideBundle:Aide a WHERE a.user=:id ");
        $query->setParameter('id',$id);
        $Aide = $query->getResult();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $Aide = $paginator->paginate($Aide,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4));

        $nb=count($Aide);
        return $this->render("@Aide/Aide/AffAideClient.html.twig",array(
            'Aide'=>$Aide,));
    }


    public function modifAideAction(Request $request,$id)
    {
        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($id);
        $editForm = $this->createForm(AideType::class, $aide);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('modifAide', array('id' => $aide->getId()));
        }

        return $this->render('@Aide/Aide/ModifAide.html.twig', array(
            'Aide' => $aide,
            'edit_form' => $editForm->createView(),
        ));

    }
    public function modifAideUserAction(Request $request,$id)
    {

        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($id);
        $editForm = $this->createForm(AideType::class, $aide);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('modifAideUser', array('id' => $aide->getId()));
        }

        return $this->render('@Aide/Aide/ModifAideUser.html.twig', array(
            'Aide' => $aide,
            'edit_form' => $editForm->createView(),
            // 'delete_form' => $deleteForm->createView(),
        ));

    }

    function suppAideAction($id){
        $em=$this->getDoctrine()->getManager();
        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($id);
        $em->remove($aide);
        $em->flush();
        return $this->redirectToRoute('affAide');
    }
    function suppAideCAction($id){
        $em=$this->getDoctrine()->getManager();
        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($id);
        $em->remove($aide);
        $em->flush();
        return $this->redirectToRoute('affAideClient');
    }

    function approvedAction($id){
        $em=$this->getDoctrine()->getManager();
        $am=$this->getDoctrine()->getRepository(Aide::class);
        $aide=$this->getDoctrine()->getRepository(Aide::class)->find($id);
        if($aide->getStatutAide()==0)
        {
            $am->approuver($id,1);
        }
        else
        {
            $am->approuver($id,0);
        }
        return $this->redirectToRoute('affAide');
    }

    public function findUserMobAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM UserBundle:User a WHERE a.id=:id ");
        $query->setParameter('id',$request->get('id'));
        $user = $query->getResult();        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);
    }
    public function findmyAideMobAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM AideBundle:Aide a WHERE a.user=:id ");
        $query->setParameter('id',$request->get('id'));
        $aide = $query->getResult();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($aide);
        return new JsonResponse($formatted);
    }


    public function ajoutAideMobAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $Aide = new Aide();
        $user=$this->getDoctrine()->getRepository(User::class)->find($request->get('iduser'));
        $Aide->setUser($user);
        $Aide->setDescriptionAide($request->get('DescriptionAide'));
        $Aide->setLocalisationAide($request->get('LocalisationAide'));
        $Aide->setCategorieAide($request->get('CategorieAide'));
        $Aide->setStatutAide($request->get('StatuAide'));
        $Aide->setLatitude(0);
        $Aide->setLongitude(0);
        $em->persist($Aide);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Aide);
        return new JsonResponse($formatted);
    }
    public function affAideMobAction()
    {
        $aide = $this->getDoctrine()->getManager()
            ->getRepository('AideBundle:Aide')
            ->findAll();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($aide) {
            return $aide->getId();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($aide);
        return new JsonResponse($formatted);
    }
    public function findAideCatMobAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(" SELECT a FROM AideBundle:Aide a WHERE a.categorieAide=:cat ");
        $query->setParameter('cat',$request->get('cat'));
        $Eleve = $query->getResult();        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Eleve);
        return new JsonResponse($formatted);
    }

    public function modifAideMobAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $Aide = $em->getRepository(Aide::class)->find($request->get('id'));
        $Aide->setDescriptionAide($request->get('DescriptionAide'));
        $Aide->setLocalisationAide($request->get('LocalisationAide'));
        $Aide->setCategorieAide($request->get('CategorieAide'));
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($Aide) {
            return $Aide->getId();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($Aide);
        return new JsonResponse($formatted);
    }
    function suppAideMobAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $aide=$this->getDoctrine()->getRepository(Aide::class)
            ->find($request->get('id'));
        $em->remove($aide);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($aide);
        return new JsonResponse($formatted);
    }

}
