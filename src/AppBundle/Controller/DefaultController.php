<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $feeds = $this->getLastFiveFeeds();
        if (!$feeds) {
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

    private function getFeedsRss()
    {
        return $feedsRSS = array(
            'ElPaisRSS' => 'http://ep00.epimg.net/rss/elpais/portada.xml',
            'ElConfidencialRSS' => 'http://rss.elconfidencial.com/espana/',
            'ElMundoRSS' => 'http://estaticos.elmundo.es/elmundo/rss/portada.xml',
            'LaRazonRSS' => 'http://www.larazon.es/rss/portada.xml',
            'ElPeriodicoRSS' => 'http://www.elperiodico.com/es/rss/rss_portada.xml'
        );
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

    private function generateFeedsArray()
    {
        $feedsRSS = $this->getFeedsRss();

        return array(
                new ElPais(simplexml_load_file($feedsRSS['ElPaisRSS'])),
                new LaRazon(simplexml_load_file($feedsRSS['LaRazonRSS'])),
                new ElConfidencial(simplexml_load_file($feedsRSS['ElConfidencialRSS'])),
                new ElMundo(simplexml_load_file($feedsRSS['ElMundoRSS'])),
                new ElPeriodico(simplexml_load_file($feedsRSS['ElPeriodicoRSS']))
            );
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
            $feed->setActivaEnPortada(false);
            $em->persist($feed);
        }
        $em->flush();
    }

}
