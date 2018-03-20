<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class CardInfo extends Model
{
    
    /**
     * Дополнительная информация.
     *
     * @var string
     */
    public $additionalInfo;	

    
    /**
     * Адрес
     *
     * @var string
     */
    public $address;
    
    
    /**
     * Блок с информацией о состоянии счёта (баланса) карты
     * 
     * @var CardBalance[]
     */
    public $balances;
    
    
    /**
     * Баркод карты
     *
     * @var string
     */
    public $barcode;
    
    
    /**
     * Информация о дизайне карты
     *
     * @var CardDesign
     */
    public $cardDesign;
    
    
    /**
     * Короткий номер карты
     *
     * @var string
     */
    public $externalId;
    
    
    /**
     * Название карты
     *
     * @var string
     */
    public $cardName;
    
    
    /**
     * Анкетные данные клиента
     *
     * @var UserForm
     */
    public $user;
    
    
    /**
     * Ссылка до карты OSMI
     *
     * @var string
     */
    public $osmiLink;
}

