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
    private $amount;

   /**
    * Тип платежного инструмента
    *
    * @var string
    */
    private $type;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Payment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}