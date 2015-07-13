<?php

class HM_EasyBanner_Model_Type extends Varien_Object
{
    const TYPE_SINGLE	= 1;
    const TYPE_LIST	= 2;
    const TYPE_CONTENT	= 3;

    static public function getOptionArray()
    {
        return array(
            self::TYPE_SINGLE    => Mage::helper('easybanner')->__('Single'),
            self::TYPE_LIST   => Mage::helper('easybanner')->__('List'),
            self::TYPE_CONTENT   => Mage::helper('easybanner')->__('Content')
        );
    }
}