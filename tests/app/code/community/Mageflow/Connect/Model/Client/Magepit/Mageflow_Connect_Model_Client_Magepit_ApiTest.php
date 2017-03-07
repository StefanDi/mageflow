<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-08-22 at 16:53:31.
 */
class Mageflow_Connect_Model_Client_Magepit_ApiTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Mageflow_Connect_Model_Client_Magepit_Api
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = Mage::getModel('mageflow_connect/client_magepit_api');
        ;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    public function testObject()
    {
        $this->assertInstanceOf('Mageflow_Connect_Model_Client_Magepit_Api',
            $this->object);
    }

    /**
     * @covers Mageflow_Connect_Model_Client_Magepit_Api::getAvailablePackages
     * @todo   Implement testGetAvailablePackages().
     */
    public function testGetAvailablePackages()
    {
        $collection = $this->object->getAvailablePackages();
        $this->assertNotEmpty($collection);
    }

}
