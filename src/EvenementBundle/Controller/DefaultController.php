<?php

namespace EvenementBundle\Controller;

use EvenementBundle\Entity\Evenement;
use EvenementBundle\Repository\EvenementRepository;
use EvenementBundle\Repository\ParticipationRepository;
use UserBundle\Entity\User;
use EvenementBundle\Entity\Participation;
use EvenementBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\BrowserKit\Response;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Evenement/Default/index.html.twig');
    }
    public function taskAction(Request $request){
      $user = $this->getUser();
      $evenement= new Evenement();
     // $request = $this->getRequest();
   
     $evenement->setUser($user);
   
      $lieuEvenement = $request->query->get('lieuEvenement');
      $porteeEvenement = $request->query->get('porteeEvenement');
      $prixEvenement = $request->query->get('prixEvenement');
      $image = $request->query->get('image');
      $code = $request->query->get('code');
      $start = $request->query->get('start');
      $end = $request->query->get('end');
      $title = $request->query->get('title');
      
   
      $evenement->setLieuEvenement($lieuEvenement);
      $evenement->setTitle($title);
      $evenement->setEnd(new \DateTime($end));
      $evenement->setPorteeEvenement($porteeEvenement);
      $evenement->setPrixEvenement($prixEvenement);
      $evenement->setImage($image);
      $evenement->setCode($code);
   
    

      $evenement->setStart(new \DateTime($start));
     
      dump($evenement);
      $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            $serializer =  new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer ->normalize($evenement);
            return new JsonResponse($formatted);
    }
    public function AjoutEvenementAction(Request $request)
    {
      $user = $this->getUser();
    
      $evenement = new Evenement();
      $evenement->setUser($user);
  
     
 
        $form = $this->createForm(EvenementType::class, $evenement);

        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {

           $file=$form['image']->getData();
           dump($file);
      dump($evenement);
   
      

              $em = $this->getDoctrine()->getManager();
   
              $em->persist($evenement);
              $em->flush();
              //return $this->redirectToRoute('calendar');
           
          }
     
      
         
        
          
        

       return $this->render('@Evenement/Default/AjoutEvenement.html.twig', array(
            'Evenement' => $evenement,
            'form' => $form->createView(),
        ));
    }
    public function listAction(){
      
      $em = $this->getDoctrine()->getManager();

      $evenements = $em->getRepository('EvenementBundle:Evenement')->findAll();

      $serializer= new Serializer([new ObjectNormalizer()]);
      dump($evenements); 
      $formatted=$serializer->normalize($evenements);
      return new JsonResponse($formatted);
 


    }
    public function eventsAction(){
      
      $em = $this->getDoctrine()->getManager();

      $evenements = $em->getRepository('EvenementBundle:Evenement')->findAll();
      dump($evenements);

      return $this->render('@Evenement/Default/index.html.twig',array(
        'evenements'=>$evenements
    

      ));

    }
    public function taskShowAction(){
      $em = $this->getDoctrine()->getManager();

      $evenements = $em->getRepository('EvenementBundle:Evenement')->findAll();
      $serializer =  new Serializer([new ObjectNormalizer()]);
      $formatted = $serializer ->normalize($evenements);
      return new JsonResponse($formatted);

    }
    public function calendarAction()
    {
      $em = $this->getDoctrine()->getManager();

      $evenements = $em->getRepository('EvenementBundle:Evenement')->findAll();

      dump($evenements); 
  
        return $this->render('@Evenement/Default/calendar.html.twig',array(
          'evenements'=>$evenements
      

        ));
    }
    public function updateAction(Request $request,$evenementId){
      $entityManager =$this->getDoctrine()->getManager();
      $evenement = $entityManager->getRepository(Evenement:: class)->find($evenementId);
      if(!$evenement){
        throw $this->createNotFoundException('
        No Evenement found for id'.$evenementId);
      }
     $editForm =$this->createForm(EvenementType::class, $evenement);
     $editForm->handleRequest($request); // franchement sans handle request tu t'attendais à quoi?
  
      if ($editForm->isSubmitted() && $editForm->isValid()) {
       $entityManager->flush();
        return $this->redirectToRoute('calendar');
    }
   
    return $this->render('@Evenement/Default/UpdateEvenement.html.twig', array(
      'evenementId' => $evenement->getEvenementId(),
      'Evenement' => $evenement,
      'edit_form' => $editForm->createView(),
  ));

    }
    public function findEventAction()
    {
      $id=$this->getUser()->getId();
      $em = $this->getDoctrine()->getManager();

      $evenements = $em->getRepository(Evenement::class)->findByUser($id);
      dump($evenements);

      return $this->render('@Evenement/Default/gestionEvenement.html.twig',array(
        'evenements'=>$evenements
    

      ));
    }
    public function deleteAction(Request $request,$evenementId)
    {
     
      $entityManager =$this->getDoctrine()->getManager();
      $evenement = $entityManager->getRepository(Evenement:: class)->find($evenementId);
      $entityManager->remove($evenement);
      $entityManager->flush();
      return $this->redirectToRoute('calendar');

     

    }
    
    public function consulterAction(Request $request,$evenementId){
      $em =$this->getDoctrine()->getManager();
      $participants = $em->getRepository(Participation::class)->findParticipants($evenementId);
      dump($participants);

      return $this->render('@Evenement/Default/gestionEvenement.html.twig',array(
        'participants'=>$participants
      ));

    }

}
