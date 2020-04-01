<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Article;
use BlogBundle\Entity\CommentaireArticle;
use BlogBundle\Form\ArticleType;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/aaaa")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }



    /**
     * @Route("/Article/ajouter", name="admin_Article_ajouter")
     */
    public function ajout(Request $request)
    {
        //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $Article = new Article();

        $form = $this->createFormBuilder($Article)
            ->add('Titre', TextType::class)
            ->add('Description', TextareaType::class)
            ->add('Auteur', TextType::class)




            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $Article->setDatePublication((new \DateTime()));
           // $Article->setUserId($user );
            $Article->setNbrlike(0);
            $Article->setNbrVue(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Article);
            $em->flush();

            return $this->redirectToRoute('admin_Article_ajouter');
        }

        return $this->render('@Blog/Article/Ajout.html.twig', array(
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("Article/modifier/{id}", name="admin_Article_modifier")
     */
    public function modifier(Request $request, $id)
    {
      //  $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $em = $this->getDoctrine()->getManager();
        $Article = $em->getRepository(Article::class)->find($id);

        $form = $this->createForm(ArticleType::class, $Article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('admin_Article_modifier');
        }

        return $this->render('@Blog/Article/modifier.html.twig', array(
            'form' => $form->createView()
        ));

    }




    /**
     * @Route("Article/supprimer/{id}", name="admin_Article_supprimer")
     */
    public function supprimer(Request $request, $id)
    {
      //  $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $em = $this->getDoctrine()->getManager();

        $ets = $em->getRepository(Article::class)->find($id);


        if($ets)
        {
            $em->remove($ets);
            $em->flush();
        }

        return $this->redirectToRoute('admin_Article_liste');

    }

    /**
     * @Route("/Article", name="admin_Article_liste")
     */
    public function Article_liste()
    {
       // $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $em = $this->getDoctrine()->getManager();

        $Article= $em->getRepository(Article::class)->findAll();

        return $this->render('@Blog/Article/liste.html.twig', array(
            'art' => $Article
        ));



    }



    /**
     * @Route("/Article/{id}/commenter", name="admin_Article_commenter")
     */
    public function ajoutcommentaire(Request $request,$id)
    {
        //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $commentaire = new CommentaireArticle();

        $form = $this->createFormBuilder($commentaire)


            ->add('Description', TextareaType::class)





            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setArticleId($id);
            $commentaire->setDatePublication((new \DateTime()));
            // $commentaire ->setUserId($user );
            $commentaire->
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('admin_Article_ajouter');
        }

        return $this->render('@Blog/Article/Ajout1.html.twig', array(
            'form' => $form->createView()
        ));
    }
    }
