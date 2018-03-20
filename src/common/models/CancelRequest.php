<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Параметры отмены
 *
 * Class CancelRequest
 *
 * @package cardspro\common\models
 */
class CancelRequest extends Model
{
    
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    public $cardIdentifier;
    
    
    /**
     * Идентификатор отменяемой операции
     *
     * @var integer
     */
    public $operationId;
    
    
    /**
     * Дополнителные параметры
     *
     * @var string
     */
    public $additionalInfo;
}