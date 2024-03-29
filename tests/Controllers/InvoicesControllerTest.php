<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Tests;

use MundiAPILib\APIException;
use MundiAPILib\Exceptions;
use MundiAPILib\APIHelper;
use MundiAPILib\Models;
use MundiAPILib\Utils\DateTimeHelper;

class InvoicesControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \MundiAPILib\Controllers\InvoicesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \MundiAPILib\MundiAPIClient();
        self::$controller = $client->getInvoices();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Gets all invoices
     */
    public function testTestGetInvoices()
    {
        // Parameters for the API call
        $page = null;
        $size = null;
        $code = null;
        $customerId = null;
        $subscriptionId = null;
        $createdSince = null;
        $createdUntil = null;
        $status = null;
        $dueSince = null;
        $dueUntil = null;
        $customerDocument = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getInvoices($page, $size, $code, $customerId, $subscriptionId, $createdSince, $createdUntil, $status, $dueSince, $dueUntil, $customerDocument);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
