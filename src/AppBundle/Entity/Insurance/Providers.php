<?php

namespace AppBundle\Entity\Insurance;

use Doctrine\ORM\Mapping as ORM;

/**
 * Providers
 *
 * @ORM\Table(name="providers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProvidersRepository")
 */
class Providers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, unique=true)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="base_price", type="float")
     */
    private $basePrice;

    /**
     * @var int
     *
     * @ORM\Column(name="min_age", type="integer")
     */
    private $minAge;

    /**
     * @var int
     *
     * @ORM\Column(name="max_age", type="integer")
     */
    private $maxAge;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Providers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set basePrice
     *
     * @param float $basePrice
     *
     * @return Providers
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * Get basePrice
     *
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Set minAge
     *
     * @param integer $minAge
     *
     * @return Providers
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * Get minAge
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Set maxAge
     *
     * @param integer $maxAge
     *
     * @return Providers
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * Get maxAge
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }
}

