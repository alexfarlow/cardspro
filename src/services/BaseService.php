<?php

namespace cardspro\services;

use cardspro\common\models\BaseResponse;
use cardspro\exceptions\ApiCurlException;
use cardspro\exceptions\ApiNullException;

abstract class BaseService
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
     * @var bool
     */
    public $test = true;

    /**
     * @var string
     */
    private $apiUrl = 'https://api.cardspro.ru/rest';

    /**
     * @var string
     */
    private $apiUrlTest = 'https://api-test.cardspro.ru/rest';

    /**
     * @var resource
     */
    private $ch;

    /**
     * @var array
     */
    private $http_headers = [
        'Content-Type: application/json; charset=utf-8',
        'Accept-Language: ru',
    ];

    /**
     * @return mixed
     */
    abstract protected function getName();

    /**
     * @param $method
     * @param $path
     * @param $params
     *
     * @throws ApiCurlException
     */
    protected function call($method, $path, $params)
    {
        $path = static::getName().'/'.$path;

        return $this->getResponse($method, $path, $params);
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

    public final function setTest($test)
    {
        $this->test = boolval($test);

        return $this;
    }
    
    
    protected function doGet($path, array $params)
    {        
        return $this->call('get', $path, $params);
    }
    
    protected function doPost($path, array $params)
    {
        return $this->call('post', $path, $params);
    }

    /**
     * @return resource
     */
    private function getCurl()
    {

        if (!$this->ch) {
            $this->ch = curl_init();

            curl_setopt_array(
                $this->ch,
                [
                    CURLOPT_HTTPHEADER     => $this->http_headers,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_POST           => true,
                    CURLOPT_HEADER         => true,
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_SSL_VERIFYHOST => false,
                    CURLOPT_TIMEOUT        => 1200,
                    CURLOPT_SSLCERT        => $this->sslCert,

                    CURLOPT_SSLCERTPASSWD => $this->sslCertPass,
                    CURLOPT_SSLKEYPASSWD  => $this->sslCertPass,

                    CURLOPT_SSLCERTTYPE => "P12",
                ]
            );
        }

        return $this->ch;
    }


    public function getResponse($method, $serviceName, $request)
    {
        $curl = $this->getCurl();

        $request = self::array_filter((array)$request);
        $request = json_encode($request, JSON_UNESCAPED_UNICODE);

        curl_setopt_array($curl, [CURLOPT_URL => ($this->test ? $this->apiUrlTest : $this->apiUrl).'/'.$serviceName,]);

        if ($method == 'post'){
            curl_setopt_array($curl, [CURLOPT_POSTFIELDS => $request,]);
        }

        if (($response = curl_exec($curl)) !== false) {

            $result = $this->parseResponse($response);

        } else {
            throw new ApiCurlException(
                'Curl error: '.curl_error($curl),
                curl_errno($curl)
            );
        }

        return $result;
    }

    private function parseResponse($response)
    {
        $data = json_decode($response, false, 512, JSON_BIGINT_AS_STRING);

        if (!is_object($data)) {
            throw new ApiNullException('Данные не получены');
        }

        $mapper = new \JsonMapper();

        return $mapper->map($data, new BaseResponse());
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
}