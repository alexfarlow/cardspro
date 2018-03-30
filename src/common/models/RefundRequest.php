<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class RefundRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    public $cardIdentifier;

    /**
     * Идентификатор операции, по которой осуществляется возврат
     *
     * @var integer
     */
    public $operationId;

    /**
     * Сумма возврата для возврата по операции списания или сумма возврата при частичном возврате покупки.
     * В единицах измерения (валюте), указанных в параметре currency PartnerInfo.
     * Обязательно при возврате операции списания и частичном возврате покупки.
     *
     * @var integer
     */
    public $refundAmount;

    /**
     * Идентификатор транзакции
     *
     * @var integer
     */
    public $transactionId;

    /**
     * Код продукта
     *
     * @var string
     */
    public $productCode;

    /**
     * Информация о возвращаемых товарах
     * Обязательно про частичном возврате
     *
     * @var PurchaseOrder
     */
    public $reversedPurchaseOrder;

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
     * @return RefundRequest
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
     * @return RefundRequest
     */
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * @param int $refundAmount
     *
     * @return RefundRequest
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param int $transactionId
     *
     * @return RefundRequest
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

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
     * @return RefundRequest
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return PurchaseOrder
     */
    public function getReversedPurchaseOrder()
    {
        return $this->reversedPurchaseOrder;
    }

    /**
     * @param PurchaseOrder $reversedPurchaseOrder
     *
     * @return RefundRequest
     */
    public function setReversedPurchaseOrder($reversedPurchaseOrder)
    {
        $this->reversedPurchaseOrder = $reversedPurchaseOrder;

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
     * @return RefundRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}