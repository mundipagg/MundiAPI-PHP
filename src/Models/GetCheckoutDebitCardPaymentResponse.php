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
class GetCheckoutDebitCardPaymentResponse implements JsonSerializable
{
    /**
     * Descrição na fatura
     * @required
     * @maps statement_descriptor
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Authentication $authentication public property
     */
    public $authentication;

    /**
     * Constructor to set initial or default values of member properties
     * @param string         $statementDescriptor Initialization value for $this->statementDescriptor
     * @param Authentication $authentication      Initialization value for $this->authentication
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->statementDescriptor = func_get_arg(0);
            $this->authentication      = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['authentication']       = $this->authentication;

        return $json;
    }
}
