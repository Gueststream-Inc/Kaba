<?php
/**
 * Created by PhpStorm.
 * User: houghtelin
 * Date: 7/8/15
 * Time: 1:15 PM
 */

namespace CodeJet\Kaba;


trait Properties
{
    private $api_url = 'https://www.kaba-ecode.com/KWWS_WS/KWWSService.asmx?wsdl';
    private $username;
    private $password;

    private $client;
    private $soapError = "";

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSoapError()
    {
        return $this->soapError;
    }

    public function getClient()
    {
        if (!$this->client) {
            $this->client = new \SoapClient($this->getApiUrl(), [
                'trace'       => 1,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'features'    => SOAP_SINGLE_ELEMENT_ARRAYS,
                'cache_wsdl'  => WSDL_CACHE_NONE
            ]);
        }

        return $this->client;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->api_url;
    }

    /**
     * @param string $api_url
     */
    public function setApiUrl($api_url)
    {
        $this->api_url = $api_url;
    }
}