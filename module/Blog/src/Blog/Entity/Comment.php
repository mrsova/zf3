<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="article_id", columns={"article_id"})})
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="user_email", type="string", length=128, nullable=true)
     */
    private $userEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=128, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \Blog\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="Blog\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;



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
     * Set userEmail.
     *
     * @param string|null $userEmail
     *
     * @return Comment
     */
    public function setUserEmail($userEmail = null)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail.
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return Comment
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime|null $dateCreated
     *
     * @return Comment
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
     * Set article.
     *
     * @param \Blog\Entity\Article|null $article
     *
     * @return Comment
     */
    public function setArticle(\Blog\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article.
     *
     * @return \Blog\Entity\Article|null
     */
    public function getArticle()
    {
        return $this->article;
    }
}
