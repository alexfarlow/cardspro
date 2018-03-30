<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Параметры списания
 */
class WriteOffRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     * 
     * @var CardIdentifier
     */
    public $cardIdentifier;

    /**
     *  Сумма списания в баллах для карт с типом POINTS в единицах измерения (валюте), 
     * указанных в параметре currency PartnerInfo.
     * 
     * Для карт с типом счёта PURCHASE независимо от значения, 
     * указанного в данном параметре, будет списан 1 проход/услуга.
     * 
     * @var int
     */
    public $bonusAmount;

    /**
     * Код продукта
     * 
     * @var string
     */
    public $productCode;

    /**
     * Информация о чеке 
     * 
     * @var PurchaseOrder
     */
    public $order;

    /**
     * Код идентификации
     * (OTP-код подтверждения из СМС).
     * OTP-код - 4-значный код, который был отправлен на номер телефона клиента.
     * 
     * @var int
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
     * @return WriteOffRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

        return $this;
    }

    /**
     * @return int
     */
    public function getBonusAmount()
    {
        return $this->bonusAmount;
    }

    /**
     * @param int $bonusAmount
     *
     * @return WriteOffRequest
     */
    public function setBonusAmount($bonusAmount)
    {
        $this->bonusAmount = $bonusAmount;

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
     * @return WriteOffRequest
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

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
     * @return WriteOffRequest
     */
    public function setOrder($order)
    {
        $this->order = $order;

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
     * @return WriteOffRequest
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
     * @return WriteOffRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}
