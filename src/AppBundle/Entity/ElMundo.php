<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:44
 */

namespace AppBundle\Entity;


class ElMundo extends FeedXML
{
  public function setImageByXML($item)
  {
      $this->image = (string)$item->children('media',true)->content->attributes();

      return $this;
  }
  public function setSourceByXML()
  {
      $this->source = 'El Mundo';

      return $this;
  }

}