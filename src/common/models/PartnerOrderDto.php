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
    private $amount;

    /**
     * Товары из чека
     *
     * @var PartnerOrderGoodDto[]
     */
    private $goods;

    /**
     * @var integer
     */
    private $id;

    /**
     * Номер чека
     *
     * @var string
     */
    private $orderNumber;

    /**
     * Сумма возврата
     *
     * @var integer
     */
    private $refundAmount;

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
     * @return PartnerOrderDto
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return PartnerOrderGoodDto[]
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param PartnerOrderGoodDto[] $goods
     *
     * @return PartnerOrderDto
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return PartnerOrderDto
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     *
     * @return PartnerOrderDto
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
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
     *
     * @return PartnerOrderDto
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;

        return $this;
    }
}