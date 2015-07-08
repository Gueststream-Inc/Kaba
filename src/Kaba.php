<?php

namespace CodeJet;

class Kaba
{
    private $api_url = 'https://www.kaba-ecode.com/KWWS_WS/KWWSService.asmx?wsdl';
    private $username;
    private $password;

    /**
     * Kaba Class Construct
     */
    public function __construct($username, $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
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
}
