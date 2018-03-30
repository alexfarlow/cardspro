<?php

namespace cardspro\common\models;

use cardspro\components\Model;

/**
 * Параметры запрашиваемых операций
 *
 * Class OperationsRequest
 *
 * @package cardspro\common\models
 */
class OperationsRequest extends Model
{
    /**
     * Информация о передаваемом идентификаторе карты
     *
     * @var CardIdentifier
     */
    private $cardIdentifier;

    /**
     * Начальная дата (включительно)
     *
     * @var string
     */
    private $dateFrom;

    /**
     * Конечная дата (включительно)
     *
     * @var string
     */
    private $dateTo;


    /**
     * Количество выводимых страниц и операций	-
     *
     * @var Pageable
     */
    private $pageable;

    /**
     * Точка продаж	Обязателен, если не указан какой-либо из идентификаторов карт
     *
     * @var string
     */
    private $partnerNodeCode;

    /**
     * Показывать ли отмененные операции.
     *
     * @var boolean
     */
    private $cancelled = false;

    /**
     * Массив с типом операций, которые должны попасть в список операций
     *
     * @var string[]
     */
    private $types;

    /**
     * Порядок сортировки по дате операции. ['ASC', 'DESC']
     *
     * @var string
     */
    private $order = 'DESC';

    /**
     * Дополнителная информация
     *
     * @var string
     */
    private $additionalInfo;

    /**
     * Тип продукта (карты): ['BONUS', 'DISCOUNT', 'GIFT']
     *
     * @var
     */
    private $productKinds;

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
     * @return OperationsRequest
     */
    public function setCardIdentifier($cardIdentifier)
    {
        $this->cardIdentifier = $cardIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     *
     * @return OperationsRequest
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param string $dateTo
     *
     * @return OperationsRequest
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * @return Pageable
     */
    public function getPageable()
    {
        return $this->pageable;
    }

    /**
     * @param Pageable $pageable
     *
     * @return OperationsRequest
     */
    public function setPageable($pageable)
    {
        $this->pageable = $pageable;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerNodeCode()
    {
        return $this->partnerNodeCode;
    }

    /**
     * @param string $partnerNodeCode
     *
     * @return OperationsRequest
     */
    public function setPartnerNodeCode($partnerNodeCode)
    {
        $this->partnerNodeCode = $partnerNodeCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param bool $cancelled
     *
     * @return OperationsRequest
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param string[] $types
     *
     * @return OperationsRequest
     */
    public function setTypes($types)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     *
     * @return OperationsRequest
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

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
     * @return OperationsRequest
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductKinds()
    {
        return $this->productKinds;
    }

    /**
     * @param mixed $productKinds
     *
     * @return OperationsRequest
     */
    public function setProductKinds($productKinds)
    {
        $this->productKinds = $productKinds;

        return $this;
    }
}