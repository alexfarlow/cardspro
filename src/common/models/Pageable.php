<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class Pageable extends Model
{
    /**
     * Номер выводимой страницы. Для вывода всех страниц нужно указать 0.
     *
     * @var integer
     */
    private $page;

    /**
     * Количество операций на одной странице
     *
     * @var integer
     */
    private $size;

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return Pageable
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return Pageable
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}