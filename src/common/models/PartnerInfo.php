<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Информация о запросе партнёра
 */
class PartnerInfo extends Model
{
    /**
     * Уникальное ID от партнера, генерирующееся на его стороне, для идентификации запроса и ответа на него.
     * 
     * @var string
     */
    public $requestId;
    
    /**
     * Код точки партнера
     */
    public $partnerCode;
    
    /**
     * Дата и время формирования запроса.
     * 
     * @var string
     * @example "2017-12-04T08:48:45.307Z"
     */
    public $requestDate;
    
    /**
     * Id заказа. 
     * Параметр можно использовать, например, для передачи номера заказа, в рамках которого совершается данный запрос.
     * 
     * @var string
     */
    public $orderId;
    
    /**
     * Идентификатор пользователя. 
     * Например, может использоваться для идентификации кассира/пользователя, который инициировал запрос.
     * 
     * @var string
     */
    public $userIdentifier;

    /**
     * Единица измерения (валюта). 
     * Возможные значения:
     * RUB - рубли
     * KOP - копейки
     * BB - бонусные баллы
     * BK - баллы-копейки
     * 
     * @var string
     */
    public $currency;

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     *
     * @return PartnerInfo
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * @param mixed $partnerCode
     *
     * @return PartnerInfo
     */
    public function setPartnerCode($partnerCode)
    {
        $this->partnerCode = $partnerCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @param string $requestDate
     *
     * @return PartnerInfo
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     *
     * @return PartnerInfo
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @param string $userIdentifier
     *
     * @return PartnerInfo
     */
    public function setUserIdentifier($userIdentifier)
    {
        $this->userIdentifier = $userIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return PartnerInfo
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }
}