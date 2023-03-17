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
 *Response object for getting a customer
 */
class GetCustomerResponse implements JsonSerializable
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
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $delinquent public property
     */
    public $delinquent;

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
     * @var string $document public property
     */
    public $document;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @required
     * @maps fb_access_token
     * @var string $fbAccessToken public property
     */
    public $fbAccessToken;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\Address $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetPhonesResponse $phones public property
     */
    public $phones;

    /**
     * @todo Write general description for this property
     * @maps fb_id
     * @var integer|null $fbId public property
     */
    public $fbId;

    /**
     * Código de referência do cliente no sistema da loja. Max: 52 caracteres
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @maps document_type
     * @var string $documentType public property
     */
    public $documentType;

    /**
     * Constructor to set initial or default values of member properties
     * @param string             $id            Initialization value for $this->id
     * @param string             $name          Initialization value for $this->name
     * @param string             $email         Initialization value for $this->email
     * @param bool               $delinquent    Initialization value for $this->delinquent
     * @param \DateTime          $createdAt     Initialization value for $this->createdAt
     * @param \DateTime          $updatedAt     Initialization value for $this->updatedAt
     * @param string             $document      Initialization value for $this->document
     * @param string             $type          Initialization value for $this->type
     * @param string             $fbAccessToken Initialization value for $this->fbAccessToken
     * @param Address            $address       Initialization value for $this->address
     * @param array              $metadata      Initialization value for $this->metadata
     * @param GetPhonesResponse  $phones        Initialization value for $this->phones
     * @param integer            $fbId          Initialization value for $this->fbId
     * @param string             $code          Initialization value for $this->code
     * @param string             $documentType  Initialization value for $this->documentType
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->id            = func_get_arg(0);
            $this->name          = func_get_arg(1);
            $this->email         = func_get_arg(2);
            $this->delinquent    = func_get_arg(3);
            $this->createdAt     = func_get_arg(4);
            $this->updatedAt     = func_get_arg(5);
            $this->document      = func_get_arg(6);
            $this->type          = func_get_arg(7);
            $this->fbAccessToken = func_get_arg(8);
            $this->address       = func_get_arg(9);
            $this->metadata      = func_get_arg(10);
            $this->phones        = func_get_arg(11);
            $this->fbId          = func_get_arg(12);
            $this->code          = func_get_arg(13);
            $this->documentType  = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']              = $this->id;
        $json['name']            = $this->name;
        $json['email']           = $this->email;
        $json['delinquent']      = $this->delinquent;
        $json['created_at']      = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']      = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['document']        = $this->document;
        $json['type']            = $this->type;
        $json['fb_access_token'] = $this->fbAccessToken;
        $json['address']         = $this->address;
        $json['metadata']        = $this->metadata;
        $json['phones']          = $this->phones;
        $json['fb_id']           = $this->fbId;
        $json['code']            = $this->code;
        $json['document_type']   = $this->documentType;

        return $json;
    }
}
