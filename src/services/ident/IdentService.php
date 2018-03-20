<?php
namespace cardspro\services\ident;

use cardspro\common\models\CardIdentifier;
use cardspro\common\models\PartnerInfo;
use cardspro\services\BaseService;

class IdentService extends BaseService
{
    const SERVICE = 'Ident';

    protected function getName()
    {
        return strtolower(self::SERVICE);
    }

    /**
     * Отправка SMS c OTP-кодом
     *
     * @param PartnerInfo    $partnerInfo       Информация о запросе партнёра
     * @param CardIdentifier $cardIdentifier    Информация о карте (идентификатор карты).
     * @param string|null    $phone             Номер телефона. Формат: +7ХХХХХХХХХХ.
     * @param string|null    $operationType     Тип операции [ACTIVATION | WRITE_OFF | PURCHASE ]
     * @param string|null    $productCode       Код продукта
     * @param string|null    $additionalInfo    Дополнительные параметры
     *
     * @return mixed
     */
    public function send(
        PartnerInfo $partnerInfo,
        CardIdentifier $cardIdentifier,
        $phone = null,
        $operationType = null,
        $productCode = null,
        $additionalInfo = null
        )
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'cardIdentifier' => $cardIdentifier,
            'phone' => $phone,
            'operationType' => $operationType,
            'productCode' => $productCode,
            'additionalInfo' => $additionalInfo
        ];
        $params = array_filter($params);

        return parent::doPost('send', $params);
    }

    /**
     * Проверка OTP-кода.
     * метод предназначен для проверки OTP-кода, отправленного в SMS на мобильный номер телефона клиента
     *
     * @param PartnerInfo $partnerInfo      Информация о запросе партнёра
     * @param string      $phone            Номер телефона. Формат: +7ХХХХХХХХХХ
     * @param integer     $identCode        Код идентификации (код подтверждения из СМС)
     * @param string|null $additionalInfo   Дополнительные параметры
     *
     * @return mixed
     */
    public function check(PartnerInfo $partnerInfo, $phone, $identCode, $additionalInfo = null)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'phone' => $phone,
            'identCode' => $identCode,
            'additionalInfo' => $additionalInfo
        ];
        $params = array_filter($params);

        return parent::doPost('check', $params);
    }
}