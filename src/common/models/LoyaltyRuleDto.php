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

    /**
     * @return int
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $description
     *
     * @return LoyaltyRuleDto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisable()
    {
        return $this->disable;
    }

    /**
     * @param bool $disable
     *
     * @return LoyaltyRuleDto
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param string $eventType
     *
     * @return LoyaltyRuleDto
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

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
     * @return LoyaltyRuleDto
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return LoyaltyRuleDto
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return LoyaltyRuleDto
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerNodeCode()
    {
        return $this->partnerNodeCode;
    }

    /**
     * @param string $partnerNodeCode
     *
     * @return LoyaltyRuleDto
     */
    public function setPartnerNodeCode($partnerNodeCode)
    {
        $this->partnerNodeCode = $partnerNodeCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     *
     * @return LoyaltyRuleDto
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * @param string $rule
     *
     * @return LoyaltyRuleDto
     */
    public function setRule($rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return LoyaltyRuleDto
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeDescription()
    {
        return $this->typeDescription;
    }

    /**
     * @param string $typeDescription
     *
     * @return LoyaltyRuleDto
     */
    public function setTypeDescription($typeDescription)
    {
        $this->typeDescription = $typeDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param string $validFrom
     *
     * @return LoyaltyRuleDto
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @param string $validTo
     *
     * @return LoyaltyRuleDto
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }
}