<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class Pageable extends Model
{
    /**
     * Номер выводимой страницы. Для вывода всех страниц нужно указать 0.
     *
     * @var integer
     */
    public $page;

    /**
     * Количество операций на одной странице
     *
     * @var integer
     */
    public $size;
}