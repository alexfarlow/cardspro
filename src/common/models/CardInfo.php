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

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param string $additionalInfo
     *
     * @return CardInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return CardInfo
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return CardBalance[]
     */
    public function getBalances()
    {
        return $this->balances;
    }

    /**
     * @param CardBalance[] $balances
     *
     * @return CardInfo
     */
    public function setBalances($balances)
    {
        $this->balances = $balances;

        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     *
     * @return CardInfo
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return CardDesign
     */
    public function getCardDesign()
    {
        return $this->cardDesign;
    }

    /**
     * @param CardDesign $cardDesign
     *
     * @return CardInfo
     */
    public function setCardDesign($cardDesign)
    {
        $this->cardDesign = $cardDesign;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     *
     * @return CardInfo
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     *
     * @return CardInfo
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;

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
     * @return CardInfo
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getOsmiLink()
    {
        return $this->osmiLink;
    }

    /**
     * @param string $osmiLink
     *
     * @return CardInfo
     */
    public function setOsmiLink($osmiLink)
    {
        $this->osmiLink = $osmiLink;

        return $this;
    }
}