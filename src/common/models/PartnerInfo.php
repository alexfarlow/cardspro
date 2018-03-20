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
}