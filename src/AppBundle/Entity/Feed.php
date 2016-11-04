<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FeedRepository")
 * @ORM\Table(name="feed")
 */
class Feed
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
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @ORM\Column(type="text")
     */
    protected $image;

    /**
     * @ORM\Column(type="text")
     */
    protected $source;

    /**
     * @ORM\Column(type="text")
     */
    protected $publisher;

    /**
     * @ORM\Column(type="text")
     */
    protected $date;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active_at_frontpage;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Feed
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Feed
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Feed
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Feed
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     * @return Feed
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Feed
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set active_at_frontpage
     *
     * @param boolean $ActiveAtFrontPage
     * @return Feed
     */
    public function setActiveAtFrontPage($ActiveAtFrontPage)
    {
        $this->active_at_frontpage = $ActiveAtFrontPage;

        return $this;
    }

    /**
     * Get active_at_frontpage
     *
     * @return boolean
     */
    public function getActiveAtFrontPage()
    {
        return $this->active_at_frontpage;
    }
}
