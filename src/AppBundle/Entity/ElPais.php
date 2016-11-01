<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:44
 */

namespace AppBundle\Entity;


class ElPais extends FeedXML
{
  public function setBodyByXML($item)
  {
      $this->body = (string)$item->description;

      return $this;
  }

  public function setImageByXML($item)
  {
      $this->image = (string)$item->enclosure['url'];

      return $this;
  }

  public function setPublisherByXML($publisher =  'El Pais')
    {
      $this->publisher =  $publisher;

      return $this;
    }
}