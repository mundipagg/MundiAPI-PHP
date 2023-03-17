<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *The settings for creating a voucher payment
 */
class CreateVoucherPaymentRequest implements JsonSerializable
{
    /**
     * The text that will be shown on the voucher's statement
     * @maps statement_descriptor
     * @var string|null $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Card id
     * @maps card_id
     * @var string|null $cardId public property
     */
    public $cardId;

    /**
     * Card token
     * @maps card_token
     * @var string|null $cardToken public property
     */
    public $cardToken;

    /**
     * @todo Write general description for this property
     * @maps Card
     * @var \MundiAPILib\Models\Card1|null $card public property
     */
    public $card;

    /**
     * Defines whether the card has been used one or more times.
     * @maps recurrency_cycle
     * @var string|null $recurrencyCycle public property
     */
    public $recurrencyCycle;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $statementDescriptor Initialization value for $this->statementDescriptor
     * @param string $cardId              Initialization value for $this->cardId
     * @param string $cardToken           Initialization value for $this->cardToken
     * @param Card1  $card                Initialization value for $this->card
     * @param string $recurrencyCycle     Initialization value for $this->recurrencyCycle
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->statementDescriptor = func_get_arg(0);
            $this->cardId              = func_get_arg(1);
            $this->cardToken           = func_get_arg(2);
            $this->card                = func_get_arg(3);
            $this->recurrencyCycle     = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['card_id']              = $this->cardId;
        $json['card_token']           = $this->cardToken;
        $json['Card']                 = $this->card;
        $json['recurrency_cycle']     = $this->recurrencyCycle;

        return $json;
    }
}
