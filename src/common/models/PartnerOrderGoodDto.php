<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Товары из чека
 */
class PartnerOrderGoodDto extends Model
{
    /**
     * Артикул товара
     *
     * @var integer
     */
    public $name;

    /**
     * Цена товара
     *
     * @var integer
     */
    public $price;

    /**
     * Количество товара
     *
     * @var number
     */
    public $quantity;

    /**
     * Количество возвращенного товара
     *
     * @var number
     */
    public $refundQuantity;

    /**
     * Описание товара
     *
     * @var string
     */
    public $description;

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $name
     *
     * @return PartnerOrderGoodDto
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     *
     * @return PartnerOrderGoodDto
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return number
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param number $quantity
     *
     * @return PartnerOrderGoodDto
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return number
     */
    public function getRefundQuantity()
    {
        return $this->refundQuantity;
    }

    /**
     * @param number $refundQuantity
     *
     * @return PartnerOrderGoodDto
     */
    public function setRefundQuantity($refundQuantity)
    {
        $this->refundQuantity = $refundQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return PartnerOrderGoodDto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}