<?php

namespace BlogBundle\Controller;

use BlogBundle\BlogBundle;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\CommentaireArticle;
use BlogBundle\Form\ArticleType;
use Doctrine\DBAL\Types\DateType;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\Console\Application;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use FOS\CKEditorBundle\Form\Type\CKEditorType;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/blog")
     */
    public function indexAction()
    {

        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('donation en 2020');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $data = array(
            array('donation monnaire', 45.0),
            array('donation nature', 30.5),
            array('refuge', 24.5),

        );
        $ob->series(array(array('type' => 'pie','name' => 'nombre de donatateurs', 'data' => $data)));

        $ob1 = new Highchart();
        $ob1->chart->renderTo('piechart1');
        $ob1->title->text('demande aides en 2020');
        $ob1->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $data1 = array(
            array('demandes aides nature', 47.0),
            array('demandes refuge', 22.5),
            array('demandes aides monnaires', 30.5),

        );
        $ob1->series(array(array('type' => 'pie','name' => 'nombre de demandes', 'data' => $data1)));

        $em = $this->getDoctrine()->getManager();
        $commentaire = new CommentaireArticle();

        $form = $this->createFormBuilder($commentaire)


            ->add('Description', TextareaType::class)





            ->getForm();

        $query = $em->createQuery(
            'SELECT A
    FROM BlogBundle:Article A
    where A.id in (SELECT B
    FROM BlogBundle:CommentaireArticle B
    group BY B.articleId) '
        );

        $products = $query->getResult();
        $Article= $em->getRepository(Article::class)->findAll();
        return $this->render('@Blog/Article/blog.html.twig',array(
            'chart1' => $ob1,'chart' => $ob, 'art' => $Article,'form'=> $form->createView() ,'top'=> $products         ));
    }

    /**
     * @Route("/article/all")
     */
public function allAction(){
    $em = $this->getDoctrine()->getManager();


    $query = $em->createQuery(
        'SELECT A
    FROM BlogBundle:Article A
  order BY A.datePublication ASC ')
    ;

    $Article = $query->getResult();
//var_dump($Article);


   // $Article= $em->getRepository(Article::class)->findAll();
    $serializer1 = new Serializer(array(new DateTimeNormalizer('Y-m-d h:m')));
    foreach ( $Article as $art)
    {
        $art->setDatePublication($serializer1->normalize($art->getDatePublication()));

    }

$serializer =  new Serializer([new ObjectNormalizer()]);
$formatted = $serializer ->normalize($Article);
return new JsonResponse($formatted);
}
    /**
     * @Route("/article/similar")
     */
    public function similarAction(Request $request){
        $em = $this->getDoctrine()->getManager();
       $mot= $request->request->get("mot");
       // $mot="tes";
        $query = $em->createQuery(
            'SELECT A
    FROM BlogBundle:Article A
    where A.titre  like :tit
  order BY A.datePublication ASC ')->setParameter('tit','%'.$mot.'%');
        ;

        $Article = $query->getResult();
//var_dump($Article);


        // $Article= $em->getRepository(Article::class)->findAll();
        $serializer1 = new Serializer(array(new DateTimeNormalizer('Y-m-d h:m')));
        foreach ( $Article as $art)
        {
           // $Article->getTitre()->ignoreCase()->indexOf('B');
            $art->setDatePublication($serializer1->normalize($art->getDatePublication()));

        }

        $serializer =  new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer ->normalize($Article);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/article/find/{id}")
     */
    public function byidAction($id){

        $em = $this->getDoctrine()->getManager();
        $Article= $em->getRepository('BlogBundle:Article')->find($id);

       $serializer =  new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer ->normalize($Article);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/article/mob/new")
     */
    public function NewmobAction(Request $request){

        $Article = new Article();

        $Article->setTitre($request->request->get('title') );
        $Article->setDescription($request->request->get('desc') );
        $Article->setAuteur($request->request->get('write') );
        $Article->setDatePublication((new \DateTime()));
        $Article->setNbrlike(0);
        $Article->setNbrVue(0);
        $Article->setMyfile();
        $em = $this->getDoctrine()->getManager();
        $em->persist($Article);
        $em->flush();
        $status=["stat"=>"success","article"=>"added"];
        return new JsonResponse($status);
    }
    /**
     * @Route("/article/mob/upload/")
     */
    public function NewMobUpoladAction(Request $request){
        $Article = new Article();

        $file = $request->files->get('file');


        $status = array('status' => "success","fileUploaded" => "false");


        if(!is_null($file)){


            $filename =  md5(uniqid()) .'.'. $file->guessExtension();
            $path = $this->getParameter('uploads_directory');
            $file->move($path,$filename); // move the file to a path
            $status = array('status' => "success","fileUploaded" => "true");
            $Article->setMyfile($filename);
        }


        $Article->setTitre($request->request->get('title') );
        $Article->setDescription($request->request->get('desc') );
        $Article->setAuteur($request->request->get('write') );
        $Article->setDatePublication((new \DateTime()));
        $Article->setNbrlike(0);
        $Article->setNbrVue(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($Article);
        $em->flush();
        return new JsonResponse($status);
    }
    /**
     * @Route("/article/mob/newcomment")
     */
    public function NewmobcommAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $status=array("save"=>"false","varible"=>"not ready");
        $commentaire = new CommentaireArticle();
        $article = $em->getRepository(Article::class)->find($request->request->get('idArt'));
        $commentaire->setDescription($request->request->get('desc'));
        $commentaire->setArticleId($article);
        $commentaire->setDatePublication((new \DateTime()));



        $em->persist($commentaire);
        $em->flush();
        $status=array("save"=>"true","varible"=>"ready");
        //$serializer =  new Serializer([new ObjectNormalizer()]);
        //$formatted = $serializer ->normalize($commentaire);
        return new JsonResponse($status);
    }
    /**
     * @Route("/article/mob/all")
     */
    public function getmobcommAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $status=array("save"=>"false","varible"=>"not ready");
$id=$request->request->get('idArt');
       // $article = $em->getRepository(Article::class)->find($request->request->get('idArt'));
   //     $commentaires= $em->getRepository(CommentaireArticle::class)->findBy(array('articleId' => $article),array('datePublication' => 'ASC' ));
        $commentaires= $em->getRepository(CommentaireArticle::class)->findAll();
        //$commentaires1=array();
        $serializer1 = new Serializer(array(new DateTimeNormalizer('Y-m-d  h:m')));
        foreach ( $commentaires as $art)
        {
       //if ($art->getArticleId()->getId()==$id)
            $art->setDatePublication($serializer1->normalize($art->getDatePublication()));
            $art->getArticleId()->setDatePublication($serializer1->normalize($art->getArticleId()->getDatePublication()));
          //  array_push($commentaires1,$art);
        }

        $status=array("save"=>"true","varible"=>"ready");
        $serializer =  new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer ->normalize($commentaires);
        return new JsonResponse($formatted);
    }


    /**
     * @Route("/article/mob/{id}")
     */
    public function mobcommListeAction($id,Request $request){

        $em = $this->getDoctrine()->getManager();
        $Article= $em->getRepository(Article::class)->findBy(array ('articleId'=>$id));
        $serializer =  new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer ->normalize($Article);
        return new JsonResponse($formatted);
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
            ->add('my_file',FileType::class,[
                'mapped'=>false,
                'label'=> 'article image',
                'required'=> false
            ])
            ->add('Auteur', TextType::class)
            ->add('Description', CKEditorType::class, array(
                'config' => array(
                    'uiColor' => '#ffffff',
                    'toolbar'=>'full',
                    'required'=>true


                    )))




            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$request->files->get('form')['my_file'];
            if( $file != null ){
                $uploads_directory=$this->getParameter('uploads_directory');
                $filename = md5(uniqid()) .'.'. $file->guessExtension();
                $file->move(
                    $uploads_directory,
                    $filename
                );
                $Article->setMyfile($filename);
            }
            $date = new \DateTime('now',null);
            $date->format('Y-m-d ');
            $Article->setDatePublication($date);
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
            return $this->redirectToRoute('admin_Article_liste');
        }

        return $this->render('@Blog/Article/modifier.html.twig', array(
            'form' => $form->createView()
        ));

    }
    /**
     * @Route("Article/consulter/{id}", name="admin_Article_voir")
     */
    public function voir(Request $request, $id)
    {
        //  $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $em = $this->getDoctrine()->getManager();
        $Article = $em->getRepository(Article::class)->find($id);

        $comm = $em->getRepository(CommentaireArticle::class)->findby(array('articleId' => $Article),array('datePublication' => 'ASC' ));


        $query = $em->createQuery(
            'SELECT A
    FROM BlogBundle:Article A
    where A.id in (SELECT B
    FROM BlogBundle:CommentaireArticle B
    group BY B.articleId) '
        );

        $products = $query->getResult();

        return $this->render('@Blog/Article/voir.html.twig', array(
            'art1' => $Article ,'top'=> $products
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
     * @Route("Article/stat", name="admin_Article_stat")
     */
    public function stat(Request $request)
    {$em = $this->getDoctrine()->getManager();
        //  $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('donation en 2020');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));

        $data = array(
            array('donation monnaire', 45.0),
            array('donation nature', 30.5),
            array('refuge', 24.5),

        );
        $ob->series(array(array('type' => 'pie','name' => 'nombre de donatateurs', 'data' => $data)));

        $query = $em->createQuery(
            'SELECT count(A.id) as cnt
    FROM BlogBundle:Article A'
        );

        $products = $query->getResult();
        $query1 = $em->createQuery(
            'SELECT count(distinct A.articleId) as cnt
    FROM BlogBundle:CommentaireArticle A'
        );

        $products2 = $query1->getResult();

        $query1 = $em->createQuery(
            'SELECT count(A.id) as cnt
    FROM BlogBundle:CommentaireArticle A'
        );

        $products1 = $query1->getResult();

        $ob1 = new Highchart();
        $ob1->chart->renderTo('piechart1');
        $ob1->title->text('Article 2020');
        $ob1->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));

        $data1 = array(
            array('total Article', intval($products[0]["cnt"])),
            array('total commentaire', intval($products1[0]["cnt"])),
            array('article avec commeantaire',intval($products2[0]["cnt"]) ),

        );
        $ob1->series(array(array('type' => 'pie','name' => 'Articles', 'data' => $data1)));


        return $this->render('@Blog/Article/stat.html.twig', array(
            'chart1' => $ob1,'chart' => $ob
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
            $article = new Article();
            $em=$this->getDoctrine()->getManager();
            $Article= $em->getRepository(Article::class)->find($id);
            $commentaire->setArticleId($Article);
            $commentaire->setDatePublication((new \DateTime()));
            // $commentaire ->setUserId($user );


            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('admin_Article_ajouter');
        }

        return $this->render('@Blog/Article/Ajout1.html.twig', array(
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/blog/ajax" ,name="ajaxform")
     */
    public function ajaxcomAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();


        $responseArray[] = array();
        if ($request->isXmlHttpRequest()) {
            $id = $_POST['id'];



            $Article= $em->getRepository(Article::class)->find($id);

            $comm = $em->getRepository(CommentaireArticle::class)->findby(array('articleId' => $Article),array('datePublication' => 'ASC' ));
            foreach ($comm as $comm1) {
                $responseArray[] = array(
                    'id' => $comm1->getId(),
                    'desc' => $comm1->getDescription(),
                );

            }

        }
            return new JsonResponse($responseArray);

    }


    /**
     * @Route("/blog/ajax1" ,name="ajaxform1")
     */
    public function ajaxcom1Action(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $commentaire = new CommentaireArticle();
        $responseArray[] = array();
        if ($request->isXmlHttpRequest()) {
            $id = $_POST['id'];
            $desc= $_POST['desc'];


            $Article= $em->getRepository(Article::class)->find($id);
            $commentaire->setArticleId($Article);

            $commentaire->setDatePublication((new \DateTime()));
             $commentaire ->setDescription($desc);


            $em->persist($commentaire);
            $em->flush();
            $comm = $em->getRepository(CommentaireArticle::class)->findby(array('articleId' => $Article),array('datePublication' => 'ASC' ));
            foreach ($comm as $comm1) {
                $responseArray[] = array(
                    'id' => $comm1->getId(),
                    'desc' => $comm1->getDescription(),
                );

            }

        }
        return new JsonResponse($responseArray);

    }
    }
