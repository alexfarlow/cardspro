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
}