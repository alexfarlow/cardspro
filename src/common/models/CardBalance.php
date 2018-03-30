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
    private $activatedAt;
    
    
    /**
     * Дата истечения срока действия счёта карты
     *
     * @var string
     */
    private $expireDate;
    
    
    /**
     * Дизайн карты для определенного счёта
     *
     * @var CardDesign
     */
    private $design;
    
    
    /**
     * Сумма всех начисленных бонусов
     *
     * @var integer
     */
    private $earnedAmount;
    
    
    /**
     * Сумма бонусов, ожидающих начисления (захолдированные).
     *
     * @var integer
     */
    private $holdPointsAmount;
    
    
    /**
     * Параметр, определяющий нужно ли запрашивать PIN-код при списании
     *
     * @var boolean
     */
    private $pinExists;
    
    
    /**
     * Доступный баланс
     *
     * @var integer
     */
    private $pointsAmount;
    
    
    /**
     * Идентификатор продукта
     *
     * @var integer
     */
    private $productId;
    
    
    /**
     * Код продукта
     *
     * @var string
     */
    private $productCode;
    
    
    /**
     * Название продукта
     *
     * @var string
     */
    private $productName;
    
    
    /**
     * Тип продукта (баллы, проходы): [POINTS, PURCHASES]
     *
     * @var string
     */
    private $productType;
    
    
    /**
     * Код дизайна продукта
     *
     * @var string
     */
    private $productDesignCode;
    
    
    /**
     * Количество оставшихся (доступных) списаний/услуг
     * (значение уменьшается после каждого списания с карты)
     *
     * @var integer
     */
    private $purchaseCount;
    
    
    /**
     * Сумма покупок
     *
     * @var integer
     */
    private $purchaseAmount;
    
    
    /**
     * Статус счёта карты
     *
     * @var string
     */
    private $status;
    
    
    /**
     * Код статуса счёта карты: [HOLD, ACTIVE, DISABLED, LOCKED]
     *
     * @var string
     */
    private $statusCode;
    
    
    /**
     * Количество оставшихся пополнений карты (значение уменьшается после каждого пополнения)
     *
     * @var integer
     */
    private $topUpCount;
    
    
    /**
     * Ссылка на описание карты.
     *
     * @var string
     */
    private $descriptionUrl;
    
    
    /**
     * Тип счёта карты (баланса). [BONUS, DISCOUNT, GIFT]
     *
     * BONUS - бонусная карта,
     * DISCOUNT - дисконтная (скидочная) карта,
     * GIFT - подарочная карта
     *
     * @var string
     */
    private $kind;
    
    
    /**
     * Информация о уровне лояльности (ранге) карты
     *
     * @var LoyaltyLevelDto
     */
    private $loyaltyLevel;
    
    
    /**
     * Блок с информацией о подарках, акционных товарах
     *
     * @var GiftDto[]
     */
    private $gifts;

    /**
     * @return string
     */
    public function getActivatedAt()
    {
        return $this->activatedAt;
    }

    /**
     * @param string $activatedAt
     *
     * @return CardBalance
     */
    public function setActivatedAt($activatedAt)
    {
        $this->activatedAt = $activatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @param string $expireDate
     *
     * @return CardBalance
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * @return CardDesign
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * @param CardDesign $design
     *
     * @return CardBalance
     */
    public function setDesign($design)
    {
        $this->design = $design;

        return $this;
    }

    /**
     * @return int
     */
    public function getEarnedAmount()
    {
        return $this->earnedAmount;
    }

    /**
     * @param int $earnedAmount
     *
     * @return CardBalance
     */
    public function setEarnedAmount($earnedAmount)
    {
        $this->earnedAmount = $earnedAmount;

        return $this;
    }

    /**
     * @return int
     */
    public function getHoldPointsAmount()
    {
        return $this->holdPointsAmount;
    }

    /**
     * @param int $holdPointsAmount
     *
     * @return CardBalance
     */
    public function setHoldPointsAmount($holdPointsAmount)
    {
        $this->holdPointsAmount = $holdPointsAmount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPinExists()
    {
        return $this->pinExists;
    }

    /**
     * @param bool $pinExists
     *
     * @return CardBalance
     */
    public function setPinExists($pinExists)
    {
        $this->pinExists = $pinExists;

        return $this;
    }

    /**
     * @return int
     */
    public function getPointsAmount()
    {
        return $this->pointsAmount;
    }

    /**
     * @param int $pointsAmount
     *
     * @return CardBalance
     */
    public function setPointsAmount($pointsAmount)
    {
        $this->pointsAmount = $pointsAmount;

        return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     *
     * @return CardBalance
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     *
     * @return CardBalance
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     *
     * @return CardBalance
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     *
     * @return CardBalance
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @return string
     */
    public function getProductDesignCode()
    {
        return $this->productDesignCode;
    }

    /**
     * @param string $productDesignCode
     *
     * @return CardBalance
     */
    public function setProductDesignCode($productDesignCode)
    {
        $this->productDesignCode = $productDesignCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseCount()
    {
        return $this->purchaseCount;
    }

    /**
     * @param int $purchaseCount
     *
     * @return CardBalance
     */
    public function setPurchaseCount($purchaseCount)
    {
        $this->purchaseCount = $purchaseCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseAmount()
    {
        return $this->purchaseAmount;
    }

    /**
     * @param int $purchaseAmount
     *
     * @return CardBalance
     */
    public function setPurchaseAmount($purchaseAmount)
    {
        $this->purchaseAmount = $purchaseAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return CardBalance
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     *
     * @return CardBalance
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getTopUpCount()
    {
        return $this->topUpCount;
    }

    /**
     * @param int $topUpCount
     *
     * @return CardBalance
     */
    public function setTopUpCount($topUpCount)
    {
        $this->topUpCount = $topUpCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionUrl()
    {
        return $this->descriptionUrl;
    }

    /**
     * @param string $descriptionUrl
     *
     * @return CardBalance
     */
    public function setDescriptionUrl($descriptionUrl)
    {
        $this->descriptionUrl = $descriptionUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return CardBalance
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return LoyaltyLevelDto
     */
    public function getLoyaltyLevel()
    {
        return $this->loyaltyLevel;
    }

    /**
     * @param LoyaltyLevelDto $loyaltyLevel
     *
     * @return CardBalance
     */
    public function setLoyaltyLevel($loyaltyLevel)
    {
        $this->loyaltyLevel = $loyaltyLevel;

        return $this;
    }

    /**
     * @return GiftDto[]
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * @param GiftDto[] $gifts
     *
     * @return CardBalance
     */
    public function setGifts($gifts)
    {
        $this->gifts = $gifts;

        return $this;
    }

}
