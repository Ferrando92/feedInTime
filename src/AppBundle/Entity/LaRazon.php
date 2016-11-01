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

class LaRazon extends FeedXML
{
  public function setBodyByXML($item)
    {
        $this->body = (string)$item->subtitle;

        return $this;
    }

    public function setPublisherByXML($publisher = 'La Razon')
    {
      $this->publisher =  $publisher;

      return $this;
    }
}