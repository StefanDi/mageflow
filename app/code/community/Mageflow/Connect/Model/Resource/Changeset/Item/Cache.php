<?php

/**
 * Cache.php
 *
 * PHP version 5
 *
 * @category   MFX
 * @package    Mageflow_Connect
 * @subpackage Model
 * @author     Prototypely Ltd, Estonia <info@prototypely.com>
 * @copyright  Copyright © 2017 Prototypely Ltd, Estonia (http://prototypely.com) 
 * @license MIT Copyright (c) 2017 Prototypely Ltd
 * @link       http://mageflow.com/
 */

/**
 * Mageflow_Connect_Model_Resource_Changeset_Item_Cache
 *
 * @category   MFX
 * @package    Mageflow_Connect
 * @subpackage Model
 * @author     Prototypely Ltd, Estonia <info@prototypely.com>
 * @copyright  Copyright © 2017 Prototypely Ltd, Estonia (http://prototypely.com) 
 * @license MIT Copyright (c) 2017 Prototypely Ltd
 * @link       http://mageflow.com/
 */
class Mageflow_Connect_Model_Resource_Changeset_Item_Cache
    extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * Class constructor
     *
     * @return Mageflow_Connect_Model_Resource_Changeset_Item
     */
    public function _construct()
    {
        $this->_init('mageflow_connect/changeset_item_cache', 'id');
    }

    /**
     * Truncates mageflow_changeset_item_cache table
     *
     * @return $this
     */
    public function truncate()
    {
        $this->_getWriteAdapter()->query(
            'TRUNCATE TABLE ' . $this->getMainTable()
        );
        return $this;
    }

}
