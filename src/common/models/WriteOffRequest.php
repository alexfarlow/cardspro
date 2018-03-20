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
}
