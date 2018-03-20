<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Параметры для получения расширенной информации об операции
 *
 * Class ExpandedOperationsRequest
 *
 * @package cardspro\common\models
 */
class ExpandedOperationsRequest extends Model
{
    /**
     * Идентификатор операции
     *
     * @var integer
     */
    public $operationId;

    /**
     * Уникальный идентификатор операции, по которой запрашивается информация
     * (генерируется на стороне партнёра во время запроса)
     *
     * @var string
     */
    public $requestId;

    /**
     * Номер чека. Возвращается последняя операция с данным номером чека в рамках партнёра.
     * Для получения корректной информации об операции номер чека должен быть
     * уникальным в рамках партнёра. Если номер чека не является уникальным,
     * то лучше использовать requestId, а не orderNumber.
     *
     * @var string
     */
    public $orderNumber;

    /**
     * Дополнительные параметры
     *
     * @var string
     */
    public $additionalInfo;
}