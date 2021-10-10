<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Cassandra\Date;
use Doctrine\ORM\Mapping as ORM;
use mysql_xdevapi\TableUpdate;
//use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="orders")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="order")
     */
    private $products;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @var string A "Y-m-d" formatted value
     * @ORM\Column(type="date", nullable="true")
     */
    private $shippingDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $address;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ? int
    {
        return $this->userId;
    }

    public function getAddress(): ? string
    {
        return $this->address;
    }

    public function getshippingDate(): ? string
    {
        return $this->shippingDate;
    }

    public function getQuantity(): ? int
    {
        return $this->quantity;
    }




}
