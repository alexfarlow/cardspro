<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class UserForm extends Model
{
    /**
     * Фамилия
     *
     * @var string
     */
    public $lastName;

    /**
     * Имя
     *
     * @var string
     */
    public $firstName;

    /**
     * Отчество
     *
     * @var string;
     */
    public $middleName;

    /**
     * Дата рождения
     *
     * @var string
     */
    public $birthDate;

    /**
     * Пол [MALE, FEMALE]
     *
     * @var string
     */
    public $gender;

    /**
     * Номер телефона в формате +7ХХХХХХХХХХ
     *
     * @var string
     */
    public $cellPhone;

    /**
     * Адрес электронной почты
     *
     * @var string
     */
    public $email;

    /**
     * Город (адрес)
     *
     * @var string
     */
    public $city;

    /**
     * Дополнительная информация.
     * Например, информация о детях держателя карты
     *
     * @var string
     * @example "additionalInfo": "{\"children\":[ {\"name\": \"Jonh\",\"gender\": \"MALE\",\"birthDate\": \"27.08.1992\"}]}"
     */
    public $additionalInfo;

    /**
     * Идентификатор клиента на процессинге CardsPro (не указывать при активации)
     *
     * @var integer
     */
    public $id;

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return UserForm
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return UserForm
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     *
     * @return UserForm
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     *
     * @return UserForm
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return UserForm
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * @param string $cellPhone
     *
     * @return UserForm
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return UserForm
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return UserForm
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param string $additionalInfo
     *
     * @return UserForm
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return UserForm
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}