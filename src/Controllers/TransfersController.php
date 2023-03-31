<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Controllers;

use MundiAPILib\APIException;
use MundiAPILib\APIHelper;
use MundiAPILib\Configuration;
use MundiAPILib\Models;
use MundiAPILib\Exceptions;
use MundiAPILib\Http\HttpRequest;
use MundiAPILib\Http\HttpResponse;
use MundiAPILib\Http\HttpMethod;
use MundiAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class TransfersController extends BaseController
{
    /**
     * @var TransfersController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return TransfersController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * GetTransferById
     *
     * @param string $transferId  TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getTransferById(
        $transferId
    ) {

        //prepare query string for API call
        $_queryBuilder = '/transfers/{transfer_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'transfer_id' => $transferId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorException('Invalid request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\ErrorException('Invalid API key', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\ErrorException('An informed resource was not found', $_httpContext);
        }

        if ($response->code == 412) {
            throw new Exceptions\ErrorException('Business validation error', $_httpContext);
        }

        if ($response->code == 422) {
            throw new Exceptions\ErrorException('Contract validation error', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorException('Internal server error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MundiAPILib\\Models\\GetTransfer');
    }

    /**
     * CreateTransfer
     *
     * @param Models\CreateTransfer $body         TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postCreateTransfer(
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/transfers/recipients';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Content-Type'    => 'application/json'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorException('Invalid request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\ErrorException('Invalid API key', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\ErrorException('An informed resource was not found', $_httpContext);
        }

        if ($response->code == 412) {
            throw new Exceptions\ErrorException('Business validation error', $_httpContext);
        }

        if ($response->code == 422) {
            throw new Exceptions\ErrorException('Contract validation error', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorException('Internal server error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MundiAPILib\\Models\\GetTransfer');
    }

    /**
     * Gets all transfers
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getTransfers1()
    {

        //prepare query string for API call
        $_queryBuilder = '/transfers';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorException('Invalid request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\ErrorException('Invalid API key', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\ErrorException('An informed resource was not found', $_httpContext);
        }

        if ($response->code == 412) {
            throw new Exceptions\ErrorException('Business validation error', $_httpContext);
        }

        if ($response->code == 422) {
            throw new Exceptions\ErrorException('Contract validation error', $_httpContext);
        }

        if ($response->code == 500) {
            throw new Exceptions\ErrorException('Internal server error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'MundiAPILib\\Models\\ListTransfers');
    }
}
