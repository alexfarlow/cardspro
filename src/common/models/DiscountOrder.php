<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.03.2018
 * Time: 21:01
 */

namespace cardspro\common\models;


class DiscountOrder
{
    /**
     * Общая сумма скидки.
     *
     * @var integer
     */
    private $discountAmount;

    /**
     * Информация о товарах и распределении скидок между ними
     *
     * @var DiscountGoods[]
     */
    private $discountGoods;

    /**
     * Номер чека
     *
     * @var string
     */
    private $number;

    /**
     * Дата/время чека
     *
     * @var string
     */
    private $orderDate;

    /**
     * @return string
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return DiscountGoods[]
     */
    public function getDiscountGoods()
    {
        return $this->discountGoods;
    }

    /**
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param int $discountAmount
     *
     * @return DiscountOrder
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * @param DiscountGoods[] $discountGoods
     *
     * @return DiscountOrder
     */
    public function setDiscountGoods($discountGoods)
    {
        $this->discountGoods = $discountGoods;

        return $this;
    }

    /**
     * @param string $number
     *
     * @return DiscountOrder
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @param string $orderDate
     *
     * @return DiscountOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }
}