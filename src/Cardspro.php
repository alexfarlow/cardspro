<?php
namespace cardspro;

use cardspro\services\card\CardService;
use cardspro\services\ident\IdentService;
use cardspro\services\operation\OperationService;
use cardspro\services\user\UserService;
use Psr\Log\LoggerAwareTrait;

class Cardspro
{
    use LoggerAwareTrait;

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
     * @var bool
     */
    private $test = false;

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
                ->setTest($this->test)
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass)
                ->setLogger($this->logger);
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
                ->setTest($this->test)
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass)
                ->setLogger($this->logger);
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
                ->setTest($this->test)
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass)
                ->setLogger($this->logger);
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
                ->setTest($this->test)
                ->setSslCert($this->sslCert)
                ->setSslCertPass($this->sslCertPass)
                ->setLogger($this->logger);
        }

        return $this->userService;
    }

    /**
     * @param string $sslCert
     *
     * @return Cardspro
     */
    public function setSslCert($sslCert)
    {
        $this->sslCert = $sslCert;

        return $this;
    }

    /**
     * @param string $sslCertPass
     *
     * @return Cardspro
     */
    public function setSslCertPass($sslCertPass)
    {
        $this->sslCertPass = $sslCertPass;

        return $this;
    }

    /**
     * @param bool $test
     *
     * @return Cardspro
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

}