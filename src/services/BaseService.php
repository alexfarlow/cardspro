<?php
namespace cardspro\services;

use cardspro\common\models\BaseResponse;
use cardspro\exceptions\ApiNullException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Uri;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

abstract class BaseService
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
     * @var bool
     */
    public $test = false;

    /**
     * @var string
     */
    private $apiUrl = 'https://api.cardspro.ru/rest/';

    /**
     * @var string
     */
    private $apiUrlTest = 'https://api-test.cardspro.ru/rest/';

    /**
     * @var array
     */
    private $http_headers = [
        'Content-Type' => 'application/json; charset=utf-8',
        'Accept-Language' => 'ru',
    ];

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Response
     */
    private $response;

    /**
     * @return mixed
     */
    abstract protected function getName();

    /**
     * @param $method
     * @param $path
     * @param $params
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    protected function call($method, $path, $params)
    {
        $path = static::getName().'/'.$path;

        return $this->getData($method, $path, $params);
    }

    /**
     * @param $sslCert
     *
     * @return $this
     */
    public final function setSslCert($sslCert)
    {
        $this->sslCert = $sslCert;

        return $this;
    }

    /**
     * @param $sslCertPass
     *
     * @return $this
     */
    public final function setSslCertPass($sslCertPass)
    {
        $this->sslCertPass = $sslCertPass;

        return $this;
    }

    /**
     * @param $test
     *
     * @return $this
     */
    public final function setTest($test)
    {
        $this->test = boolval($test);

        return $this;
    }

    /**
     * @param       $path
     * @param array $params
     *
     * @return object
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    protected function doGet($path, array $params)
    {        
        return $this->call('get', $path, $params);
    }

    /**
     * @param       $path
     * @param array $params
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    protected function doPost($path, array $params)
    {
        return $this->call('post', $path, $params);
    }

    /**
     * @param $method
     * @param $serviceName
     * @param $requestData
     *
     * @return BaseResponse
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    public function getData($method, $serviceName, $requestData)
    {
        $requestData = self::array_filter((array)$requestData);
        $requestData = json_encode($requestData, JSON_UNESCAPED_UNICODE);
        $requestData = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $requestData);

        $this->request = new Request(
            $method,
            new Uri($this->getUrl().$serviceName ),
            $this->http_headers,
            $requestData
        );

        $client = new Client;
        $this->response = $client->send($this->request, [
            'cert' => [
                $this->sslCert,
                $this->sslCertPass
            ],
            'curl' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSLCERTTYPE => "P12",
                CURLOPT_TIMEOUT => 1200,
            ]
        ]);

        return $this->parseResponse($this->response);
    }

    /**
     * @param Response $response
     *
     * @return BaseResponse|object
     * @throws ApiNullException
     * @throws \JsonMapper_Exception
     */
    private function parseResponse(Response $response)
    {
        $responseData = $response->getBody()->getContents();

        if (empty($responseData)){
            $this->log(LogLevel::CRITICAL, 'response data is empty', ['responseData' => $responseData]);
            throw new ApiNullException('Данные не получены');
        }

        $responseData = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $responseData);
        $json = json_decode($responseData, false, 512, JSON_BIGINT_AS_STRING);

        if (!is_object($json)) {
            $this->log(LogLevel::CRITICAL, 'response data not valid json', $responseData);
            throw new ApiNullException('Данные не получены');
        }

        $this->log(LogLevel::INFO, 'response parse done', ['json' => $json]);
        $mapper = new \JsonMapper();

        return $mapper->map($json, new BaseResponse());
    }


    public static function array_filter(Array $array)
    {

        foreach ($array as $key => $item) {
            is_array($item)
            || is_object($item)
            && $array [$key] = self::array_filter((array) $item);

            if (empty ($array [$key])) {
                unset ($array [$key]);
            }
        }

        return $array;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->test ? $this->apiUrlTest : $this->apiUrl;
    }

    /**
     * @param           $level
     * @param string   $message
     * @param array    $context
     */
    public function log($level, $message, array $context = array())
    {
        if ($this->logger instanceof LoggerInterface){

            $this->logger->{$level}($message, $context);
        }
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}