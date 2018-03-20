<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class LoyaltyLevelDto extends Model
{
    /**
     * Код уровня
     *
     * @var string
     */
    public $code;
    
    
    /**
     * Название уровня (описание)
     *
     * @var string
     */
    public $description;
    
    
    /**
     * Код дизайна для уровня
     *
     * @var string
     */
    public $designCode;
}