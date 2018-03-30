<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class LoyaltyLevelDto extends Model
{
    /**
     * Код уровня
     *
     * @var string
     */
    public $code;

    /**
     * Название уровня (описание)
     *
     * @var string
     */
    public $description;

    /**
     * Код дизайна для уровня
     *
     * @var string
     */
    public $designCode;

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
     * @return LoyaltyLevelDto
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return LoyaltyLevelDto
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDesignCode()
    {
        return $this->designCode;
    }

    /**
     * @param string $designCode
     *
     * @return LoyaltyLevelDto
     */
    public function setDesignCode($designCode)
    {
        $this->designCode = $designCode;

        return $this;
    }
}