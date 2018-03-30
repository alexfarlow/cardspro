<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Параметры отмены
 *
 * Class CancelRequest
 *
 * @package cardspro\common\models
 */
class CancelRequest extends Model
{
    
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    public $cardIdentifier;
    
    
    /**
     * Идентификатор отменяемой операции
     *
     * @var integer
     */
    public $operationId;
    
    
    /**
     * Дополнителные параметры
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
     * @return CancelRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

        return $this;
    }

    /**
     * @return int
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @param int $operationId
     *
     * @return CancelRequest
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;

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
     * @return CancelRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}