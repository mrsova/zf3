<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="category_id_index", columns={"category_id"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="article", type="string", length=255, nullable=true)
     */
    private $article;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_article", type="string", length=255, nullable=true)
     */
    private $shortArticle;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_public", type="boolean", nullable=true)
     */
    private $isPublic = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \Blog\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Blog\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string|null $title
     *
     * @return Article
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set article.
     *
     * @param string|null $article
     *
     * @return Article
     */
    public function setArticle($article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return string|null
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set shortArticle.
     *
     * @param string|null $shortArticle
     *
     * @return Article
     */
    public function setShortArticle($shortArticle = null)
    {
        $this->shortArticle = $shortArticle;

        return $this;
    }

    /**
     * Get shortArticle.
     *
     * @return string|null
     */
    public function getShortArticle()
    {
        return $this->shortArticle;
    }

    /**
     * Set isPublic.
     *
     * @param bool|null $isPublic
     *
     * @return Article
     */
    public function setIsPublic($isPublic = null)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic.
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime|null $dateCreated
     *
     * @return Article
     */
    public function setDateCreated($dateCreated = null)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated.
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set category.
     *
     * @param \Blog\Entity\Category|null $category
     *
     * @return Article
     */
    public function setCategory(\Blog\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \Blog\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }
}
