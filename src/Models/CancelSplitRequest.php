<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Split
 */
class CancelSplitRequest implements JsonSerializable
{
    /**
     * Split type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Amount
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * Recipient id
     * @required
     * @maps recipient_id
     * @var string $recipientId public property
     */
    public $recipientId;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\Options2|null $options public property
     */
    public $options;

    /**
     * Rule id
     * @maps split_rule_id
     * @var string|null $splitRuleId public property
     */
    public $splitRuleId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string   $type        Initialization value for $this->type
     * @param integer  $amount      Initialization value for $this->amount
     * @param string   $recipientId Initialization value for $this->recipientId
     * @param Options2 $options     Initialization value for $this->options
     * @param string   $splitRuleId Initialization value for $this->splitRuleId
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->type        = func_get_arg(0);
            $this->amount      = func_get_arg(1);
            $this->recipientId = func_get_arg(2);
            $this->options     = func_get_arg(3);
            $this->splitRuleId = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['type']          = $this->type;
        $json['amount']        = $this->amount;
        $json['recipient_id']  = $this->recipientId;
        $json['options']       = $this->options;
        $json['split_rule_id'] = $this->splitRuleId;

        return $json;
    }
}