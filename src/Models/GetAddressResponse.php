<?php

declare(strict_types=1);

/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MundiAPILib\Models;

use MundiAPILib\Utils\DateTimeHelper;
use stdClass;

/**
 * Response object for getting an Address
 */
class GetAddressResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $complement;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $neighborhood;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var GetCustomerResponse|null
     */
    private $customer;

    /**
     * @var array<string,string>
     */
    private $metadata;

    /**
     * @var string
     */
    private $line1;

    /**
     * @var string
     */
    private $line2;

    /**
     * @var \DateTime|null
     */
    private $deletedAt;

    /**
     * @param string $id
     * @param string $street
     * @param string $number
     * @param string $complement
     * @param string $zipCode
     * @param string $neighborhood
     * @param string $city
     * @param string $state
     * @param string $country
     * @param string $status
     * @param \DateTime $createdAt
     * @param \DateTime $updatedAt
     * @param array<string,string> $metadata
     * @param string $line1
     * @param string $line2
     */
    public function __construct(
        string $id,
        string $street,
        string $number,
        string $complement,
        string $zipCode,
        string $neighborhood,
        string $city,
        string $state,
        string $country,
        string $status,
        \DateTime $createdAt,
        \DateTime $updatedAt,
        array $metadata,
        string $line1,
        string $line2
    ) {
        $this->id = $id;
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
        $this->zipCode = $zipCode;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->metadata = $metadata;
        $this->line1 = $line1;
        $this->line2 = $line2;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Street.
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     *
     * @required
     * @maps street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     *
     * @required
     * @maps number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Complement.
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * Sets Complement.
     *
     * @required
     * @maps complement
     */
    public function setComplement(string $complement): void
    {
        $this->complement = $complement;
    }

    /**
     * Returns Zip Code.
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * Sets Zip Code.
     *
     * @required
     * @maps zip_code
     */
    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Returns Neighborhood.
     */
    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    /**
     * Sets Neighborhood.
     *
     * @required
     * @maps neighborhood
     */
    public function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    /**
     * Returns City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Sets State.
     *
     * @required
     * @maps state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Country.
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     *
     * @required
     * @maps country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @required
     * @maps updated_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @required
     * @maps metadata
     *
     * @param array<string,string> $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Line 1.
     * Line 1 for address
     */
    public function getLine1(): string
    {
        return $this->line1;
    }

    /**
     * Sets Line 1.
     * Line 1 for address
     *
     * @required
     * @maps line_1
     */
    public function setLine1(string $line1): void
    {
        $this->line1 = $line1;
    }

    /**
     * Returns Line 2.
     * Line 2 for address
     */
    public function getLine2(): string
    {
        return $this->line2;
    }

    /**
     * Sets Line 2.
     * Line 2 for address
     *
     * @required
     * @maps line_2
     */
    public function setLine2(string $line2): void
    {
        $this->line2 = $line2;
    }

    /**
     * Returns Deleted At.
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    /**
     * Sets Deleted At.
     *
     * @maps deleted_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDeletedAt(?\DateTime $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']             = $this->id;
        $json['street']         = $this->street;
        $json['number']         = $this->number;
        $json['complement']     = $this->complement;
        $json['zip_code']       = $this->zipCode;
        $json['neighborhood']   = $this->neighborhood;
        $json['city']           = $this->city;
        $json['state']          = $this->state;
        $json['country']        = $this->country;
        $json['status']         = $this->status;
        $json['created_at']     = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']     = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        if (isset($this->customer)) {
            $json['customer']   = $this->customer;
        }
        $json['metadata']       = $this->metadata;
        $json['line_1']         = $this->line1;
        $json['line_2']         = $this->line2;
        if (isset($this->deletedAt)) {
            $json['deleted_at'] = DateTimeHelper::toRfc3339DateTime($this->deletedAt);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
