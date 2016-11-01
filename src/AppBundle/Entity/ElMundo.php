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
class ElMundo extends FeedXML
{
  public function setImageByXML($item)
  {
    $this->image = (string)$item->children('media',true)->content->attributes();

    return $this;
  }

  public function setPublisherByXML($publisher = 'El Mundo')
  {
    $this->publisher =  $publisher;

    return $this;
  }

}