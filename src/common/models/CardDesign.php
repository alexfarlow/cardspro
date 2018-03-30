<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class CardDesign extends Model
{
    /**
     * Код дизайна карты
     *
     * @var string
     */
    public $code;
    
    
    /**
     * Идентификатор дизайна карты
     *
     * @var integer
     */
    public $id;
    
    
    /**
     * Наименование дизайна карты
     *
     * @var string
     */
    public $name;

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
     * @return CardDesign
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return CardDesign
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
     * @return CardDesign
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
