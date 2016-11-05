<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Source;
use AppBundle\Entity\Feed;
use AppBundle\Entity\FeedXML;
use AppBundle\Entity\ElPais;
use AppBundle\Entity\ElConfidencial;
use AppBundle\Entity\LaRazon;
use AppBundle\Entity\ElPeriodico;
use AppBundle\Entity\ElMundo;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Descomentar para generar los rss
        $this->feedService();
        if (!$feeds = $this->getLastFiveFeeds()) {
            $feeds = $this->fillFeedsFromService();
        }

        return $this->render('default/index.html.twig', array(
          'feeds' => $feeds
        ));
    }

    private function fillFeedsFromService()
    {
        $feeds = $this->feedService();
        if(!$feeds)
            throw $this->createNotFoundException('BALLA, POS SE NOS HA ROTO LA COSA');

        return $feeds;
    }

    private function getLastFiveFeeds()
    {
       $em = $this->getDoctrine()->getManager();

       return $em->getRepository('AppBundle:Feed')->findBy(array('active_at_frontpage' => true)); //para mover
    }

    private function old_getSourcesRSS()// without objects
    {
        return $sourcesRSS = array(
            'ElPaisRSS' => 'http://ep00.epimg.net/rss/elpais/portada.xml',
            'ElConfidencialRSS' => 'http://rss.elconfidencial.com/espana/',
            'ElMundoRSS' => 'http://estaticos.elmundo.es/elmundo/rss/portada.xml',
            'LaRazonRSS' => 'http://www.larazon.es/rss/portada.xml',
            'ElPeriodicoRSS' => 'http://www.elperiodico.com/es/rss/rss_portada.xml'
        );
    }

     private function getSourcesRSS()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('AppBundle:Source')->findAll();
    }

    private function feedService()
    {
        $feeds = $this->feedMe();
        $this->refreshFeedsFromBBDD();
        $this->insertFeedsIntoBBDD($feeds);

        return $feeds;
    }

    private function feedMe()
    {
        $feeds = $this->generateFeedsArray();
        if (count($feeds)<4) {
              throw $this->createNotFoundException('Los servidores de noticias no se encuentran disponibles ahora mismo, vayan con sus antorchas a por ellos.');
          }

        return $feeds;
    }

    private function old_generateFeedsArray() //without objects, sources are arrays
    {
        $sourcesRSS = $this->getSourcesRSS();

        return array(
                new ElPais(simplexml_load_file($sourcesRSS['ElPaisRSS'])),
                new LaRazon(simplexml_load_file($sourcesRSS['LaRazonRSS'])),
                new ElConfidencial(simplexml_load_file($sourcesRSS['ElConfidencialRSS'])),
                new ElMundo(simplexml_load_file($sourcesRSS['ElMundoRSS'])),
                new ElPeriodico(simplexml_load_file($sourcesRSS['ElPeriodicoRSS']))
            );
    }

    private function next_refactor_generateFeedsArray()
    {
        $sourcesRSS = $this->getSourcesRSS();
        $generateFeeds = [];
        foreach ($sourcesRSS as $source)
        {
           $className = $source->getSourceFeedClassName();
           $generateFeeds[] = new $className(simplexml_load_file($source->getFeedUrl));
        }
        return $generateFeeds;
    }

    private function generateFeedsArray()
    {
        $sourcesRSS = $this->getSourcesRSS();
        $generateFeeds = [];
        foreach ($sourcesRSS as $source)
        {
            if($feed = $this->createTypeOfFeedBySource($source))
                $generateFeeds[] = $feed;
        }

        return $generateFeeds;
    }
    private function createTypeOfFeedBySource($source) // no me termina
    {
        switch ($source->getName()) {
            case 'ElPais':
                return new ElPais(simplexml_load_file($source->getFeedUrl()));
            break;

            case 'LaRazon':
                return new LaRazon(simplexml_load_file($source->getFeedUrl()));
            break;

            case 'ElConfidencial':
                return new ElConfidencial(simplexml_load_file($source->getFeedUrl()));
            break;

            case 'ElPeriodico':
                return new ElPeriodico(simplexml_load_file($source->getFeedUrl()));
            break;

            case 'ElMundo':
                //return new ElMundo(simplexml_load_file($source->getFeedUrl()));
            break;

        }

    }

    private function insertFeedsIntoBBDD($feeds)
    {
        $em = $this->getDoctrine()->getManager();
        foreach ($feeds as $feed)
        {
            $em->persist($feed);
        }
        $em->flush($feed);
    }

    private function refreshFeedsFromBBDD()
    {
        $em = $this->getDoctrine()->getManager();
        $feeds = $em->getRepository('AppBundle:Feed')->findAll();
        foreach ($feeds as $feed)
        {
            $feed->setActiveAtFrontPage(false);
            $em->persist($feed);
        }
        $em->flush();
    }

}
