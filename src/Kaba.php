<?php

namespace CodeJet;

use DateTime;

class Kaba
{
    use Kaba\Properties;

    /**
     * Kaba Class Construct
     */
    public function __construct($username, $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function requestDoorCode($site_name, $door_name, DateTime $start_date, DateTime $end_date)
    {
        $result = $this->sendGenerateAccessCode($site_name, $door_name, $start_date, $end_date);

        return $result->AccessCode;
    }

    public function sendGenerateAccessCode(
        $site_name,
        $door_name,
        DateTime $start_date,
        DateTime $end_date
    ) {
        $params = [];
        $params['SiteName'] = $site_name;
        $params['DoorName'] = $door_name;
        $params['StartDate'] = $start_date->format("m/d/Y");
        $params['EndDate'] = $end_date->format("m/d/Y");

        $initial_response = $this->sendRequestWithLevel(0, $params);

        if (!$initial_response) {
            return false;
        }

        switch ($initial_response->ReturnStatus) {
            case 1:
                // Confirm last code is being called.
                return $this->sendRequestWithLevel(0, $params, 1);
            case 2:
                // Confirm higher sequence.
                return $this->sendRequestWithLevel(0, $params, 2);
            default:
                // Generating new code.
                return $this->sendRequestWithLevel(0, $params, 5);
        }
    }

    public function sendRequestWithLevel($level, $params, $action_type = null)
    {
        $params['UserLevel'] = $level;

        if ($action_type) {
            $params['ActionType'] = $action_type;
        }

        return $this->call('GenerateAccessCode', $params);
    }

    private function call($call, $params = null)
    {
        $parameters = [];
        $parameters['LoginName'] = $this->getUsername();
        $parameters['Password'] = $this->getPassword();

        if (is_array($params)) {
            $parameters = array_merge($parameters, $params);
        }

        try {
            $response = $this->getClient()->$call($parameters);
        } catch (\SoapFault $soapFault) {
            $this->soapError = $soapFault->getMessage();

            return false;
        }

        return $response;
    }
}
