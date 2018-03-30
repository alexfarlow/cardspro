<?php

namespace cardspro\common\models;

/**
 * Class BaseResponse
 *
 * @package cardspro\common\models
 */
class BaseResponse
{
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    private $cardIdentifier;

    /**
     * Блок с информацией о карте
     *
     * @var CardInfo
     */
    private $cardInfo;

    /**
     * Блок с информацией о скидке
     *
     * @var DiscountOrder
     */
    private $discountOrder;

    /**
     * Блок с информацией об ошибках
     *
     * @var ErrorMessage[]
     */
    private $errorMessages;

    /**
     * Информационное сообщение. Например, может использоваться для печати в чеке.
     *
     * @var string
     */
    private $message;

    /**
     * Информация об операции
     *
     * @var Operation
     */
    private $operation;

    /**
     * @var Operation[]
     */
    private $operations;

    /**
     * Идентификатор операции
     *
     * @var integer
     */
    private $operationId;

    /**
     * Информация о чеке
     *
     * @var PurchaseOrder
     */
    private $order;

    /**
     * Уникальный идентификатор от партнера, генерирующийся на его стороне (необходим для идентификации запроса и ответа)
     *
     * @var string
     */
    private $requestId;

    /**
     * Код партнёра
     *
     * @var string
     */
    private $partnerCode;

    /**
     * Информация о возвращаемых товарах
     *
     * @var PurchaseOrder
     */
    private $reversedPurchaseOrder;

    /**
     * @var CardInfo[]
     */
    private $userCard;

    /**
     * @return CardIdentifier
     */
    public function getCardIdentifier()
    {
        return $this->cardIdentifier;
    }

    /**
     * @return CardInfo
     */
    public function getCardInfo()
    {
        return $this->cardInfo;
    }

    /**
     * @return DiscountOrder
     */
    public function getDiscountOrder()
    {
        return $this->discountOrder;
    }

    /**
     * @return ErrorMessage[]
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @return int
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * @return Operation[]
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @return PurchaseOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @return PurchaseOrder
     */
    public function getReversedPurchaseOrder()
    {
        return $this->reversedPurchaseOrder;
    }

    /**
     * @return CardInfo[]
     */
    public function getUserCard()
    {
        return $this->userCard;
    }
}