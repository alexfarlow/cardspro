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
}