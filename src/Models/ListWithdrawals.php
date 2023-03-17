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
class ListWithdrawals implements JsonSerializable
{
    /**
     * The Increments response
     * @required
     * @var \MundiAPILib\Models\GetWithdrawResponse[] $data public property
     */
    public $data;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Paging $paging public property
     */
    public $paging;

    /**
     * Constructor to set initial or default values of member properties
     * @param array  $data   Initialization value for $this->data
     * @param Paging $paging Initialization value for $this->paging
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->data   = func_get_arg(0);
            $this->paging = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['data']   = $this->data;
        $json['paging'] = $this->paging;

        return $json;
    }
}
