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
}