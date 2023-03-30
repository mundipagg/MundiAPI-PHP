<?php

declare(strict_types=1);

/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace MundiAPILib\Models;

use stdClass;

class ListTransfers implements \JsonSerializable
{
    /**
     * @var GetTransfer[]
     */
    private $data;

    /**
     * @var PagingResponse
     */
    private $paging;

    /**
     * @param GetTransfer[] $data
     * @param PagingResponse $paging
     */
    public function __construct(array $data, PagingResponse $paging)
    {
        $this->data = $data;
        $this->paging = $paging;
    }

    /**
     * Returns Data.
     * The Increments response
     *
     * @return GetTransfer[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * The Increments response
     *
     * @required
     * @maps data
     *
     * @param GetTransfer[] $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Paging.
     * Paging object
     */
    public function getPaging(): PagingResponse
    {
        return $this->paging;
    }

    /**
     * Sets Paging.
     * Paging object
     *
     * @required
     * @maps paging
     */
    public function setPaging(PagingResponse $paging): void
    {
        $this->paging = $paging;
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
        $json['data']   = $this->data;
        $json['paging'] = $this->paging;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
