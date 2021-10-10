<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;



/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User extends BaseUser
{
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Order", mappedBy="user")
     */
    protected $orders;

    public function __construct()
    {
        parent::__construct();
        $this->orders = new ArrayCollection();
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="App\Entity\Order", inversedBy="userId")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $fullName;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $userName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", unique=true)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $telephone;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $password;

    public function setPassword(string $password): void
    {
         $this->password = $password;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

     public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
         $this->userName = $userName;
    }

    public function setFullName(string $fullName): void
    {
         $this->fullName = $fullName;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

     public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */



}
