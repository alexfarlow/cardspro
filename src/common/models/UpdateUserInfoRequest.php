<?php

namespace cardspro\common\models;


use cardspro\components\Model;

class UpdateUserInfoRequest extends Model
{
    /**
     * Анкетные данные клиента
     *
     * @var UserForm
     */
    public $userForm;

    /**
     * Дополнительные параметры
     *
     * @var string
     */
    public $additionalInfo;
}