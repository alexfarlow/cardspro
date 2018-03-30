<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class RestorePasswordRequest extends Model
{
    /**
     * Информация об идентификаторе карты
     *
     * @var CardIdentifier
     */
    public $cardIdentifier;

    /**
     * Код идентификации (код подтверждения из СМС)
     *
     * @var integer
     */
    public $identCode;

    /**
     * Дополнительные параметры
     *
     * @var string
     */
    public $additionalInfo;

    /**
     * @return CardIdentifier
     */
    public function getCardIdentifier()
    {
        return $this->cardIdentifier;
    }

    /**
     * @param CardIdentifier $cardIdentifier
     *
     * @return RestorePasswordRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdentCode()
    {
        return $this->identCode;
    }

    /**
     * @param int $identCode
     *
     * @return RestorePasswordRequest
     */
    public function setIdentCode($identCode)
    {
        $this->identCode = $identCode;

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
     * @return RestorePasswordRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}