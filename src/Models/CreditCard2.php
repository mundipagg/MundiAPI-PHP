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
class CreditCard2 implements JsonSerializable
{
    /**
     * Card invoice text descriptor
     * @maps statement_descriptor
     * @var string|null $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Payment installment options
     * @var \MundiAPILib\Models\CreateCheckoutCardInstallmentOptionRequest[]|null $installments public property
     */
    public $installments;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\Authentication2|null $authentication public property
     */
    public $authentication;

    /**
     * Authorize and capture?
     * @var bool|null $capture public property
     */
    public $capture;

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $statementDescriptor Initialization value for $this->statementDescriptor
     * @param array           $installments        Initialization value for $this->installments
     * @param Authentication2 $authentication      Initialization value for $this->authentication
     * @param bool            $capture             Initialization value for $this->capture
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->statementDescriptor = func_get_arg(0);
            $this->installments        = func_get_arg(1);
            $this->authentication      = func_get_arg(2);
            $this->capture             = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['installments']         = $this->installments;
        $json['authentication']       = $this->authentication;
        $json['capture']              = $this->capture;

        return $json;
    }
}
