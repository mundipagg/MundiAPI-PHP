<?php

declare(strict_types=1);

/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MundiAPILib\Models;

use stdClass;

/**
 * Request for updating an address
 */
class UpdateAddressRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $complement;

    /**
     * @var array<string,string>
     */
    private $metadata;

    /**
     * @var string
     */
    private $line2;

    /**
     * @param string $number
     * @param string $complement
     * @param array<string,string> $metadata
     * @param string $line2
     */
    public function __construct(string $number, string $complement, array $metadata, string $line2)
    {
        $this->number = $number;
        $this->complement = $complement;
        $this->metadata = $metadata;
        $this->line2 = $line2;
    }

    /**
     * Returns Number.
     * Number
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     * Number
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
     * Complement
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * Sets Complement.
     * Complement
     *
     * @required
     * @maps complement
     */
    public function setComplement(string $complement): void
    {
        $this->complement = $complement;
    }

    /**
     * Returns Metadata.
     * Metadata
     *
     * @return array<string,string>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Metadata
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
        $json['number']     = $this->number;
        $json['complement'] = $this->complement;
        $json['metadata']   = $this->metadata;
        $json['line_2']     = $this->line2;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
