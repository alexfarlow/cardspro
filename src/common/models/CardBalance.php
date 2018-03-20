<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class CardBalance extends Model
{
    /**
     * Дата активации счёта (баланса) карты
     *
     * @var string
     */
    public $activatedAt;
    
    
    /**
     * Дата истечения срока действия счёта карты
     *
     * @var string
     */
    public $expireDate;
    
    
    /**
     * Дизайн карты для определенного счёта
     *
     * @var CardDesign
     */
    public $design;
    
    
    /**
     * Сумма всех начисленных бонусов
     *
     * @var integer
     */
    public $earnedAmount;
    
    
    /**
     * Сумма бонусов, ожидающих начисления (захолдированные).
     *
     * @var integer
     */
    public $holdPointsAmount;
    
    
    /**
     * Параметр, определяющий нужно ли запрашивать PIN-код при списании
     *
     * @var boolean
     */
    public $pinExists;
    
    
    /**
     * Доступный баланс
     *
     * @var integer
     */
    public $pointsAmount;
    
    
    /**
     * Идентификатор продукта
     *
     * @var integer
     */
    public $productId;
    
    
    /**
     * Код продукта
     *
     * @var string
     */
    public $productCode;
    
    
    /**
     * Название продукта
     *
     * @var string
     */
    public $productName;
    
    
    /**
     * Тип продукта (баллы, проходы): [POINTS, PURCHASES]
     *
     * @var string
     */
    public $productType;
    
    
    /**
     * Код дизайна продукта
     *
     * @var string
     */
    public $productDesignCode;
    
    
    /**
     * Количество оставшихся (доступных) списаний/услуг
     * (значение уменьшается после каждого списания с карты)
     *
     * @var integer
     */
    public $purchaseCount;
    
    
    /**
     * Сумма покупок
     *
     * @var integer
     */
    public $purchaseAmount;
    
    
    /**
     * Статус счёта карты
     *
     * @var string
     */
    public $status;
    
    
    /**
     * Код статуса счёта карты: [HOLD, ACTIVE, DISABLED, LOCKED]
     *
     * @var string
     */
    public $statusCode;
    
    
    /**
     * Количество оставшихся пополнений карты (значение уменьшается после каждого пополнения)
     *
     * @var integer
     */
    public $topUpCount;
    
    
    /**
     * Ссылка на описание карты.
     *
     * @var string
     */
    public $descriptionUrl;
    
    
    /**
     * Тип счёта карты (баланса). [BONUS, DISCOUNT, GIFT]
     *
     * BONUS - бонусная карта,
     * DISCOUNT - дисконтная (скидочная) карта,
     * GIFT - подарочная карта
     *
     * @var string
     */
    public $kind;
    
    
    /**
     * Информация о уровне лояльности (ранге) карты
     *
     * @var LoyaltyLevelDto
     */
    public $loyaltyLevel;
    
    
    /**
     * Блок с информацией о подарках, акционных товарах
     *
     * @var GiftDto[]
     */
    public $gifts;
}
