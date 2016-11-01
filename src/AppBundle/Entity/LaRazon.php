<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:44
 */

namespace AppBundle\Entity;

class LaRazon extends FeedXML
{
  public function setBodyByXML($item)
    {
        $this->body = (string)$item->subtitle;

        return $this;
    }

    public function setSourceByXML()
    {
      $this->source = 'La Razon';

      return $this;
    }
}