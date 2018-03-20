<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Параметры запрашиваемых операций
 *
 * Class OperationsRequest
 *
 * @package cardspro\common\models
 */
class OperationsRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    public $cardIdentifier;

    /**
     * Начальная дата (включительно)
     *
     * @var string
     */
    public $dateFrom;

    /**
     * Конечная дата (включительно)
     *
     * @var string
     */
    public $dateTo;


    /**
     * Количество выводимых страниц и операций	-
     *
     * @var Pageable
     */
    public $pageable;

    /**
     * Точка продаж	Обязателен, если не указан какой-либо из идентификаторов карт
     *
     * @var string
     */
    public $partnerNodeCode;

    /**
     * Показывать ли отмененные операции.
     *
     * @var boolean
     */
    public $cancelled = false;

    /**
     * Массив с типом операций, которые должны попасть в список операций
     *
     * @var string[]
     */
    public $types;

    /**
     * Порядок сортировки по дате операции. ['ASC', 'DESC']
     *
     * @var string
     */
    public $order = 'DESC';

    /**
     * Дополнителная информация
     *
     * @var string
     */
    public $additionalInfo;

    /**
     * Тип продукта (карты): ['BONUS', 'DISCOUNT', 'GIFT']
     *
     * @var
     */
    public $productKinds;
}