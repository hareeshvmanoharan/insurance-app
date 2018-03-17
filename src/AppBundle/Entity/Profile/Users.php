<?php

namespace AppBundle\Entity\Profile;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Users
 *
 * @ORM\Table(name="profile_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Profile\UsersRepository")
 * @UniqueEntity(fields="email", message="Email Id already exist")
 * @UniqueEntity(fields="phone", message="Phone Number already exist")
 */
class Users
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
     * @Assert\NotBlank(message="Name field cannot be blank")
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(message="Email field cannot be blank")
     * @Assert\Email(message="The email '{{ value }}' is not a valid email")
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;


    /**
     * @var string
     * @Assert\NotBlank(message="Phone field cannot be blank")
     * @Assert\Regex(pattern="^\+?(\d[.\- ]*){9,14}(e?xt?\d{1,5})?$^", message="Please enter valid phone number")
     * @ORM\Column(name="phone", type="string", length=15)
     */
    private $phone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date")
     */
    private $dob;




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
     * @return Users
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
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dob
     *
     * @param string $dob
     *
     * @return Users
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }


    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }


}

