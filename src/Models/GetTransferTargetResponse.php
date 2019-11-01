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
class GetTransferTargetResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps target_id
     * @var string $targetId public property
     */
    public $targetId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $targetId Initialization value for $this->targetId
     * @param string $type     Initialization value for $this->type
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->targetId = func_get_arg(0);
            $this->type     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['target_id'] = $this->targetId;
        $json['type']      = $this->type;

        return $json;
    }
}
