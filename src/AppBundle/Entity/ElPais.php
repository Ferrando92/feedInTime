<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:44
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="feed")
 */
class ElPais extends FeedXML
{
  protected function setBodyByXML($item)
  {
    $this->body = (string)$item->description;

    return $this;
  }

  protected function setImageByXML($item)
  {
    $this->image = (string)$item->enclosure['url'];

    return $this;
  }

  protected function setPublisherByXML($publisher =  'El Pais')
    {
      $this->publisher =  $publisher;

      return $this;
    }
}