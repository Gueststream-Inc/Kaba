<?php
/**
 * Created by PhpStorm.
 * User: houghtelin
 * Date: 7/8/15
 * Time: 2:42 PM
 */

namespace CodeJet\Kaba;


class Exception extends \Exception
{
    const S_NO_ERROR = 0;
    const REQUEST_CONFIRM_LASTCODE_WARN = 1;
    const REQUEST_CONFIRM_HIGHER_CODE_SEQ = 2;
    const ERROR_STARTDATE_EARLIER_THAN_YESTERDAY = 29;
    const ERROR_WRONG_START_DATE_LENGTH = 69;
    const ERROR_ONE_OR_MORE_INVALID_PARAMETER = 500;
    const ERROR_USER_ACTION_NOT_AUTHORIZED = 502;
    const ERROR_ECODE_SERVER_NOT_STARTED = 510;

    public function __construct($code)
    {
        $message = $this->codeToMessage($code);
        parent::__construct($message, $code);
    }

    private function codeToMessage($code)
    {
        switch ($code) {
            default:
                return "Unknown Error";
                break;
        }
    }
}