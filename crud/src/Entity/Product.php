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
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="float")
     */
    private $ProductPrice;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ProductQuantity;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ProductBrand;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $ProductDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getProductPrice(): ?float
    {
        return $this->ProductPrice;
    }

    public function setProductPrice(float $ProductPrice): self
    {
        $this->ProductPrice = $ProductPrice;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->ProductQuantity;
    }

    public function setProductQuantity(int $ProductQuantity): self
    {
        $this->ProductQuantity = $ProductQuantity;

        return $this;
    }

    public function getProductBrand(): ?string
    {
        return $this->ProductBrand;
    }

    public function setProductBrand(?string $ProductBrand): self
    {
        $this->ProductBrand = $ProductBrand;

        return $this;
    }

    public function getProductDate(): ?\DateTimeInterface
    {
        return $this->ProductDate;
    }

    public function setProductDate(?\DateTimeInterface $ProductDate): self
    {
        $this->ProductDate = $ProductDate;

        return $this;
    }
}
