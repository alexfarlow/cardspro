<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Class CardActivateRequest
 *
 * @package cardspro\common\models
 */
class CardActivateRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     * 
     * @var CardIdentifier
     */
    public $cardIdentifier;
    
    
    /**
     * Код продукта
     * 
     * @var string
     */
    public $productCode;
    
    
    /**
     * Идентификационный код (OTP-код подтверждения из СМС)
     * 
     * @var integer
     */
    public $identCode;
    

    /**
     * Блок с информацией о клиенте (анкетные данные)
     * 
     * @var UserForm
     */
    public $user;
     
    
    /**
     * Цена проданной карты. По умолчанию в копейках.
     * 
     * @var integer
     */
    public $price;
     
    
    /**
     * Цена проданной карты. По умолчанию в копейках.
     * Если true, то активация будет проходить без проверки кода идентификации (из СМС).
     * По умолчанию false. 
     * Возможность использования данного параметра настраивается на процессинге.
     * На телефон клиента будет отправлена СМС со ссылкой, после прохождения по которой произойдет активация карты.
     * 
     * @var boolean
     */
    public $offline;
     
    
    /**
     * При обычной классической оффлайн активации 
     * (отправка токена регистрации на телеофн клиента по СМС и последующая активации через ЛКК), 
     * параметр можно не задавать.
     * Параметр используется только на втором этапе оффлайн активации на кассе или приложении партнёра. 
     * На кассе заполняется блок user и передаётся accepted = true.
     * 
     * @var boolean
     */
    public $accepted;

    /**
     * @return CardIdentifier
     */
    public function getCardIdentifier()
    {
        return $this->cardIdentifier;
    }

    /**
     * @param CardIdentifier $cardIdentifier
     *
     * @return CardActivateRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

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
     * @return CardActivateRequest
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getIdentCode()
    {
        return $this->identCode;
    }

    /**
     * @param int $identCode
     *
     * @return CardActivateRequest
     */
    public function setIdentCode($identCode)
    {
        $this->identCode = $identCode;

        return $this;
    }

    /**
     * @return UserForm
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserForm $user
     *
     * @return CardActivateRequest
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     *
     * @return CardActivateRequest
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return bool
     */
    public function isOffline()
    {
        return $this->offline;
    }

    /**
     * @param bool $offline
     *
     * @return CardActivateRequest
     */
    public function setOffline($offline)
    {
        $this->offline = $offline;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAccepted()
    {
        return $this->accepted;
    }

    /**
     * @param bool $accepted
     *
     * @return CardActivateRequest
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }
}