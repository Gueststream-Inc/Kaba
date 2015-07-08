<?php
/**
 * Created by PhpStorm.
 * User: houghtelin
 * Date: 7/8/15
 * Time: 2:51 PM
 */

namespace CodeJet\Kaba;


class ActionCodes
{
    const NEW_CODE = 0;
    const CONFIRM_LASTCODE_WARN = 1;
    const CONFIRM_HIGHER_CODE_SEQ = 2;
    const CONFIRM_OVERRIDE_CUR_STAY = 3;
    const CONFIRM_NEW_STAY_CANCEL_OLD_STAY = 4;
    const CONFIRM_RESERVATION = 5;
    const CONFIRM_WARNING_OVERRIDE_EXISTING_STAY = 6;
    const CONFIRM_DELETE_DOOR = 7;
    const CANCEL = 8;
    const NO_STRANSTYPE = 9;
}