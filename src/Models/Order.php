<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;
use MundiAPILib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class Order implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetOrderItemResponse[] $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\Customer|null $customer public property
     */
    public $customer;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps updated_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetChargeResponse[] $charges public property
     */
    public $charges;

    /**
     * @todo Write general description for this property
     * @required
     * @maps invoice_url
     * @var string $invoiceUrl public property
     */
    public $invoiceUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Shipping $shipping public property
     */
    public $shipping;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Checkout Payment Settings Response
     * @var \MundiAPILib\Models\GetCheckoutPaymentResponse[]|null $checkouts public property
     */
    public $checkouts;

    /**
     * Ip address
     * @var string|null $ip public property
     */
    public $ip;

    /**
     * Session id
     * @maps session_id
     * @var string|null $sessionId public property
     */
    public $sessionId;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\Location|null $location public property
     */
    public $location;

    /**
     * @todo Write general description for this property
     * @var \MundiAPILib\Models\Device|null $device public property
     */
    public $device;

    /**
     * Indicates whether the order is closed
     * @required
     * @var bool $closed public property
     */
    public $closed;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id         Initialization value for $this->id
     * @param string    $code       Initialization value for $this->code
     * @param string    $currency   Initialization value for $this->currency
     * @param array     $items      Initialization value for $this->items
     * @param Customer  $customer   Initialization value for $this->customer
     * @param string    $status     Initialization value for $this->status
     * @param \DateTime $createdAt  Initialization value for $this->createdAt
     * @param \DateTime $updatedAt  Initialization value for $this->updatedAt
     * @param array     $charges    Initialization value for $this->charges
     * @param string    $invoiceUrl Initialization value for $this->invoiceUrl
     * @param Shipping  $shipping   Initialization value for $this->shipping
     * @param array     $metadata   Initialization value for $this->metadata
     * @param array     $checkouts  Initialization value for $this->checkouts
     * @param string    $ip         Initialization value for $this->ip
     * @param string    $sessionId  Initialization value for $this->sessionId
     * @param Location  $location   Initialization value for $this->location
     * @param Device    $device     Initialization value for $this->device
     * @param bool      $closed     Initialization value for $this->closed
     */
    public function __construct()
    {
        if (18 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->code       = func_get_arg(1);
            $this->currency   = func_get_arg(2);
            $this->items      = func_get_arg(3);
            $this->customer   = func_get_arg(4);
            $this->status     = func_get_arg(5);
            $this->createdAt  = func_get_arg(6);
            $this->updatedAt  = func_get_arg(7);
            $this->charges    = func_get_arg(8);
            $this->invoiceUrl = func_get_arg(9);
            $this->shipping   = func_get_arg(10);
            $this->metadata   = func_get_arg(11);
            $this->checkouts  = func_get_arg(12);
            $this->ip         = func_get_arg(13);
            $this->sessionId  = func_get_arg(14);
            $this->location   = func_get_arg(15);
            $this->device     = func_get_arg(16);
            $this->closed     = func_get_arg(17);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['code']        = $this->code;
        $json['currency']    = $this->currency;
        $json['items']       = $this->items;
        $json['customer']    = $this->customer;
        $json['status']      = $this->status;
        $json['created_at']  = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']  = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['charges']     = $this->charges;
        $json['invoice_url'] = $this->invoiceUrl;
        $json['shipping']    = $this->shipping;
        $json['metadata']    = $this->metadata;
        $json['checkouts']   = $this->checkouts;
        $json['ip']          = $this->ip;
        $json['session_id']  = $this->sessionId;
        $json['location']    = $this->location;
        $json['device']      = $this->device;
        $json['closed']      = $this->closed;

        return $json;
    }
}
