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
}