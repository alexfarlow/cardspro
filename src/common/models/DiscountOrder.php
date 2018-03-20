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
    public $discountAmount;

    /**
     * Информация о товарах и распределении скидок между ними
     *
     * @var DiscountGoods[]
     */
    public $discountGoods;

    /**
     * Номер чека
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

}