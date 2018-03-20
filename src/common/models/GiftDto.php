<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class GiftDto extends Model
{
    /**
     * Дата, до которой доступен подарок
     *
     * @var string
     */
    public $activeTo;
    
    
    /**
     * Дата начисления подарка
     *
     * @var string
     */
    public $createdAt;
    
    
    /**
     * Блок с информацией о товаре (подарке)
     *
     * @var GoodsDto
     */
    public $goods;
    
    
    /**
     * Идентификатор начисления подарка
     *
     * @var integer
     */
    public $id;
}