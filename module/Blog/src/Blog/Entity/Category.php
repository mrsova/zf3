<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", uniqueConstraints={@ORM\UniqueConstraint(name="category_key", columns={"category_key"})})
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="category_key", type="string", length=128, nullable=true)
     */
    private $categoryKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_name", type="string", length=128, nullable=true)
     */
    private $categoryName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;



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
     * Set categoryKey.
     *
     * @param string|null $categoryKey
     *
     * @return Category
     */
    public function setCategoryKey($categoryKey = null)
    {
        $this->categoryKey = $categoryKey;

        return $this;
    }

    /**
     * Get categoryKey.
     *
     * @return string|null
     */
    public function getCategoryKey()
    {
        return $this->categoryKey;
    }

    /**
     * Set categoryName.
     *
     * @param string|null $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName = null)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName.
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set dateCreated.
     *
     * @param \DateTime|null $dateCreated
     *
     * @return Category
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
}
