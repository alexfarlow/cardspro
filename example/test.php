<pre><?php
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
use cardspro\services\card\CardService;
use cardspro\common\models\PartnerInfo;
use cardspro\common\models\CardActivateRequest;


$PartnerInfo = new PartnerInfo(['partnerCode' => '123567']);
$PartnerInfo
    ->setRequestId('aaa')
    ->setPartnerCode('bbbnmnm');
//var_dump($PartnerInfo);die;

$CardActivateRequest = new CardActivateRequest();


$CardService = new CardService;
$CardService
    ->setSslCert(__DIR__."/../test-partner.p12")
    ->setSslCertPass('6tiLVGF2ersG');

$r = $CardService->activate($PartnerInfo, $CardActivateRequest);

var_dump($r);