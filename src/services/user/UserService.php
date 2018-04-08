<?php

namespace cardspro\services\user;

use cardspro\common\models\BaseResponse;
use cardspro\common\models\PartnerInfo;
use cardspro\common\models\RestorePasswordRequest;
use cardspro\common\models\UpdateUserInfoRequest;
use cardspro\exceptions\ApiNullException;
use cardspro\services\BaseService;

class UserService extends BaseService
{
    const SERVICE = 'User';

    public $Ids;

    public $Types;

    public $States;

    public $Statuses;

    public $StatusesPayment;

    /**
     * @return string
     */
    protected function getName()
    {
        return strtolower(self::SERVICE);
    }


    /**
     * Изменение анкетных данных клиента.
     *
     * @param PartnerInfo           $partnerInfo
     * @param UpdateUserInfoRequest $request
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    public function infoChange(PartnerInfo $partnerInfo, UpdateUserInfoRequest $request)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'request' => $request,
        ];

        return parent::doPost('info/change', $params);
    }

    /**
     * Восстановление пароля от личного кабинета клиента.
     *
     * @param PartnerInfo            $partnerInfo
     * @param RestorePasswordRequest $restorePasswordRequest
     *
     * @return BaseResponse
     * @throws \JsonMapper_Exception
     * @throws ApiNullException
     */
    public function passwordRestore(PartnerInfo $partnerInfo, RestorePasswordRequest $restorePasswordRequest)
    {
        $params = [
            'partnerInfo' => $partnerInfo,
            'restorePasswordRequest' => $restorePasswordRequest,
        ];

        return parent::doPost('password/restore', $params);
    }
}