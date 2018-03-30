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

    /**
     * @return UserForm
     */
    public function getUserForm()
    {
        return $this->userForm;
    }

    /**
     * @param UserForm $userForm
     *
     * @return UpdateUserInfoRequest
     */
    public function setUserForm($userForm)
    {
        $this->userForm = $userForm;

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
     * @return UpdateUserInfoRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}