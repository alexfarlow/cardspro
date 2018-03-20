<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class CardDesign extends Model
{
    /**
     * Код дизайна карты
     *
     * @var string
     */
    public $code;
    
    
    /**
     * Идентификатор дизайна карты
     *
     * @var integer
     */
    public $id;
    
    
    /**
     * Наименование дизайна карты
     *
     * @var string
     */
    public $name;
}
