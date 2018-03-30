<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class OrderGoods extends Model
{
    /**
     * Количество единиц товара
     *
     * @var integer
     */
    private $quantity;

    /**
     * Артикул товара
     *
     * @var string
     */
    private $id;

    /**
     * Номер строки в чеке
     *
     * @var integer
     */
    private $lineNumber;

    /**
     * Информация об оплате
     * @var Payment[]
     */
    private $payments;

    /**
     * Цена товара
     *
     * @var integer
     */
    private $price;

    /**
     * Наименование товара
     *
     * @var string
     */
    private $name;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return OrderGoods
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return OrderGoods
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * @param int $lineNumber
     *
     * @return OrderGoods
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;

        return $this;
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
     *
     * @return OrderGoods
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;

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
     * @return OrderGoods
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return OrderGoods
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}