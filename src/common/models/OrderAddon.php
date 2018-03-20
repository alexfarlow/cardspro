<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class OrderAddon extends Model
{
    /**
     * Название дополнительного параметра
     *
     * @var string
     */
    public $name;

    /**
     * Значение дополнительного параметр
     *
     * @var string
     */
    public $value;
}