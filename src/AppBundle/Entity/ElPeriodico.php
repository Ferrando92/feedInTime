<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 01/11/2016
 * Time: 12:46
 */
namespace AppBundle\Entity;

class ElPeriodico extends FeedXML
{
    public function setImageByXML($item)
  {
      $this->image = (string)str_replace('"/>','',substr(substr($item->description,strpos($item->description,'src="')),5));

      return $this;
  }
  public function setSourceByXML()
  {
      $this->source = 'El Periodico';

      return $this;
  }
}