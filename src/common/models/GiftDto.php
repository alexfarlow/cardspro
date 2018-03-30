<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class GiftDto extends Model
{
    /**
     * Дата, до которой доступен подарок
     *
     * @var string
     */
    private $activeTo;
    
    
    /**
     * Дата начисления подарка
     *
     * @var string
     */
    private $createdAt;
    
    
    /**
     * Блок с информацией о товаре (подарке)
     *
     * @var GoodsDto
     */
    private $goods;
    
    
    /**
     * Идентификатор начисления подарка
     *
     * @var integer
     */
    private $id;

    /**
     * @return string
     */
    public function getActiveTo()
    {
        return $this->activeTo;
    }

    /**
     * @param string $activeTo
     *
     * @return GiftDto
     */
    public function setActiveTo($activeTo)
    {
        $this->activeTo = $activeTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return GiftDto
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return GoodsDto
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param GoodsDto $goods
     *
     * @return GiftDto
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;

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
     * @return GiftDto
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}