<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.03.2018
 * Time: 21:05
 */

namespace cardspro\common\models;


class DiscountGoods
{

    /**
     * Количество товаров, на которое была рассчитана скидка
     *
     * @var integer
     */
    public $count;

    /**
     * Сумма скидки по товару
     *
     * @var integer
     */
    public $discountAmount;

    /**
     * Артикул товара
     *
     * @var string
     */
    public $id;

    /**
     * Номер строки в чеке
     *
     * @var integer
     */
    public $lineNumber;

    /**
     * Количество товаров, которые можно подарить клиенту
     *
     * @var string
     */
    public $giftCount;

    /**
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getGiftCount()
    {
        return $this->giftCount;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * @param int $count
     *
     * @return DiscountGoods
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param int $discountAmount
     *
     * @return DiscountGoods
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return DiscountGoods
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param int $lineNumber
     *
     * @return DiscountGoods
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;

        return $this;
    }

    /**
     * @param string $giftCount
     *
     * @return DiscountGoods
     */
    public function setGiftCount($giftCount)
    {
        $this->giftCount = $giftCount;

        return $this;
    }
}