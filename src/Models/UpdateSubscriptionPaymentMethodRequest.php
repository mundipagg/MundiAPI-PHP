<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Request for updating a subscription's payment method
 */
class UpdateSubscriptionPaymentMethodRequest implements JsonSerializable
{
    /**
     * The new payment method
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Card id
     * @required
     * @maps card_id
     * @var string $cardId public property
     */
    public $cardId;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Card1 $card public property
     */
    public $card;

    /**
     * The Card Token
     * @maps card_token
     * @var string|null $cardToken public property
     */
    public $cardToken;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $paymentMethod Initialization value for $this->paymentMethod
     * @param string $cardId        Initialization value for $this->cardId
     * @param Card1  $card          Initialization value for $this->card
     * @param string $cardToken     Initialization value for $this->cardToken
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->paymentMethod = func_get_arg(0);
            $this->cardId        = func_get_arg(1);
            $this->card          = func_get_arg(2);
            $this->cardToken     = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['payment_method'] = $this->paymentMethod;
        $json['card_id']        = $this->cardId;
        $json['card']           = $this->card;
        $json['card_token']     = $this->cardToken;

        return $json;
    }
}
