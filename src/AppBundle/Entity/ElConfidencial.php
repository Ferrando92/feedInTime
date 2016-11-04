<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:46
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="feed")
 */
class ElConfidencial extends FeedXML
{
  protected function setItemXML($xml)
  {
    return $xml->entry[0];
  }

  protected function setBodyByXML($item)
  {
      $this->body = (string)$item->summary;

      return $this;
  }

  protected function setPublisherByXML($publisher = 'El Confidencial')
    {
      $this->publisher = $publisher;

      return $this;
    }

  protected function setDateByXML($item)
  {
      $this->date = date('Y-m-d', strtotime((string)$item->published));

      return $this;
  }
}
