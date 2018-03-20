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
    public $cardIdentifier;

    /**
     * Код продукта
     *
     * @var string
     */
    public $productCode;

    /**
     * Пополняемое количество проходов	Обязательно для счетов (продуктов) с типом PURCHASES
     *
     * @var integer
     */
    public $purchaseCount;

    /**
     * Сумма пополнения в единицах измерения (валюте), указанных в параметре currency PartnerInfo.
     * Обязательно для счетов (продуктов) с типом POINTS
     *
     * @var integer
     */
    public $sum;

    /**
     * Дополнительные парамеры
     *
     * @var string
     */
    public $additionalInfo;
}