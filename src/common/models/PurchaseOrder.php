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

    /**
     * @return OrderAddon[]
     */
    public function getAddons()
    {
        return $this->addons;
    }

    /**
     * @param OrderAddon[] $addons
     */
    public function setAddons($addons)
    {
        $this->addons = $addons;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return OrderGoods[]
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param OrderGoods[] $goods
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param string $orderDate
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param Payment[] $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    /**
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * @param int $refundAmount
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
    }
}

