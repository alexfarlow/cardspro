<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.03.2018
 * Time: 20:19
 */

namespace cardspro\common\models;


class ErrorMessage
{
    /**
     * Код ошибки.
     *
     * @var integer
     */
    public $errorCode;

    /**
     * Текст сообщения об ошибке.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * Предупреждение
     *
     * @var Warning[]
     */
    public $warnings;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return Warning[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}