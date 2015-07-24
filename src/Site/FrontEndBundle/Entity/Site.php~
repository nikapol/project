<?php

namespace Site\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 */
class Site
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $priview;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var string
     */
    private $slug;


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
     * @return Site
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
     * Set priview
     *
     * @param string $priview
     * @return Site
     */
    public function setPriview($priview)
    {
        $this->priview = $priview;

        return $this;
    }

    /**
     * Get priview
     *
     * @return string 
     */
    public function getPriview()
    {
        return $this->priview;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Site
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return Site
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Site
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tags
     *
     * @param \Site\FrontEndBundle\Entity\Sania $tags
     * @return Site
     */
    public function addTag(\Site\FrontEndBundle\Entity\Sania $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Site\FrontEndBundle\Entity\Sania $tags
     */
    public function removeTag(\Site\FrontEndBundle\Entity\Sania $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
