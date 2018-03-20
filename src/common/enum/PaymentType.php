<?php

namespace cardspro\common\enum;

use cardspro\components\Enum;

class PaymentType extends Enum
{
    
    /**
     * Бонусы CardsPro
     */
    const BONUS_CARDSPRO = 'BONUS_CARDSPRO';
    
    
    /**
     * бонусы партнёра
     */
    const BONUS = 'BONUS';
    
    
    /**
     * наличные
     */
    const CASH = 'CASH';
    
    
    /**
     * скидка
     */
    const DISCOUNT = 'DISCOUNT';
    
    
    /**
     * платежная система
     */
    const PAYMENT_SYSTEM = 'PAYMENT_SYSTEM';
    
    
    /**
     * тип оплаты для подарка, начисленного клиенту, 
     * передаётся при списании подарка, который был начислен клиенту по какой-либо акции
     */
    const GIFT  = 'GIFT';
    
    /**
     * иное
     */
    const OTHER = "OTHER" ;
    
    
    /**
     * наценка
     */
    const EXTRA_CHARGE = "EXTRA_CHARGE";
    
}