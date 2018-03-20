<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class GiftProduct extends Model
{
    /**
     * Идентификатор продукта
     *
     * @var integer
     */
    public $id;
    
    
    /**
     * Название продукта
     *
     * @var string
     */
    public $name;
    
    
    /**
     * Код продукта
     *
     * @var string
     */
    public $code;
    
    
    /**
     * Тип продукта: [POINTS, PURCHASES]
     *
     * @var string
     */
    public $type;
    
    
    /**
     * Тип счёта карты (баланса). [BONUS, DISCOUNT, GIFT]
     * 
     * BONUS - бонусная карта,
     * DISCOUNT - дисконтная (скидочная) карта,
     * GIFT - подарочная карта
     *
     * @var string
     */
    public $kind;
    
    
    /**
     * Цена
     *
     * @var integer
     */
    public $price;
    
    
    /**
     * Код дизайна продукта;
     *
     * @var string
     */
    public $cardDesignCode;
    
    
    /**
     * Дизайн карты
     *
     * @var CardDesign
     */
    public $cardDesign;
}