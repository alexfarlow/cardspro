<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class PartnerNode extends Model
{
    /**
     * Идентификатор точки
     *
     * @var integer
     */
    public $id;

    /**
     * Название точки
     *
     * @var string
     */
    public $name;

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
     * @return PartnerNode
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
     * @return PartnerNode
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}