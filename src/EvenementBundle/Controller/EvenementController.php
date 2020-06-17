<?php

namespace EvenementBundle\Controller;

use EvenementBundle\Entity\Evenement;
use EvenementBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{
    public function AjoutEvenementAction(Request $request)
    {
       $user = $this->getUser();
        $evenement= new Evenement();
        $evenement->setUser($user);
       
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
           // return $this->redirectToRoute('affAideClient');
           dump($evenement);
        }

        return $this->render('@Evenement/Evenement/AjoutEvenement.html.twig', array(
            'Evenement' => $evenement,
            'form' => $form->createView(),
        ));
    }
}
