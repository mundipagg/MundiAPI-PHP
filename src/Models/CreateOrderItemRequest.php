<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Request for creating an order item
 */
class CreateOrderItemRequest implements JsonSerializable
{
    /**
     * Amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Quantity
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $amount      Initialization value for $this->amount
     * @param string  $description Initialization value for $this->description
     * @param integer $quantity    Initialization value for $this->quantity
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->amount      = func_get_arg(0);
            $this->description = func_get_arg(1);
            $this->quantity    = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']      = $this->amount;
        $json['description'] = $this->description;
        $json['quantity']    = $this->quantity;

        return $json;
    }
}
