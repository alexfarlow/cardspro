<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class PartnerNode extends Model
{
    /**
     * Идентификатор точки
     *
     * @var integer
     */
    public $id;

    /**
     * Название точки
     *
     * @var string
     */
    public $name;
}