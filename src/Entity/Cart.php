<?php

declare (strict_types=1);
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_cart")
 * @ORM\Entity()
 */
class Cart
{
    /**
     * @var int | null
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var \DateTime | null
     * @ORM\Column (name="date_time", type="datetime")
     */
    private $datetime;

    /**
     * @var Customer | null
     * @ORM\OneToOne (targetEntity="Customer")
     */
    private $customer;

    /**
     * @var Collection | Product[]
     * @ORM\ManyToMany (targetEntity="Product")
     */
    private $products;

    public function __construct() {

        $this->products = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return \DateTime | null
     */
    public function getDatetime(): ?\DateTime
    {
        return $this->datetime;
    }

    /**
     * @param \DateTime | null $datetime
     */
    public function setDatetime(?\DateTime $datetime): void
    {
        $this->datetime = $datetime;
    }

    /**
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer|null $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return Product[]|Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product[]|Collection $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }


}
