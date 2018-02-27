<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Response object for getting an invoice item
 */
class GetInvoiceItemResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @required
     * @maps pricing_scheme
     * @var \MundiAPILib\Models\GetPricingSchemeResponse $pricingScheme public property
     */
    public $pricingScheme;

    /**
     * @todo Write general description for this property
     * @required
     * @maps price_bracket
     * @var \MundiAPILib\Models\GetPriceBracketResponse $priceBracket public property
     */
    public $priceBracket;

    /**
     * Subscription Item Id
     * @required
     * @maps subscription_item_id
     * @var string $subscriptionItemId public property
     */
    public $subscriptionItemId;

    /**
     * @todo Write general description for this property
     * @var integer|null $quantity public property
     */
    public $quantity;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer                  $amount             Initialization value for $this->amount
     * @param string                   $description        Initialization value for $this->description
     * @param GetPricingSchemeResponse $pricingScheme      Initialization value for $this->pricingScheme
     * @param GetPriceBracketResponse  $priceBracket       Initialization value for $this->priceBracket
     * @param string                   $subscriptionItemId Initialization value for $this->subscriptionItemId
     * @param integer                  $quantity           Initialization value for $this->quantity
     * @param string                   $name               Initialization value for $this->name
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->amount             = func_get_arg(0);
            $this->description        = func_get_arg(1);
            $this->pricingScheme      = func_get_arg(2);
            $this->priceBracket       = func_get_arg(3);
            $this->subscriptionItemId = func_get_arg(4);
            $this->quantity           = func_get_arg(5);
            $this->name               = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']               = $this->amount;
        $json['description']          = $this->description;
        $json['pricing_scheme']       = $this->pricingScheme;
        $json['price_bracket']        = $this->priceBracket;
        $json['subscription_item_id'] = $this->subscriptionItemId;
        $json['quantity']             = $this->quantity;
        $json['name']                 = $this->name;

        return $json;
    }
}
