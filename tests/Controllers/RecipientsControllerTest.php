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

class RecipientsControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \MundiAPILib\Controllers\RecipientsController Controller instance
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
        self::$controller = $client->getRecipients();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Retrieves paginated recipients information
     */
    public function testTestGetRecipients()
    {
        // Parameters for the API call
        $page = null;
        $size = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getRecipients($page, $size);
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
