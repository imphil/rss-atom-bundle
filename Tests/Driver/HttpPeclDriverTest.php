<?php

namespace Debril\RssBundle\Driver;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-26 at 00:11:13.
 */
class HttpPeclDriverTest extends \PHPUnit_Framework_TestCase 
{

    const URL = 'http://feeds2.feedburner.com/androidcentral';
    
    /**
     * @var HttpPeclDriver
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new HttpPeclDriver;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Debril\RssBundle\Driver\HttpPeclDriver::getResponse
     * @todo   Implement testGetResponse().
     */
    public function testGetResponse() 
    {
        $lastModified = new \DateTime;
        $response = $this->object->getResponse(self::URL, $lastModified);
        
        $this->assertTrue($response instanceof HttpDriverResponse);
        
        $this->assertInternalType("string", $response->getBody());
        $this->assertGreaterThan(0, strlen($response->getBody()));
    }

}
