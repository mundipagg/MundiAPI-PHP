<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GatewayResponse implements JsonSerializable
{
    /**
     * The error code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * The gateway response errors list
     * @required
     * @var \MundiAPILib\Models\GetGatewayErrorResponse[] $errors public property
     */
    public $errors;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $code   Initialization value for $this->code
     * @param array  $errors Initialization value for $this->errors
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->code   = func_get_arg(0);
            $this->errors = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']   = $this->code;
        $json['errors'] = $this->errors;

        return $json;
    }
}
