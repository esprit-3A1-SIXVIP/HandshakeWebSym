<?php

namespace DonBundle\Controller;


use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use IK\AmChartsBundle\Charts\Components\DataProvider;
use IK\AmChartsBundle\Charts\CombinedBulletColumnLineChart;

class DefaultController extends Controller
{
    const ANIMATION_STARTUP = true;
    const ANIMATION_DURATION = 1000;
    const CHART_AREA_HEIGHT = '80%';
    const CHART_AREA_WIDTH = '80%';

    public function indexAction()
    {
        return $this->render('@Don/Default/index.html.twig',[
            'ws_url' => 'localhost:8080',

        ]);
    }


    public function chatAction()
    {
        return $this->render('@Don/Default/chat.html.twig',[
            'ws_url' => 'localhost:8080',
        ]);
    }

//    /**
//     * @Route("/donadmin",name="donadmin")
//     */
    public function affichageAdminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donEspeces = $em->getRepository('DonBundle:DonEspece')->findBy(['typeDon'=>'espece']);
        $donNatures = $em->getRepository('DonBundle:DonNature')->findBy(['typeDon'=>'nature']);
        $taille = count($donNatures) + count($donEspeces);
        $users = $em->getRepository('UserBundle:User')->findAll();
        return $this->render( '@Don/DonEspece/accueilAdminDon.html.twig', array(
            'donEspeces' => $donEspeces,
            'donNatures' => $donNatures,
            'users' => $users,
            'taille' => $taille,
        ));
    }

    public function historiqueAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donEspeces = $em->getRepository('DonBundle:DonEspece')->findAll();
        $donNatures = $em->getRepository('DonBundle:DonNature')->findAll();

        $snappy = $this->get("knp_snappy.pdf");
        $html = $this->render( '@Don/DonEspece/historique.html.twig', array(
            'donEspeces' => $donEspeces,
            'donNatures' => $donNatures,
        ));

        $filename = "Historique";

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-type' =>"application/pdf",
                'Content-Disposition' =>'attachement; filename="'.$filename.'.pdf"'
            )
        );
    }

    public function historiqueAdminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donEspeces = $em->getRepository('DonBundle:DonEspece')->findBy(['typeDon'=>'espece']);
        $donNatures = $em->getRepository('DonBundle:DonNature')->findBy(['typeDon'=>'nature']);

        $tailleE = count($donEspeces);
        $tailleN = count($donNatures);

        $CTA = $em->getRepository('DonBundle:DonNature')->findBy(['categorieDonNature'=>'Alimentaires']);
        $NDNA = count($CTA);

        $CTV = $em->getRepository('DonBundle:DonNature')->findBy(['categorieDonNature'=>'Vestimentaires']);
        $NDNV =count($CTV);

        $CTAu = $em->getRepository('DonBundle:DonNature')->findBy(['categorieDonNature'=>'Autres']);
        $NDNAu = count($CTAu);



        $barchart = new BarChart();


        $barchart->getData()->setArrayToDataTable([
            ['Element', 'Taille',  ['role' => 'style'] ],
            ['Nombre DN', $tailleN, 'green'],            // RGB value
            ['DN Alimentaires', $NDNA, 'silver'],            // English color name
            ['DN Vestimentaires', $NDNV, 'gold'],
            ['Autres DN', $NDNAu, 'color: #e5e4e2' ], // CSS-style declaration
        ]);


        $barchart1 = new BarChart();


        $barchart1->getData()->setArrayToDataTable([
            ['Element', 'Taille',  ['role' => 'style'] ],
            ['Nombre DE', $tailleE, 'green'],            // RGB value
            ['DN Alimentaires', $NDNA, 'silver'],            // English color name
            ['DN Vestimentaires', $NDNV, 'gold'],
            ['Autres DN', $NDNAu, 'color: #e5e4e2' ], // CSS-style declaration
        ]);

        $users = $em->getRepository('UserBundle:User')->findAll();

        $snappy = $this->get("knp_snappy.pdf");
        $html = $this->render( '@Don/DonEspece/historiqueAdmin.html.twig', array(
            'donEspeces' => $donEspeces,
            'donNatures' => $donNatures,
            'users' => $users,
            'barchart' => $barchart,
            'barchart1' => $barchart1,
        ));

        $filename = "HistoriqueAdmin";

//        return $html;

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-type' =>"application/pdf",
                'Content-Disposition' =>'attachement; filename="'.$filename.'.pdf"'
            )
        );
    }

    public function statistiqueAction()
    {
        $em = $this->getDoctrine()->getManager();

        $donEspeces = $em->getRepository('DonBundle:DonEspece')->findBy(['typeDon'=>'espece']);
        $donNatures = $em->getRepository('DonBundle:DonNature')->findBy(['typeDon'=>'nature']);
        $taille = count($donNatures) + count($donEspeces);
        $tailleE = count($donEspeces);
        $tailleN = count($donNatures);

        $CTA = $em->getRepository('DonBundle:DonNature')->findBy(['categorieDonNature'=>'Alimentaires']);
        $NDNA = count($CTA);

        $CTV = $em->getRepository('DonBundle:DonNature')->findBy(['categorieDonNature'=>'Vestimentaires']);
        $NDNV =count($CTV);

        $CTAu = $em->getRepository('DonBundle:DonNature')->findBy(['categorieDonNature'=>'Autres']);
        $NDNAu = count($CTAu);



        $barchart = new BarChart();


        $barchart->getData()->setArrayToDataTable([
                ['Element', 'Taille',  ['role' => 'style'] ],
         ['Nombre DN', $tailleN, 'green'],            // RGB value
         ['DN Alimentaires', $NDNA, 'silver'],            // English color name
         ['DN Vestimentaires', $NDNV, 'gold'],
         ['Autres DN', $NDNAu, 'color: #e5e4e2' ], // CSS-style declaration
      ]);
        $barchart->getOptions()->getAnimation()->setStartup(self::ANIMATION_STARTUP);
        $barchart->getOptions()->getAnimation()->setDuration(self::ANIMATION_DURATION);
        $barchart->getOptions()->getChartArea()->setHeight(self::CHART_AREA_HEIGHT);
        $barchart->getOptions()->getChartArea()->setWidth(self::CHART_AREA_WIDTH);

        $barchart1 = new BarChart();


        $barchart1->getData()->setArrayToDataTable([
            ['Element', 'Taille',  ['role' => 'style'] ],
            ['Nombre DE', $tailleE, 'green'],            // RGB value
            ['DN Alimentaires', $NDNA, 'silver'],            // English color name
            ['DN Vestimentaires', $NDNV, 'gold'],
            ['Autres DN', $NDNAu, 'color: #e5e4e2' ], // CSS-style declaration
        ]);
        $barchart1->getOptions()->getAnimation()->setStartup(self::ANIMATION_STARTUP);
        $barchart1->getOptions()->getAnimation()->setDuration(self::ANIMATION_DURATION);
        $barchart1->getOptions()->getChartArea()->setHeight(self::CHART_AREA_HEIGHT);
        $barchart1->getOptions()->getChartArea()->setWidth(self::CHART_AREA_WIDTH);


        $preperadArr = [
            [
                'column1' => 5,
                'column2' => 9,
                'date' => '2017-06-01'
            ],[
                'column1' => 5,
                'column2' => 9,
                'date' => '2017-06-02'
            ],[
                'column1' => 5,
                'column2' => 9,
                'date' => '2017-06-03'
            ],

];

$dataProvider = new DataProvider($preperadArr);

$chart = new CombinedBulletColumnLineChart();
$chart->setTheme('dark');
$chart->setDataProvider($dataProvider);


        return $this->render( '@Don/DonEspece/statistiques.html.twig', array(
            'barchart' => $barchart,
            'barchart1' => $barchart1,
            'taille' => $taille,
            'chart' => $chart,

        ));
    }
}
