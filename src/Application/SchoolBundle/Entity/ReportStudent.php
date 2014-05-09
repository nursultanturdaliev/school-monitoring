<?php

namespace Application\SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportStudent
 */
class ReportStudent
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
     * @var \Application\SchoolBundle\Entity\Transfer
     */
    private $transfer;

    /**
     * @var \Application\SchoolBundle\Entity\Nationality
     */
    private $nationality;

    /**
     * @var \Application\SchoolBundle\Entity\ReportStudent
     */
    private $report;


    /**
     * Set firstname
     *
     * @param string $firstname
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * @return ReportStudent
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
     * Set transfer
     *
     * @param \Application\SchoolBundle\Entity\Transfer $transfer
     * @return ReportStudent
     */
    public function setTransfer(\Application\SchoolBundle\Entity\ReportTransfer $transfer = null)
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

    /**
     * Set report
     *
     * @param \Application\SchoolBundle\Entity\Report $report
     * @return Report
     */
    public function setReport(\Application\SchoolBundle\Entity\Report $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \Application\SchoolBundle\Entity\Report
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @var string
     */
    private $classGroup;


    /**
     * Set classGroup
     *
     * @param string $classGroup
     * @return ReportStudent
     */
    public function setClassGroup($classGroup)
    {
        $this->classGroup = $classGroup;

        return $this;
    }

    /**
     * Get classGroup
     *
     * @return string
     */
    public function getClassGroup()
    {
        return $this->classGroup;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return ReportStudent
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }
}