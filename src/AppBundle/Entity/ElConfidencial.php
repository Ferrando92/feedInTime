<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:46
 */

namespace AppBundle\Entity;

class ElConfidencial extends FeedXML
{

  public function setItemXML($xml)
  {
    return $xml->entry[0];
  }

  public function setBodyByXML($item)
  {
      $this->body = (string)$item->summary;

      return $this;
  }
  public function setSourceByXML()
  {
      $this->source = 'El Confidencial';

      return $this;
  }

  public function setDateByXML($item)
  {
      $this->date = date('Y-m-d', strtotime((string)$item->published));

      return $this;
  }

}