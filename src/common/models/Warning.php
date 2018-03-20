<?php

namespace cardspro\common\models;

class Warning
{
    /**
     * Предупреждение
     *
     * @var string
     */
    public $warningMessage;

    /**
     * @return string
     */
    public function getWarningMessage()
    {
        return $this->warningMessage;
    }
}