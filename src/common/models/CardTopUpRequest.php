<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class CardTopUpRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    private $cardIdentifier;

    /**
     * Код продукта
     *
     * @var string
     */
    private $productCode;

    /**
     * Пополняемое количество проходов	Обязательно для счетов (продуктов) с типом PURCHASES
     *
     * @var integer
     */
    private $purchaseCount;

    /**
     * Сумма пополнения в единицах измерения (валюте), указанных в параметре currency PartnerInfo.
     * Обязательно для счетов (продуктов) с типом POINTS
     *
     * @var integer
     */
    private $sum;

    /**
     * Дополнительные парамеры
     *
     * @var string
     */
    private $additionalInfo;

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
     * @return CardTopUpRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

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
     * @return CardTopUpRequest
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseCount()
    {
        return $this->purchaseCount;
    }

    /**
     * @param int $purchaseCount
     *
     * @return CardTopUpRequest
     */
    public function setPurchaseCount($purchaseCount)
    {
        $this->purchaseCount = $purchaseCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param int $sum
     *
     * @return CardTopUpRequest
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

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
     * @return CardTopUpRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }
}