<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="feed")
 */
class FeedXML extends Feed
{
  public function __construct($xml) {
      $this->createFeedByXML($xml);
   }

  protected function createFeedByXML($xml)
  {
    $item = $this->setItemXML($xml);
    $this->setTitleByXML($item);
    $this->setBodyByXML($item);
    $this->setImageByXML($item);
    $this->setSourceByXML($item);
    $this->setPublisherByXML();
    $this->setDateByXML($item);
    $this->setActivaEnPortadaXML(true);
  }

  protected function setItemXML($xml)
  {
    return  $xml->channel->item[0];
  }

  protected function setTitleByXML($item)
  {
      $this->title = (string)$item->title;

      return $this;
  }


  protected function setBodyByXML($item)
  {
      $this->body = (string)strip_tags($item->description);

      return $this;
  }


  protected function setImageByXML($item)
  {
      $this->image = (string)$item->children('media',true)->content->attributes()->url;

      return $this;
  }


  protected function setSourceByXML($item)
  {
      $this->source = (string)$item->link;

      return $this;
  }

  protected function setPublisherByXML($publisher = 'Uknown')
  {
      $this->publisher = $publisher;

      return $this;
  }


  protected function setDateByXML($item)
  {
      $this->date = date('Y-m-d', strtotime((string)$item->pubDate));

      return $this;
  }
 // Parche feo momentaneo
  protected function setActivaEnPortadaXML($activaEnPortada)
    {
        $this->activa_en_portada = $activaEnPortada;

        return $this;
    }

}