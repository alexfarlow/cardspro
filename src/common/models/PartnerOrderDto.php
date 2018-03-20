<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class PartnerOrderDto extends Model
{
    /**
     * Сумма чека
     *
     * @var integer
     */
    public $amount;

    /**
     * Товары из чека
     *
     * @var PartnerOrderGoodDto[]
     */
    public $goods;

    /**
     * @var integer
     */
    public $id;

    /**
     * Номер чека
     *
     * @var string
     */
    public $orderNumber;

    /**
     * Сумма возврата
     *
     * @var integer
     */
    public $refundAmount;
}