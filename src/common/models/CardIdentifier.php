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
}