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
class Token implements JsonSerializable
{
    /**
     * The authentication type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @maps apple_pay
     * @var \MundiAPILib\Models\ApplePay|null $applePay public property
     */
    public $applePay;

    /**
     * @todo Write general description for this property
     * @maps google_pay
     * @var \MundiAPILib\Models\GooglePay|null $googlePay public property
     */
    public $googlePay;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\CreateEmvDecryptRequest|null $emv public property
     */
    public $emv;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $type      Initialization value for $this->type
     * @param ApplePay                $applePay  Initialization value for $this->applePay
     * @param GooglePay               $googlePay Initialization value for $this->googlePay
     * @param CreateEmvDecryptRequest $emv       Initialization value for $this->emv
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->type      = func_get_arg(0);
            $this->applePay  = func_get_arg(1);
            $this->googlePay = func_get_arg(2);
            $this->emv       = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']       = $this->type;
        $json['apple_pay']  = $this->applePay;
        $json['google_pay'] = $this->googlePay;
        $json['emv']        = $this->emv;

        return $json;
    }
}
