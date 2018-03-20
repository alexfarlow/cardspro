<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class Payment extends Model
{
    /**
     * Сумма оплаты
     *
     * @var integer
     */
    public $amount;

   /**
    * Тип платежного инструмента
    *
    * @var string
    */
    public $type;
}