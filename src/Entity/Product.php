<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $entity_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categoryName;

    /**
     * @ORM\Column(type="string" , length=255)
     */
    private $sku;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=5000)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=1000,nullable=true)
     */
    private $shortDesc;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $brand;

    /**
     * @ORM\Column(type="string" , length=255 ,nullable=true)
     */
    private $rating;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $caffeineType;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $count;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $flavored;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $seasonal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $instock;

    /**
     * @ORM\Column(type="integer")
     */
    private $facebook;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isKCup;


    public function getEntityId(): ?int
    {
        return $this->entity_id;
    }

    public function setEntityId(int $entity_id): self
    {
        $this->entity_id = $entity_id;

        return $this;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setCategoryName(string $categoryName): self
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getShortDesc(): ?string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(string $shortDesc): self
    {
        $this->shortDesc = $shortDesc;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getCaffeineType(): ?string
    {
        return $this->caffeineType;
    }

    public function setCaffeineType(?string $caffeineType): self
    {
        $this->caffeineType = $caffeineType;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getFlavored(): ?string
    {
        return $this->flavored;
    }

    public function setFlavored(?string $flavored): self
    {
        $this->flavored = $flavored;

        return $this;
    }

    public function getSeasonal(): ?string
    {
        return $this->seasonal;
    }

    public function setSeasonal(?string $seasonal): self
    {
        $this->seasonal = $seasonal;

        return $this;
    }

    public function getInstock(): ?string
    {
        return $this->instock;
    }

    public function setInstock(string $instock): self
    {
        $this->instock = $instock;

        return $this;
    }

    public function getFacebook(): ?int
    {
        return $this->facebook;
    }

    public function setFacebook(int $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

    public function isIsKCup(): ?bool
    {
        return $this->isKCup;
    }

    public function setIsKCup(bool $isKCup): self
    {
        $this->isKCup = $isKCup;

        return $this;
    }
}
