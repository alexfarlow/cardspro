<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Информация о транзациях
 */
class TransactionDto extends Model
{
    /**
     * Сумма транзации
     *
     * @var integer
     */
    public $amount;

    /**
     * Идентификатор транзакции
     *
     * @var integer
     */
    public $id;

    /**
     * Описание транзакции
     *
     * @var string
     */
    public $description;

    /**
     * Информации о правиле
     *
     * @var LoyaltyRuleDto
     */
    public $loyaltyRule;
}