<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class GoodsDto extends Model
{
    /**
     * Артикул товара (подарка)
     *
     * @var string
     */
    private $goodsExternalId;

    /**
     * Внутренний идентификатор товара (подарка)
     *
     * @var integer
     */
    private $Id;

    /**
     * Наименование товара (подарка)
     *
     * @var string
     */
    private $goodsName;

    /**
     * @return string
     */
    public function getGoodsExternalId()
    {
        return $this->goodsExternalId;
    }

    /**
     * @param string $goodsExternalId
     *
     * @return GoodsDto
     */
    public function setGoodsExternalId($goodsExternalId)
    {
        $this->goodsExternalId = $goodsExternalId;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     *
     * @return GoodsDto
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param string $goodsName
     *
     * @return GoodsDto
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;

        return $this;
    }
}