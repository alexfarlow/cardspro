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

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return OperationDto
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

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
     * @return OperationDto
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param string $operationType
     *
     * @return OperationDto
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * @return int
     */
    public function getPointsAmount()
    {
        return $this->pointsAmount;
    }

    /**
     * @param int $pointsAmount
     *
     * @return OperationDto
     */
    public function setPointsAmount($pointsAmount)
    {
        $this->pointsAmount = $pointsAmount;

        return $this;
    }
}