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
    private $amount;

    /**
     * Идентификатор транзакции
     *
     * @var integer
     */
    private $id;

    /**
     * Описание транзакции
     *
     * @var string
     */
    private $description;

    /**
     * Информации о правиле
     *
     * @var LoyaltyRuleDto
     */
    private $loyaltyRule;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     *
     * @return TransactionDto
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return TransactionDto
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return TransactionDto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return LoyaltyRuleDto
     */
    public function getLoyaltyRule()
    {
        return $this->loyaltyRule;
    }

    /**
     * @param LoyaltyRuleDto $loyaltyRule
     *
     * @return TransactionDto
     */
    public function setLoyaltyRule($loyaltyRule)
    {
        $this->loyaltyRule = $loyaltyRule;

        return $this;
    }
}