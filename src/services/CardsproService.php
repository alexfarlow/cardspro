<?php

namespace cardspro\services;


use cardspro\services\card\CardService;
use cardspro\services\ident\IdentService;
use cardspro\services\operation\OperationService;
use cardspro\services\user\UserService;

class CardsproService
{
    /**
     * @var string
     */
    private $sslCert;

    /**
     * @var string
     */
    private $sslCertPass;

    /**
     * @var CardService
     */
    private $cardService;

    /**
     * @var IdentService
     */
    private $identService;

    /**
     * @var OperationService
     */
    private $operationService;

    /**
     * @var UserService
     */
    private $userService;

    /**
     * @return CardService
     */
    public function getCardService()
    {
        if (empty($this->cardService)){
            $this->cardService = new CardService();
            $this->cardService
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass);
        }
        return $this->cardService;
    }

    /**
     * @return IdentService
     */
    public function getIdentService()
    {
        if (empty($this->identService)){
            $this->identService = new IdentService();
            $this->identService
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass);
        }

        return $this->identService;
    }

    /**
     * @return OperationService
     */
    public function getOperationService()
    {
        if (empty($this->operationService)){
            $this->operationService = new OperationService();
            $this->operationService
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass);
        }

        return $this->operationService;
    }

    /**
     * @return UserService
     */
    public function getUserService()
    {
        if (empty($this->userService)){
            $this->userService = new UserService();
            $this->userService
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass);
        }

        return $this->userService;
    }

    /**
     * @param string $sslCert
     *
     * @return CardsproService
     */
    public function setSslCert($sslCert)
    {
        $this->sslCert = $sslCert;

        return $this;
    }

    /**
     * @param string $sslCertPass
     *
     * @return CardsproService
     */
    public function setSslCertPass($sslCertPass)
    {
        $this->sslCertPass = $sslCertPass;

        return $this;
    }
}