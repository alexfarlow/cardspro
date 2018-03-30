<?php

namespace cardspro\common\models;

class Warning
{
    /**
     * Предупреждение
     *
     * @var string
     */
    private $warningMessage;

    /**
     * @return string
     */
    public function getWarningMessage()
    {
        return $this->warningMessage;
    }
}