<?php
namespace AppBundle\Entity;
use AppBundle\Entity\Source;
class Feeds
{
  protected $feedList = [];

  public function setList($feeds) {
     $this->feedList= $feeds;
  }

  public function getList()
  {
    return $this->feedList;
  }

  public function fillFeedsFromBBDD()
  {
    $this->getLastFiveFeeds();
  }

  public function Feeds()
  {
     $em = $this->getDoctrine()->getManager();

     $this->feedList = $em->getRepository('AppBundle:Feed')->findBy(array('active_at_frontpage' => true));
  }

  public function fillFeedsFromSources($sources)
  {
    foreach ($sources as $source)
    {
        if($feed = $source->generateOwnFeed())
            $this->feedList[] = $feed;
    }

    return $this->feedList;

  }
}