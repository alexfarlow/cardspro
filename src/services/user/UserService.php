<?php

namespace cardspro\services\user;

use cardspro\common\models\PartnerInfo;
use cardspro\common\models\RestorePasswordRequest;
use cardspro\common\models\UpdateUserInfoRequest;
use cardspro\services\BaseService;

class UserService extends BaseService
{
    public $Ids;

    public $Types;

    public $States;

    public $Statuses;

    public $StatusesPayment;

    protected function getName()
    {
        // TODO: Implement getName() method.
    }


    /**
     * Изменение анкетных данных клиента.
     *
     * @param PartnerInfo           $partnerInfo
     * @param UpdateUserInfoRequest $request
     *
     * @return mixed
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
     * @return mixed
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