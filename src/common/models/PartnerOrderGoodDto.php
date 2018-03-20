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
}