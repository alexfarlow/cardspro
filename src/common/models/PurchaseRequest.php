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
}