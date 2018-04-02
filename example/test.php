<?php

/*
 *         $response = '{
  "errorMessages": [
    {
        "errorCodef": 0,
      "errorCode": 0,
      "errorMessage": "string",
      "warnings": [
        {
          "warningMessage": "string"
        }
      ]
    }
  ],
  "message": "string",
  "operationId": 0,
  "requestId": "string",
  "partnerCode": "string"
}';
        return $this->parseResponse($response);
 */
require __DIR__.'/../vendor/autoload.php';
use cardspro\services\CardsproService;
use cardspro\common\models\PartnerInfo;

$cardspro = new CardsproService;

$r = $cardspro
    ->setSslCert('path://to.srt')
    ->setSslCertPass('12344')
    ->getCardService()
    ->activate(new PartnerInfo(['partnerCode' => '123']), new CardActivateRequest());