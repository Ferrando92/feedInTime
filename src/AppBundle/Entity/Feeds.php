<?php
namespace AppBundle\Entity;
use AppBundle\Entity\Source;
class Feeds
{
  protected $feedList;

  public function __construct() {
     $this->feedList = [];
  }

  public function setList($feeds) {
     $this->feedList= $feeds;
  }

  public function getList()
  {
    return $this->feedList;
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