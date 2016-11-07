<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Source;
use AppBundle\Entity\Feeds;
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
        //$this->feedService();
        $feeds = new Feeds();
        $feeds->setList($this->getLastFiveFeedsFromBBDD());
        if (!$feeds->getList()) {
            $feeds->fillFeedsFromSources($this->getSourcesRSS());
        }

        return $this->render('default/index.html.twig', array(
          'feeds' => $feeds->getList()
        ));
    }

    private function feedService()
    {
        $sources = $this->getSourcesRSS();
        $feeds = new Feeds();
        $feeds->fillFeedsFromSources($sources);
        if($feeds->getList())
        {
            $this->refreshFeedsFromBBDD();
            $this->insertFeedsIntoBBDD($feeds);
        }
    }

    private function getSourcesRSS()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('AppBundle:Source')->findAll();
    }

    private function insertFeedsIntoBBDD($feeds)
    {
        $em = $this->getDoctrine()->getManager();
        foreach ($feeds as $feed)
        {
            $em->persist($feed);
        }
        $em->flush();
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
    private function getLastFiveFeedsFromBBDD()
    {
        $em = $this->getDoctrine()->getManager();

        return $this->feedList = $em->getRepository('AppBundle:Feed')->findBy(array('active_at_frontpage' => true));
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


}
