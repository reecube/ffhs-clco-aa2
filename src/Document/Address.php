<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Address
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $firstname = '';

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $lastname = '';

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $street = '';

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $houseNumber = '';

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $zip = '';

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $city = '';

    /**
     * @MongoDB\Field(type="date")
     *
     * @var null|\Datetime
     */
    protected $birthday = null;

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $email = '';

    /**
     * @MongoDB\Field(type="string")
     *
     * @var string
     */
    protected $phone = '';

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     */
    public function setHouseNumber(string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return \Datetime|null
     */
    public function getBirthday(): ?\Datetime
    {
        return $this->birthday;
    }

    /**
     * @param \Datetime|null $birthday
     */
    public function setBirthday(?\Datetime $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}
