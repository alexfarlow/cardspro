<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Информация об операции
 */
class Operation extends Model
{
    /**
     * Внутренний идентификатор операции
     *
     * @var integer
     */
    public $identifier;

    /**
     * Информация о точке, на которой совершена операция
     *
     * @var PartnerNode
     */
    public $node;

    /**
     * Дата/время операции
     *
     * @var string
     */
    public $operationDate;

    /**
     * Тип операции
     *
     * @var string
     */
    public $operationType;

    /**
     * Код типа операции
     *
     * @var string
     */
    public $operationTypeCode;

    /**
     * Сумма баллов, потраченная в рамках операции.
     *
     * @var integer
     */
    public $pointsAmount;

    /**
     * Информация о продукте, по которому совершена операция
     *
     * @var GiftProduct
     */
    public $product;

    /**
     * Информация о покупке (для типа операции PURCHASE)
     *
     * @var PartnerOrderDto
     */
    public $order;

    /**
     * 19-значный номер карты
     *
     * @var string
     */
    public $barcode;

    /**
     * Короткий номер карты
     *
     * @var string
     */
    public $externalId;

    /**
     * Признак отмененной операции
     *
     * @var boolean
     */
    public $cancelled;

    /**
     * Код валюты (единицы измерения), в которых проведена операция
     *
     * @var string
     */
    public $currencyCode;

    /**
     * Сумма начисленных бонусов
     *
     * @var integer
     */
    public $earnedPoints;

    /**
     * Информация о типах начисленных бонусов;
     * (типы бонусов = ['EARN', 'GIFT', 'EVENT', 'DISCOUNT']) и их сумма.
     *
     * @var object
     */
    public $earnedPointsAmountByType;

    /**
     * Информация о подарках
     *
     * @var GiftDto[]
     */
    public $gifts;

    /**
     * Связанные операции
     *
     * @var OperationDto[]
     */
    public $linkedOperations;

    /**
     * Родительсткая операция
     *
     * @var OperationDto
     */
    public $parentOperation;

    /**
     * Сумма списанных бонусов
     *
     * @var integer
     */
    public $spendBonuses;

    /**
     * Информация о транзациях
     *
     * @var TransactionDto[]
     */
    public $transactions;

    /**
     * @return int
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param int $identifier
     *
     * @return Operation
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @return PartnerNode
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param PartnerNode $node
     *
     * @return Operation
     */
    public function setNode($node)
    {
        $this->node = $node;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationDate()
    {
        return $this->operationDate;
    }

    /**
     * @param string $operationDate
     *
     * @return Operation
     */
    public function setOperationDate($operationDate)
    {
        $this->operationDate = $operationDate;

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
     * @return Operation
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationTypeCode()
    {
        return $this->operationTypeCode;
    }

    /**
     * @param string $operationTypeCode
     *
     * @return Operation
     */
    public function setOperationTypeCode($operationTypeCode)
    {
        $this->operationTypeCode = $operationTypeCode;

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
     * @return Operation
     */
    public function setPointsAmount($pointsAmount)
    {
        $this->pointsAmount = $pointsAmount;

        return $this;
    }

    /**
     * @return GiftProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param GiftProduct $product
     *
     * @return Operation
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return PartnerOrderDto
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param PartnerOrderDto $order
     *
     * @return Operation
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return Operation
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     *
     * @return Operation
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param bool $cancelled
     *
     * @return Operation
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;

        return $this;
    }

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
     * @return Operation
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getEarnedPoints()
    {
        return $this->earnedPoints;
    }

    /**
     * @param int $earnedPoints
     *
     * @return Operation
     */
    public function setEarnedPoints($earnedPoints)
    {
        $this->earnedPoints = $earnedPoints;

        return $this;
    }

    /**
     * @return object
     */
    public function getEarnedPointsAmountByType()
    {
        return $this->earnedPointsAmountByType;
    }

    /**
     * @param object $earnedPointsAmountByType
     *
     * @return Operation
     */
    public function setEarnedPointsAmountByType($earnedPointsAmountByType)
    {
        $this->earnedPointsAmountByType = $earnedPointsAmountByType;

        return $this;
    }

    /**
     * @return GiftDto[]
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * @param GiftDto[] $gifts
     *
     * @return Operation
     */
    public function setGifts($gifts)
    {
        $this->gifts = $gifts;

        return $this;
    }

    /**
     * @return OperationDto[]
     */
    public function getLinkedOperations()
    {
        return $this->linkedOperations;
    }

    /**
     * @param OperationDto[] $linkedOperations
     *
     * @return Operation
     */
    public function setLinkedOperations($linkedOperations)
    {
        $this->linkedOperations = $linkedOperations;

        return $this;
    }

    /**
     * @return OperationDto
     */
    public function getParentOperation()
    {
        return $this->parentOperation;
    }

    /**
     * @param OperationDto $parentOperation
     *
     * @return Operation
     */
    public function setParentOperation($parentOperation)
    {
        $this->parentOperation = $parentOperation;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpendBonuses()
    {
        return $this->spendBonuses;
    }

    /**
     * @param int $spendBonuses
     *
     * @return Operation
     */
    public function setSpendBonuses($spendBonuses)
    {
        $this->spendBonuses = $spendBonuses;

        return $this;
    }

    /**
     * @return TransactionDto[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param TransactionDto[] $transactions
     *
     * @return Operation
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;

        return $this;
    }
}