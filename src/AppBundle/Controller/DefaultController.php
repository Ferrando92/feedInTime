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
        $feeds = $this->feedMe();

        return $this->render('default/index.html.twig', array(
          'feeds' => $feeds
        ));
    }

    public function getFeedsRss()
    {
        return $feedsRSS = array(
            'ElPaisRSS' => 'http://ep00.epimg.net/rss/elpais/portada.xml',
            'ElConfidencialRSS' => 'http://rss.elconfidencial.com/espana/',
            'ElMundoRSS' => 'http://estaticos.elmundo.es/elmundo/rss/portada.xml',
            'LaRazonRSS' => 'http://www.larazon.es/rss/portada.xml',
            'ElPeriodicoRSS' => 'http://www.elperiodico.com/es/rss/rss_portada.xml'
        );
    }

    public function feedMe()
    {
        $feedsRSS = $this->getFeedsRss();
        $feeds = array(
                new ElPais(simplexml_load_file($feedsRSS['ElPaisRSS'])),
                //new LaRazon(simplexml_load_file($feedsRSS['LaRazonRSS'])),
                new ElConfidencial(simplexml_load_file($feedsRSS['ElConfidencialRSS'])),
                new ElMundo(simplexml_load_file($feedsRSS['ElMundoRSS'])),
                new ElPeriodico(simplexml_load_file($feedsRSS['ElPeriodicoRSS']))
            );

        return $feeds;
    }
}
