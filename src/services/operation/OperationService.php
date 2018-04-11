<?php

namespace cardspro\services\operation;

use cardspro\common\models\BaseResponse;
use cardspro\common\models\CancelRequest;
use cardspro\common\models\ExpandedOperationsRequest;
use cardspro\common\models\OperationsRequest;
use cardspro\common\models\PartnerInfo;
use cardspro\common\models\RefundRequest;
use cardspro\exceptions\ApiNullException;
use cardspro\services\BaseService;

class OperationService extends BaseService
{
    const SERVICE = 'Operation';

    protected function getName()
    {
        return strtolower(self::SERVICE);
    }

    /**
     * Отмена операции.
     * Технологическая отмена операции, выполняет отмену всего действия (чека) на всю сумму.
     *
     * @param PartnerInfo   $partnerInfo
     * @param CancelRequest $cancelRequest
     *
     * @return BaseResponse
     * @throws \JsonMapper_Exception
     * @throws ApiNullException
     */
    public function cancel(PartnerInfo $partnerInfo, CancelRequest $cancelRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'cancelRequest' => $cancelRequest
        ];

        return parent::doPost('cancel', $params);
    }

    /**
     * Список операций.
     * Получение списка операций.
     *
     * @param PartnerInfo       $partnerInfo
     * @param OperationsRequest $operationsRequest
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    public function info(PartnerInfo $partnerInfo, OperationsRequest $operationsRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'operationsRequest' => $operationsRequest
        ];

        return parent::doPost('info', $params);
    }

    /**
     * Подробная информация об операции.
     *
     * @param PartnerInfo               $partnerInfo
     * @param ExpandedOperationsRequest $data
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    public function infoExpand(PartnerInfo $partnerInfo, ExpandedOperationsRequest $data)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'data' => $data
        ];

        return parent::doPost('info/expand', $params);
    }

    /**
     * Возврат.
     * Возврат, согласованный клиентом или партнёром (не технологическая отмена), может быть на часть товаров в чеке или на часть суммы списания.
     *
     * @param PartnerInfo   $partnerInfo
     * @param RefundRequest $refundRequest
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    public function refund(PartnerInfo $partnerInfo, RefundRequest $refundRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'refundRequest' => $refundRequest
        ];

        return parent::doPost('refund', $params);
    }
}