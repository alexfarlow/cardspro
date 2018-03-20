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
    public $quantity;

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
     * Информация об оплате
     * @var Payment[]
     */
    public $payments;

    /**
     * Цена товара
     *
     * @var integer
     */
    public $price;

    /**
     * Наименование товара
     *
     * @var string
     */
    public $name;
}