<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class PurchaseRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     * 
     * @var CardIdentifier
     */
    public $cardIdentifier;

    /**
     * Информация о чеке
     * 
     * @var PurchaseOrder
     */
    public $order;

    /**
     * Код продукта
     *
     * @var string
     */
    public $productCode;

    /**
     * Идентификатор операции списания.
     * Указывается, если необходимо связать операцию покупки с операцией списания
     * (например, для осуществления будущего возврата)
     *
     * @var integer
     */
    public $writeOffOperationId;

    /**
     * Идентификационный код (OTP-код подтверждения из СМС)
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
     * @return PurchaseRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

        return $this;
    }

    /**
     * @return PurchaseOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param PurchaseOrder $order
     *
     * @return PurchaseRequest
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     *
     * @return PurchaseRequest
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getWriteOffOperationId()
    {
        return $this->writeOffOperationId;
    }

    /**
     * @param int $writeOffOperationId
     *
     * @return PurchaseRequest
     */
    public function setWriteOffOperationId($writeOffOperationId)
    {
        $this->writeOffOperationId = $writeOffOperationId;

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
     * @return PurchaseRequest
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
     * @return PurchaseRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}