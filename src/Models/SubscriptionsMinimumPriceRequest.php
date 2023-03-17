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
class SubscriptionsMinimumPriceRequest implements JsonSerializable
{
    /**
     * Valor mínimo da assinatura
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $minimumPrice Initialization value for $this->minimumPrice
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->minimumPrice = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['minimum_price'] = $this->minimumPrice;

        return $json;
    }
}
