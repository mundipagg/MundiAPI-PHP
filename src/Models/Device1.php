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
class Device1 implements JsonSerializable
{
    /**
     * Device's platform
     * @var string|null $platform public property
     */
    public $platform;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $platform Initialization value for $this->platform
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->platform = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['platform'] = $this->platform;

        return $json;
    }
}
