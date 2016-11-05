<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Powma\ServiceBundle\Entity\Source
 *
 * @ORM\Entity
 * @ORM\Table(name="sources")
 */
class Source
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $feedUrl;

    public function __construct($name, $feedUrl) {
       $this->setName($name);
       $this->setFeedUrl($feedUrl);
    }

    public function getId()
    {
        return $this->id;
    }
    private function setName($name)
    {
        $this->name = $name;

        return $this;
    }

      public function getName()
    {
        return $this->name;
    }

    private function setFeedUrl($feedUrl)
    {
        $this->feedUrl = $feedUrl;

        return $this;
    }

    public function getSourceFeedClassName()//dont work yet
    {
        return "AppBundle\Entity\$this->name";
    }

    public function getFeedUrl()
    {
        return $this->feedUrl;
    }
}
