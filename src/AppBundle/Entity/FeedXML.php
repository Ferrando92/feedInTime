<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class FeedXML extends Feed
{
  public function __construct($xml) {
      $this->createFeedByXML($xml);
   }

  public function createFeedByXML($xml)
    {
      $item = $this->setItemXML($xml);
      $this->setTitleByXML($item);
      $this->setBodyByXML($item);
      $this->setImageByXML($item);
      $this->setSourceByXML($item);
      $this->setPublisherByXML();
      $this->setDateByXML($item);
    }
  public function setItemXML($xml)
  {
    return  $xml->channel->item[0];
  }

  public function setTitleByXML($item)
  {
      $this->title = (string)$item->title;

      return $this;
  }


  public function setBodyByXML($item)
  {
      $this->body = (string)strip_tags($item->description);

      return $this;
  }


  public function setImageByXML($item)
  {
      $this->image = (string)$item->children('media',true)->content->attributes()->url;

      return $this;
  }


  public function setSourceByXML($item)
  {
      $this->source = (string)$item->link;

      return $this;
  }

  public function setPublisherByXML($publisher = 'Uknown')
  {
      $this->publisher = $publisher;

      return $this;
  }


  public function setDateByXML($item)
  {
      $this->date = date('Y-m-d', strtotime((string)$item->pubDate));

      return $this;
  }

}