<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 */
class Student
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $personalNumber;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\SchoolBundle\Entity\ClassGroup
     */
    private $classgroup;

    /**
     * @var \Application\SchoolBundle\Entity\Nationality
     */
    private $nationality;


    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Student
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Student
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set personalNumber
     *
     * @param string $personalNumber
     * @return Student
     */
    public function setPersonalNumber($personalNumber)
    {
        $this->personalNumber = $personalNumber;

        return $this;
    }

    /**
     * Get personalNumber
     *
     * @return string
     */
    public function getPersonalNumber()
    {
        return $this->personalNumber;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return Student
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Student
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Student
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set classgroup
     *
     * @param \Application\SchoolBundle\Entity\ClassGroup $classgroup
     * @return Student
     */
    public function setClassgroup(\Application\SchoolBundle\Entity\ClassGroup $classgroup = null)
    {
        $this->classgroup = $classgroup;

        return $this;
    }

    /**
     * Get classgroup
     *
     * @return \Application\SchoolBundle\Entity\ClassGroup
     */
    public function getClassgroup()
    {
        return $this->classgroup;
    }

    /**
     * Set nationality
     *
     * @param \Application\SchoolBundle\Entity\Nationality $nationality
     * @return Student
     */
    public function setNationality(\Application\SchoolBundle\Entity\Nationality $nationality = null)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return \Application\SchoolBundle\Entity\Nationality
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @var \Application\SchoolBundle\Entity\Transfer
     */
    private $transfer;


    /**
     * Set transfer
     *
     * @param \Application\SchoolBundle\Entity\Transfer $transfer
     * @return Student
     */
    public function setTransfer(\Application\SchoolBundle\Entity\Transfer $transfer = null)
    {
        $this->transfer = $transfer;

        return $this;
    }

    /**
     * Get transfer
     *
     * @return \Application\SchoolBundle\Entity\Transfer
     */
    public function getTransfer()
    {
        return $this->transfer;
    }
}
