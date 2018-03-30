<?php

namespace cardspro\common\models;

use cardspro\components\Model;

class CardIdentifier extends Model
{
    /**
     * Идентификатор карты: 19-значный баркод (номер) карты. Состоит из 19 цифр.
     *
     * @var string
     */
    public $barcode;

    /**
     * Идентификатор карты: 20-и символьный идентификатор карты (хеш)
     *
     * @var string
     */
    public $hash;

    /**
     * Идентификатор карты: информация с магнитной полосы карты (содержит номер карты и пин код).
     *
     * @var string
     */
    public $magneticTrackIdentifier;

    /**
     * Проверочный код (пин-код). ПИН-код указывается при списании, если это предусмотрено настройками продукта.
     *
     * @var string
     */
    public $pin;

    /**
     * Внешний (партнёрский) идентификатор карты - номер карты в формате партнёра. Например, короткий номер карты.
     *
     * @var string
     */
    public $externalId;

    /**
     * Номер телефона клиента в формате +7ХХХХХХХХХХ. Предназначен для получения информации о карте (метод card/info).
     *
     * @var string
     */
    public $phone;

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
     * @return CardIdentifier
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return CardIdentifier
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return string
     */
    public function getMagneticTrackIdentifier()
    {
        return $this->magneticTrackIdentifier;
    }

    /**
     * @param string $magneticTrackIdentifier
     *
     * @return CardIdentifier
     */
    public function setMagneticTrackIdentifier($magneticTrackIdentifier)
    {
        $this->magneticTrackIdentifier = $magneticTrackIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param string $pin
     *
     * @return CardIdentifier
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

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
     * @return CardIdentifier
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return CardIdentifier
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

}