<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class GiftProduct extends Model
{
    /**
     * Идентификатор продукта
     *
     * @var integer
     */
    public $id;

    /**
     * Название продукта
     *
     * @var string
     */
    public $name;

    /**
     * Код продукта
     *
     * @var string
     */
    public $code;

    /**
     * Тип продукта: [POINTS, PURCHASES]
     *
     * @var string
     */
    public $type;

    /**
     * Тип счёта карты (баланса). [BONUS, DISCOUNT, GIFT]
     * 
     * BONUS - бонусная карта,
     * DISCOUNT - дисконтная (скидочная) карта,
     * GIFT - подарочная карта
     *
     * @var string
     */
    public $kind;

    /**
     * Цена
     *
     * @var integer
     */
    public $price;

    /**
     * Код дизайна продукта;
     *
     * @var string
     */
    public $cardDesignCode;

    /**
     * Дизайн карты
     *
     * @var CardDesign
     */
    public $cardDesign;

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
     * @return GiftProduct
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return GiftProduct
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return GiftProduct
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return GiftProduct
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return GiftProduct
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     *
     * @return GiftProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardDesignCode()
    {
        return $this->cardDesignCode;
    }

    /**
     * @param string $cardDesignCode
     *
     * @return GiftProduct
     */
    public function setCardDesignCode($cardDesignCode)
    {
        $this->cardDesignCode = $cardDesignCode;

        return $this;
    }

    /**
     * @return CardDesign
     */
    public function getCardDesign()
    {
        return $this->cardDesign;
    }

    /**
     * @param CardDesign $cardDesign
     *
     * @return GiftProduct
     */
    public function setCardDesign($cardDesign)
    {
        $this->cardDesign = $cardDesign;

        return $this;
    }
}