<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 27/07/18
 * Time: 15:39
 */

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="string")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=13)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=128)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * Duration in hours
     *
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     */
    private $startPrice;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $selledBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $purchasedAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $purchasedBy;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean): void
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return float
     */
    public function getStartPrice(): float
    {
        return $this->startPrice;
    }

    /**
     * @param float $startPrice
     */
    public function setStartPrice(float $startPrice): void
    {
        $this->startPrice = $startPrice;
    }

    /**
     * @return \DateTime
     */
    public function getPurchasedAt(): \DateTime
    {
        return $this->purchasedAt;
    }

    /**
     * @param \DateTime $purchasedAt
     */
    public function setPurchasedAt(\DateTime $purchasedAt): void
    {
        $this->purchasedAt = $purchasedAt;
    }

    /**
     * @return User
     */
    public function getPurchasedBy(): ?User
    {
        return $this->purchasedBy;
    }

    /**
     * @param User $purchasedBy
     */
    public function setPurchasedBy(User $purchasedBy): void
    {
        $this->purchasedBy = $purchasedBy;
    }

    /**
     * @return User
     */
    public function getSelledBy(): ?User
    {
        return $this->selledBy;
    }

    /**
     * @param User $selledBy
     */
    public function setSelledBy(User $selledBy): void
    {
        $this->selledBy = $selledBy;
    }
}
