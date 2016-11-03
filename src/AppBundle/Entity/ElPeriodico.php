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
class ElPeriodico extends FeedXML
{
  protected function setImageByXML($item)
  {
    $this->image = (string)str_replace('"/>','',substr(substr($item->description,strpos($item->description,'src="')),5));

    return $this;
  }

  protected function setPublisherByXML($publisher = 'El Periodico')
    {
      $this->publisher =  $publisher;

      return $this;
    }
}