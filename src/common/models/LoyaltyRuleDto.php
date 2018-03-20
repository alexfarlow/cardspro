<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Информации о правиле
 */
class LoyaltyRuleDto extends Model
{
    
    /**
     * Описание правила/акции
     *
     * @var integer
     */
    public $description;
    
    
    /**
     * Признак действующей акции
     *
     * @var boolean
     */
    public $disable;
    
    
    /**
     * Тип события, инициирующего обработку правила лояльности
     *
     * @var string
     */
    public $eventType;
    
    
    /**
     * Идентификатор акции
     *
     * @var integer
     */
    public $id;
    
    
    /**
     * Тип бонусов ['EARN', 'GIFT', 'EVENT', 'DISCOUNT']
     *
     * @var string
     */
    public $label;


    /**
     * Название акции
     *
     * @var string
     */
    public $name;
    
    
    /**
     * Код партнерской точки, для которой действует правило
     *
     * @var string
     */
    public $partnerNodeCode;
    
    
    /**
     * Код продукта, для которого действует правило
     *
     * @var string
     */
    public $productCode;
    
    
    /**
     * Правило обработки правила (JSON-строка)
     *
     * @var string
     */
    public $rule;
    
    
    /**
     * Тип правила.
     * ['ORDER_PERCENT', 'ACTIVATION_BONUS', 'ON_EVENT_FIX_EARNING', 'FIX_EARNING',
     * 'ON_FILL_USER_INFO', 'ON_CHANGE_LOYALTY_LEVEL', 'GIFT_ON_CHANGE_LEVEL',
     * 'GIFT_ON_COUNT_PURCHASE', 'FIXED_DISCOUNT_PERCENT',
     * 'FIXED_DISCOUNT_PERCENT_BY_RANK', 'GIFT_DISCOUNT']
     *
     * @var string
     */
    public $type;
    
    
    /**
     * Описание правила
     *
     * @var string
     */
    public $typeDescription;
    
    
    /**
     * Начало действия акции
     *
     * @var string
     */
    public $validFrom;
    
    
    /**
     * Конец действия акции
     *
     * @var string
     */
    public $validTo;
}