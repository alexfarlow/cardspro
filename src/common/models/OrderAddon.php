<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class OrderAddon extends Model
{
    /**
     * Название дополнительного параметра
     *
     * @var string
     */
    public $name;

    /**
     * Значение дополнительного параметр
     *
     * @var string
     */
    public $value;

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
     * @return OrderAddon
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return OrderAddon
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}