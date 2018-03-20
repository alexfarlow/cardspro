<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class GoodsDto extends Model
{
    
    /**
     * Артикул товара (подарка)
     *
     * @var string
     */
    public $goodsExternalId;
    
    
    /**
     * Внутренний идентификатор товара (подарка)
     *
     * @var integer
     */
    public $Id;
    
    
    /**
     * Наименование товара (подарка)
     *
     * @var string
     */
    public $goodsName;
}