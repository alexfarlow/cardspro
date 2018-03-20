<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class PurchaseOrder extends Model
{
    /**
     * Блок с дополнительными параметрами чека
     *
     * @var OrderAddon[]
     */
    public $addons;

    /**
     * Сумма чека
     *
     * @var string
     */
    public $amount;

    /**
     * Блок с информацией о товарах в чеке (покупке)
     *
     * @var OrderGoods[]
     */
    public $goods;

    /**
     * Номер чека, Обязателен для покупки и возврата.
     *
     * @var string
     */
    public $number;

    /**
     * Дата/время чека
     *
     * @var string
     */
    public $orderDate;

    /**
     * Блок с информацией об оплате
     *
     * @var Payment[]
     */
    public $payments;

    /**
     * Сумма операции возврата
     *
     * @var integer
     */
    public $refundAmount;
}

