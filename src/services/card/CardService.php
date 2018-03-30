<?php

namespace cardspro\services\card;

use cardspro\common\models\CardIdentifier;
use cardspro\common\models\CardTopUpRequest;
use cardspro\common\models\PurchaseRequest;
use cardspro\common\models\UserForm;
use cardspro\common\models\WriteOffRequest;
use cardspro\services\BaseService;
use cardspro\common\models\PartnerInfo;
use cardspro\common\models\CardActivateRequest;

class CardService extends BaseService
{
    const SERVICE = 'Card';
    
    protected function getName()
    {
        return strtolower(self::SERVICE);
    }

    public function getService()
    {
        return self::SERVICE;
    }

    /**
     * метод предназначен для активации карты.
     *
     * @param PartnerInfo         $partnerInfo
     * @param CardActivateRequest $cardActivateRequest
     *
     * @return object
     */
    public function activate(PartnerInfo $partnerInfo, CardActivateRequest $cardActivateRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'cardActivateRequest' => $cardActivateRequest
        ];
                
        return parent::doPost('activate', $params);
    }

    /**
     * @todo modify this method
     * @param array $arr
     */
    public function batch(Array $arr)
    {

    }

    /**
     * Вычисление максимально возможной суммы списания/скидки.
     *
     * @param PartnerInfo     $partnerInfo
     * @param PurchaseRequest $purchaseRequest
     *
     * @return mixed
     */
    public function calculateDiscount(PartnerInfo $partnerInfo, PurchaseRequest $purchaseRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'purchaseRequest' => $purchaseRequest,
        ];

        return parent::doPost('calculate/discount', $params);
    }

    /**
     * Вычисление предварительной суммы начисления по покупке (переданному чеку).
     * При вызове данного метода начисление не происходит, происходит лишь расчёт суммы начисления.
     *
     * @param PartnerInfo     $partnerInfo
     * @param PurchaseRequest $purchaseRequest
     *
     * @return mixed
     */
    public function calculateEarning(PartnerInfo $partnerInfo, PurchaseRequest $purchaseRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'purchaseRequest' => $purchaseRequest,
        ];

        return parent::doPost('calculate/earning', $params);
    }

    /**
     * Изменение статуса продукта (баланса/счёта) карты
     *
     * @param PartnerInfo         $partnerInfo
     * @param CardActivateRequest $cardChangeStatusRequest
     *
     * @return mixed
     */
    public function change_status(PartnerInfo $partnerInfo, CardActivateRequest $cardChangeStatusRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'cardChangeStatusRequest' => $cardChangeStatusRequest,
        ];

        return parent::doPost('change_status', $params);
    }

    /**
     * @param PartnerInfo    $partnerInfo
     * @param CardIdentifier $cardIdentifier
     * @param string|null    $additionalInfo
     * @param bool           $withoutMarkedBonuses
     *
     * @return mixed
     */
    public function info(PartnerInfo $partnerInfo, CardIdentifier $cardIdentifier, $additionalInfo = null, $withoutMarkedBonuses = false)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'cardIdentifier' => $cardIdentifier,
            'additionalInfo' => $additionalInfo,
            'withoutMarkedBonuses' => $withoutMarkedBonuses,
        ];

        return parent::doPost('info', $params);
    }

    /**
     * Выдача и привязка карт.
     * метод предназначен для выдачи карты или для привязки карт к одному балансу.
     * В зависимости от настроек партнера на процессинге после выдачи карты может
     * произойти активация карты с указанными данными клиента.
     *
     * @param PartnerInfo         $partnerInfo
     * @param UserForm            $user
     * @param string              $productCode
     * @param string|null         $identCode
     * @param string|null         $designCode
     * @param string|null         $originalBarcode
     * @param CardIdentifier|null $originalCardIdentifier
     * @param string|null         $issueCardBarcode
     * @param CardIdentifier|null $issueCardIdentifier
     * @param bool                $offline
     * @param string|null         $additionalInfo
     *
     * @return mixed
     */
    public function issue(
        PartnerInfo $partnerInfo,
        UserForm $user,
        $productCode,
        $identCode = null,
        $designCode = null,
        $originalBarcode = null,
        CardIdentifier	$originalCardIdentifier = null,
        $issueCardBarcode = null,
        CardIdentifier	$issueCardIdentifier = null,
        $offline = false,
        $additionalInfo = null
    )
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'userForm' => $user,
            'productCode' => $productCode,
            'identCode' => $identCode,
            'designCode' => $designCode,
            'originalBarcode' => $originalBarcode,
            'originalCardIdentifier' => $originalCardIdentifier,
            'issueCardBarcode' => $issueCardBarcode,
            'issueCardIdentifier' => $issueCardIdentifier,
            'offline' => $offline,
            'additionalInfo' => $additionalInfo,
        ];

        return parent::doPost('issue', $params);
    }

    /**
     * Списание с карты.
     * метод вызывается при списании средств с карты.
     *
     * @param PartnerInfo     $partnerInfo
     * @param WriteOffRequest $writeOffRequest
     *
     * @return mixed
     */
    public function write_off(PartnerInfo $partnerInfo, WriteOffRequest $writeOffRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'writeOffRequest' => $writeOffRequest,
        ];

        return parent::doPost('issue', $params());
    }

    /**
     * Передача чека (информации о покупке) на процессинг. Ведение учёта покупок.
     *
     * @param PartnerInfo     $partnerInfo
     * @param PurchaseRequest $purchaseRequest
     *
     * @return mixed
     */
    public function purchase(PartnerInfo $partnerInfo, PurchaseRequest $purchaseRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'purchaseRequest' => $purchaseRequest,
        ];

        return parent::doPost('purchase', $params);
    }

    /**
     * Поиск карт.
     * Назначение метода: метод предназначен для поиска карт по номеру телефона клиента (держателя карты).
     *
     * @param PartnerInfo $partnerInfo      Информация о запросе партнёра
     * @param UserForm    $userForm         Блок с информацией о клиенте, где указывается номер телефона в формате +7ХХХХХХХХХХ
     * @param string|null $additionalInfo   Дополнительная информация
     *
     * @return mixed
     */
    public function search(PartnerInfo $partnerInfo, UserForm $userForm, $additionalInfo = null)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'userForm' => $userForm,
            'additionalInfo' => $additionalInfo,
        ];

        return parent::doPost('purchase', $params);
    }

    /**
     * Пополнение карты.
     *
     * @param PartnerInfo      $partnerInfo         Информация о запросе партнёра
     * @param CardTopUpRequest $cardTopUpRequest    Параметры списания
     *
     * @return mixed
     */
    public function top_up(PartnerInfo $partnerInfo, CardTopUpRequest $cardTopUpRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'cardTopUpRequest' => $cardTopUpRequest,
        ];
        return parent::doPost('top_up', $params);
    }
    

}