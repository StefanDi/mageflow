<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-07-31 at 17:38:29.
 */
class Mageflow_Connect_Model_Api2_System_Configuration_Rest_Admin_V1Test extends PHPUnit_Framework_TestCase
{

    /**
     * @var Mageflow_Connect_Model_Api2_System_Configuration_Rest_Admin_V1
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Mageflow_Connect_Model_Api2_System_Configuration_Rest_Admin_V1;
        $sampleData = array(
                    'scope_id'=>0,
                    'path'=>'some/thing',
                    'value'=>'another value'
                );
        print_r(json_encode($sampleData));
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Mageflow_Connect_Model_Api2_System_Configuration_Rest_Admin_V1::_retrieve
     * @todo   Implement test_retrieve().
     */
    public function test_retrieve()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Mageflow_Connect_Model_Api2_System_Configuration_Rest_Admin_V1::_retrieveCollection
     * @todo   Implement test_retrieveCollection().
     */
    public function test_retrieveCollection()
    {
        $this->object->_retrieveCollection();
    }

}