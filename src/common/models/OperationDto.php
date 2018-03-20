<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Связанные операции
 */
class OperationDto extends Model
{
    /**
     * Код валюты, в которой совершена операция
     *
     * @var string
     */
    public $currencyCode;

    /**
     * Идентификатор операции
     *
     * @var integer
     */
    public $id;

    /**
     * Тип операции
     *
     * @var string
     */
    public $operationType;

    /**
     * Сумма баллов
     *
     * @var integer
     */
    public $pointsAmount;
}